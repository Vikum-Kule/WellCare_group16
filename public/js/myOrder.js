window.onload = function() {
    viewPreparedOrders();
    viewNonPreparedOrders();
    
  };

  //1=nonprepared ,non prescription
  //3=nonprepared ,prescription
  //2=prepared,,non prescription
   //4=prepared,prescription

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
                          '<td></td>'
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
         
          if (PreparedMyOrder.status == "pending") {

            status = "ORDER IS READY,WAITING FOR CONFIRMATION";
            btnConfirm='<td><button id="btnConfirmOrder'+PreparedMyOrder.orderId+'" onclick="toggleModal(1,'+PreparedMyOrder.orderId+')">CONFIRM</button></td>';
            btnCansel='<td><button class="btnCansel" id="btnCanselOrder'+PreparedMyOrder.orderId+'" onclick="toggleModal(2,'+PreparedMyOrder.orderId+')">CANCEL</button></td>';
           
          } else if (PreparedMyOrder.status == "delivered") {
            status = "DELIVERED";
            btnConfirm='<td></td>';
            btnCansel='<td></td>';
            
          } else if(PreparedMyOrder.status=='completed') {
            status = "CONFIRMED,IT MIGHT TAKE 3-4 WEEK DAYS TO DELIVER.THANK YOU!...";
            btnConfirm='<td></td>';
            btnCansel='<td></td>';

          }else if(PreparedMyOrder.status=='canceled'){
            status = "ORDER HAS BEEN CANCELED!...";
            btnConfirm='<td></td>';
            btnCansel='<td></td>';


          }else{

            status = "SOMETHING WRONG!...";
          }
          var type=0;
          var notification;
          if(PreparedMyOrder.image_path){
            type=4;
           

         // <button  onclick="toggleModal(2)">Click here to trigger the modal!</button>
          }else{
              type =2;
           
          }


          const html = '<tr id="p' + PreparedMyOrder.orderId + '">' +
                          '<td class="view"><button onclick="showCart('+type+',' + PreparedMyOrder.orderId + ')">View</button></a></td>' +
                          '<td class="view">' + PreparedMyOrder.orderId + ' </td>' +
                          '<td>' + PreparedMyOrder.DateTime + '</td>' +
                          '<td id="status'+PreparedMyOrder.orderId+'">' + status + '</td>' +
                          '<td>' +  btnConfirm+ '</td>'+
                          '<td>' +  btnCansel+ '</td>'+
                       '</tr>';

          $('#orders').append(html);
        });
      }
    });
  }


  var subtotal = 0;

  function showCart(type, orderId) {

    subtotal = 0;
        $('#btnComplain').html("");
       

    
    $("#a").css("display", "block");
    $("#main").css("display", "block");
    $("#b").css("display", "block");
    $("#headername").html("ORDER N0:" + orderId);
    //1=nonprepared ,non prescription
  //3=nonprepared ,prescription
  //2=prepared,,non prescription
   //4=prepared,prescription

    if (type == 1) {
        $('#customers').html(' <tr>' +
      ' <th>ITEM</th>' +
      ' <th>QUANTITY</th>' +
      ' <th>PRICE</th>' +
      ' <!-- <th>REMOVE</th> -->' +
      '  </tr>'
    );
      loadNonPreparedMyOrderMedicineList(orderId);
    } else if (type == 3) {
      loadPrescription(orderId);

    } else if(type==2) {
        $('#customers').html(' <tr>' +
      ' <th>ITEM</th>' +
      ' <th>QUANTITY</th>' +
      ' <th>PRICE</th>' +
      ' <!-- <th>REMOVE</th> -->' +
      '  </tr>'
    );
      loadPreparedMyOrderMedicineList(orderId);
    }else{
        $('#customers').html(' <tr>' +
        ' <th>ITEM</th>' +
        ' <th>DOSE</th>' +
        ' <th>FREQUENCY</th>' +
        ' <th>QUANTITY</th>' +
        ' <th>PRICE</th>' +
        ' <!-- <th>REMOVE</th> -->' +
        '  </tr>');
        loadPreparedPrescription(orderId);


    }
    
  }
  function loadPreparedPrescription(orderId){
    $.ajax({
        type: 'post',
        url: '' + URLROOT + '/myorders/loadPreparedPrescription',
        data: JSON.stringify({
          orderId: orderId
        }),
        dataType: 'json',
        success: (preparedMyOrdersData) => {
          //console.log(_isempty.nonPreparedMyOrdersData);
          preparedMyOrdersData.forEach(cartItem => {
            //console.log(cartItem.image_path);
            // console.log(cartItem[1]);
            if (cartItem) {
              const html =
                '<tr >' +
                '<td>' +
                '<div class="cartInfo"><img src="' + URLROOT + '/public/img/medicines/' + cartItem.medicineId + '.jpg" style= "width:10%">' +
                '<div>' +
                '<p>' + cartItem.medName + '</p><small>' + cartItem.price + '</small>' + //"addToCart('+medicine.medicineId+',1)"
                '</div>' +
                '</div>' +
                '</td>' +
                '<td>' + cartItem.dose + '(' + cartItem.doseStatus + ')' + '</td>' +
                '<td>' + cartItem.frequency + '(' + cartItem.frequencyStatus + ')' + '</td>' +


                ' <input type="hidden" class="pid" value="' + cartItem.medicineId + '">' +
                ' <td ><input disabled class="input_num" type="number"  value="' + cartItem.QTY + '" ></td>' +
                ' <td>' + cartItem.price * cartItem.QTY + ' </td>' +

                '</tr>';

              total(cartItem.price * cartItem.QTY, 200);
              $('#customers').append(html);
            }
          });

        //  html='<a href='+URLROOT+'/myOrders/complaint><button>complaint</button></a>';

// **********************************************************************************************************
         html=' <form id="complaint" method="POST" action="'+URLROOT+'/myOrders/complaint">'+
                  '<input type="hidden" id="complaintOrderId" name="complaintOrderId" value="'+preparedMyOrdersData[0].orderId+'">'+        
                  '<input type="submit" value="complaint">'+
              '</form>';

// **********************************************************************************************************


        //html='<button onclick="complaint('+preparedMyOrdersData[0].orderId+')">complaint</button>'
        $('#btnComplain').html(html);
        }
      });




  }

  function loadPrescription(orderId) {


    // const html = '<div class="card"><img src="' + URLROOT + '/public/img/prescriptions/' + orderId + '.JPG" style="width:100%"></div>';
    // $('#customers').html(html);

    // $('#DELIVERYFEE').html('processing');
    // $('#SUBTOTAL').html('processing');
    // $('#TOTAL').html('processing');


    $.ajax({
        type: 'post',
        url: '' + URLROOT + '/myorders/getPrescriptionData',
        data: JSON.stringify({
          orderId: orderId
        }),
        dataType: 'json',
        success: (PrescriptionData) => {
            console.log(PrescriptionData);
            var res = PrescriptionData[0].image_path.split(".");

            if(res[1]=='pdf'){
              var html = '<iframe src="' + URLROOT + '/public/img/prescriptions/' + PrescriptionData[0].image_path+ '" height="400" width="80%" style="display: block;margin-left: auto;margin-right: auto;width: 50%"></iframe> ';

            }else{
              var html = '<div class="card"><img src="' + URLROOT + '/public/img/prescriptions/' + PrescriptionData[0].image_path+ '" style="display: block;margin-left: auto;margin-right: auto;width: 50%"></iframe>';
            }
           //const html = '<div class="card"><embed src="' + URLROOT + '/public/img/prescriptions/' +PrescriptionData[0].image_path+'" style="display: block; margin-left: auto;margin-right: auto;width: 50%;"></div>';
             
            $('#customers').html(html);
             


        }
        
    });
    $('#DELIVERYFEE').html('processing');
    $('#SUBTOTAL').html('processing');
    $('#TOTAL').html('processing');
   
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
              ' <div class="cartInfo"><img src="' + URLROOT + '/public/img/medicines/' + cartItem.medicineId + '.jpg" style= "width:10%">' +
              ' <div>' +
              ' <p>' + cartItem.name + '</p><small>' + cartItem.price + '</small>' + 
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

        html=' <form id="complaint" method="POST" action="'+URLROOT+'/myOrders/complaint">'+
                  '<input type="hidden" id="complaintOrderId" name="complaintOrderId" value="'+preparedMyOrdersData[0].orderId+'">'+        
                  '<input type="submit" value="complaint">'+
              '</form>';
        //html='<a href='+URLROOT+'/myOrders/complaint><button>complaint</button></a>';
        //html='<button onclick="complaint('+preparedMyOrdersData[0].orderId+')">complaint</button>'
        $('#btnComplain').html(html);
//<a href='<?php echo URLROOT ?>/orders/uploadPrescription'><button>Upload Prescription</button></a>

      }
    });

    

    
  }
  function complaint(orderId){
    $.ajax({
      type: 'post',
      url: '' + URLROOT + '/myorders/complaint',
      data: JSON.stringify({
        orderId: orderId
      }),
      dataType: 'json',
      success: (x) => {
       
      }
    });



  }
  function  loadEnableMsgButton(orderId){
    $.ajax({
      type: 'post',
      url: '' + URLROOT + '/myorders/EnableMsgButton',
      data: JSON.stringify({
        orderId: orderId
      }),
      dataType: 'json',
      success: (responce) => {

        if(responce.isSet){  //thiyanawa
          var notification='<button  class="disableBtn" onclick="disable('+responce.orderId+')">DISABLE</button>';
          $('#EnableMsgButton_'+responce.orderId).html(notification);

        }else{
          //<td id="EnableMsgButton_'+PreparedMyOrder.orderId+'"></td>';
       var notification='<button onclick="toggleModal('+responce.orderId+')">ENABLE</button>';
       $('#EnableMsgButton_'+responce.orderId).html(notification);
        }
       
      }
    });



  }
 
  