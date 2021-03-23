window.onload = function() {
    viewNonPreparedOrders();
    viewPreparedOrders();
  };

  //1=nonprepared ,non prescription
  //3=nonprepared ,prescription
  //2=prepared
  function viewNonPreparedOrders() {
    $.ajax({
      type: 'get',
      url: '' + URLROOT + '/myorders/getNonPreparedMyOrders',
      dataType: 'json',
      success: (MyNonPreparedMyOrders) => {
        console.log(MyNonPreparedMyOrders);

        MyNonPreparedMyOrders.forEach(nonPreparedMyOrder => {
          var type = 0;
          if (nonPreparedMyOrder.image_path) {
            type = 3;

          } else {

            type = 1;
          }

          const html = '<tr id=" np' + nonPreparedMyOrder.orderId + ' ">' +
            '<td class="view"><button onclick="showCart(' + type + ',' + nonPreparedMyOrder.orderId + ')">View</button></a></td>' +
            '<td class="view">' + nonPreparedMyOrder.orderId + ' </td>' +
            '<td>' + nonPreparedMyOrder.DateTime + '</td>' +

            '<td>PENDING </td>' +
            '<td><button disabled><i class="fa fa-check-square-o"></i>ENABLE</button></td>'
          '</tr>';
          $('#orders').append(html);
        });

      }
    });
  }

  function viewPreparedOrders() {
    $.ajax({
      type: 'get',
      url: '' + URLROOT + '/myorders/getPreparedMyOrders',
      dataType: 'json',
      success: (MyPreparedOrders) => {
        console.log(MyPreparedOrders);
        MyPreparedOrders.forEach(PreparedMyOrder => {
          var status;
          if (PreparedMyOrder.status == "completed") {

            status = "READY TO DELIVER";
          } else if (PreparedMyOrder.status == "delivered") {
            status = "delivered"
          } else {
            status = "ORDER IS READY,DO THE PAYMENTS";
          }
          const html = '<tr id="p' + PreparedMyOrder.orderId + '">' +
            '<td class="view"><button onclick="showCart(2,' + PreparedMyOrder.orderId + ')">View</button></a></td>' +
            '<td class="view">' + PreparedMyOrder.orderId + ' </td>' +
            '<td>' + PreparedMyOrder.DateTime + '</td>' +

            '<td>' + status + '</td>' +
            '<td><button><i class="fa fa-check-square-o"></i>ENABLE</button></td>'
          '</tr>';
          $('#orders').append(html);
        });
      }
    });
  }

//   $("#open").click(function() {
//     $("#a").css("display", "block");
//     $("#b").css("display", "block");
//   });


//   $(".cancel").click(function() {
    
//     $("#a").fadeOut();
//     $("#b").fadeOut();
    
//   });
  var subtotal = 0;

  function showCart(type, orderId) {

    subtotal = 0;
    $('#customers').html(' <tr>' +
      ' <th>ITEM</th>' +
      ' <th>QUANTITY</th>' +
      ' <th>PRICE</th>' +
      ' <!-- <th>REMOVE</th> -->' +
      '  </tr>'
    );
    $("#a").css("display", "block");
    $("#main").css("display", "block");
    $("#b").css("display", "block");
    $("#headername").html("ORDER N0:" + orderId);

    if (type == 1) {
      loadNonPreparedMyOrderMedicineList(orderId);
    } else if (type == 3) {
      loadPrescription(orderId);

    } else {
      loadPreparedMyOrderMedicineList(orderId);
    }
    
  }

  function loadPrescription(orderId) {
    const html = '<div class="card"><img src="' + URLROOT + '/public/img/prescriptions/' + orderId + '.JPG" style="width:100%"></div>';
    $('#customers').html(html);

    $('#DELIVERYFEE').html('processing');
    $('#SUBTOTAL').html('processing');
    $('#TOTAL').html('processing');
    
    // <td id="SUBTOTAL">RS0</td>
        //   </tr>
        //   <tr>
        //     <td>DELIVERY FEE</td>
        //     <td id="DELIVERYFEE">RS0</td>
        //   </tr>
        //   <tr>
        //     <td>TOTAL</td>
        //     <td id="TOTAL">RS0</td>
  }

  function loadNonPreparedMyOrderMedicineList(orderId) {

    $.ajax({
      type: 'post',
      url: '' + URLROOT + '/myorders/nonPreparedMyOrdersData',
      data: JSON.stringify({
        orderId: orderId
      }),
      dataType: 'json',
      success: (nonPreparedMyOrdersData) => {
        //console.log(_isempty.nonPreparedMyOrdersData);
        nonPreparedMyOrdersData.forEach(cartItem => {
          //console.log(cartItem.image_path);
          // console.log(cartItem[1]);
          if (cartItem) {
            const html =
              ' <tr >' +
              ' <td>' +
              ' <div class="cartInfo"><img src="' + URLROOT + '/public/img/medicines/' + cartItem.medicineId + '.jpg" style= "width:10%">' +
              ' <div>' +
              ' <p>' + cartItem.name + '</p><small>' + cartItem.price + '</small>' + //"addToCart('+medicine.medicineId+',1)"
              ' </div>' +
              ' </div>' +
              ' </td>' +
              ' <input type="hidden" class="pid" value="' + cartItem.medicineId + '">' +
              ' <td ><input disabled class="input_num" type="number"  value="' + cartItem.qty + '" ></td>' +
              ' <td>' + cartItem.price * cartItem.qty + ' </td>' +

              '</tr>';

            total(cartItem.price * cartItem.qty, 200);
            $('#customers').append(html);
          }
        });
      }
    });
  }

  function total(price, deliverFee) {
    subtotal = subtotal + price;
    // console.log(subtotal);
    $('#SUBTOTAL').html('RS' + subtotal);
    $('#DELIVERYFEE').html('RS' + deliverFee);
    var fulltotal = subtotal + deliverFee;
    $('#TOTAL').html('RS' + fulltotal);
  }

  function loadPreparedMyOrderMedicineList(orderId) {

    $.ajax({
      type: 'post',
      url: '' + URLROOT + '/myorders/preparedMyOrdersData',
      data: JSON.stringify({
        orderId: orderId
      }),
      dataType: 'json',
      success: (preparedMyOrdersData) => {
        console.log(preparedMyOrdersData);
        preparedMyOrdersData.forEach(cartItem => {


          if (cartItem) {
            const html =
              ' <tr >' +
              ' <td>' +
              ' <div class="cartInfo"><img src="' + URLROOT + '/public/img/medicines/med4.jpg">' +
              ' <div>' +
              ' <p>' + cartItem.name + '</p><small>' + cartItem.price + '</small><button onclick="removeItem(' + cartItem[0].medicineId + ')">REMOVE</button>' + //"addToCart('+medicine.medicineId+',1)"
              ' </div>' +
              ' </div>' +
              ' </td>' +
              ' <input type="hidden" class="pid" value="' + cartItem.medicineId + '">' +
              ' <td ><input class="input_num" type="number"  value="' + cartItem.qty + '" ></td>' +
              ' <td>' + cartItem.price * cartItem.qty + ' </td>' +
              '</tr>';

            total(cartItem.price * cartItem.qty, 200);
            $('#customers').append(html);

          }
        });
      }
    });

  }