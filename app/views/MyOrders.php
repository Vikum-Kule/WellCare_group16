<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/MyOrders.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script>
    var URLROOT = "<?php echo URLROOT ?>"
  </script>
  <script src="<?php echo URLROOT ?>/public/js/jquery-3.5.1.min.js"></script>
  
</head>
<script src="<?php echo URLROOT ?>/public/js/topnavigation.js"></script>
<script src="<?php echo URLROOT ?>/public/js/myOrder.js"></script>
  

<body>
  <div class="topnav" id="myTopnav">
    <a href="<?php echo URLROOT ?>/orders/makeOrder">Make Order</a>

    <?php
    if ($_SESSION['active'] == true) {
      echo ('<a href=' . URLROOT . '/myOrders/myorder class="active">My Orders</a>');
      echo ('<a href=' . URLROOT . '/users/profile>Profile</a>');
      echo ('<a href=' . URLROOT . '/users/logout>logout</a>');
    } else {

      echo ('<a href=' . URLROOT . '/users/loginVIew>Login</a>');
      echo ('<a href=' . URLROOT . '/users/register>Sign Up</a>');
      echo ('<a href=' . URLROOT . '/pages/fogotPasswordView>Forgot Password</a>');
    }  ?>
 
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>


  

  <div class="main">


    <div>

    </div>
  </div>
  <div class="modelcontainer" id="a">


  </div>
  <div class="modal" id="b">

    <div class="header">
      <div id="headername"></div>


      <a href="#" class="cancel">X</a>

    </div>
    <div class="content" id="cont">



      <table id="customers">

        <!-- <tr>
          <th>ITEM</th>
          <th>QUANTITY</th>
          <th>PRICE</th>

        </tr> -->

      </table>

      <div class="totalPrice">
        <table>
          <tr>
            <td>SUBTOTAL</td>
            <td id="SUBTOTAL">RS0</td>
          </tr>
          <tr>
            <td>DELIVERY FEE</td>
            <td id="DELIVERYFEE">RS0</td>
          </tr>
          <tr>
            <td>TOTAL</td>
            <td id="TOTAL">RS0</td>
          </tr>
        </table>
        

      </div>
      <div id="btnComplain" class="btnComplain"></div>

    </div>
    


    <div id="b2"></div>
  </div>
  
  </div>
 





  <div class="smallContainer cartPage">
    <table id="orders">
      <tr>
        <th>view</th>
        <th>ORDER NUMBER</th>
        <th>DATE AND TIME</th>
        <th>STATE</th>
        <th></th>
        <th>NOTIFICATION</th>
      </tr>




    </table>
    <div id="sudesh">

    </div>


  </div>

  <div class="line3">
    <div class="confirmOrder"><a href='<?php echo URLROOT ?>/orders/makeOrder'> <button><i class="fa fa-caret-square-o-left"></i> Continue Shopping</button></a>
    </div>
    <div class="complaint">
      <div class="confirmOrder"><a href='<?php echo URLROOT ?>/myOrders/complaint'> <button><i class="fa fa-caret-square-o-left"></i> Complaint</button></a></div>

    </div>
    <!-- <button class="trigger2">Click here to trigger the modal!</button> -->

    <!-- model2 -->
    <div class="modal2">
      <div class="modal2-content">
          <span class="close-button2">&times;</span>
          <h2>Enable SMS Notifications</h2><br>
          <h4>Click ENABLE button to get reminder sms for your medication in order NO:</h4>

          <div class="enable">

          
          <label for="cars">NUMBER OF DAYS:</label>

          <select name="noOfDays" id="noOfDays">
            <option value="1">ONLY 1 DAY</option>
            <option value="2">ONLY 2 DAYS</option>
            <option value="3">ONLY 3 DAYS</option>
            <option value="4">ONLY 4 DAYS</option>
          </select>
          <div id="notificationEnableBar"></div>
          
          </div>
      </div>
  </div>
  
    <!-- model2 -->

    <script>
      const modal = document.querySelector(".modal2");
  // const trigger = document.querySelector(".trigger2");
  const closeButton = document.querySelector(".close-button2");

  function toggleModal(orderId) {
      modal.classList.toggle("show-modal2");

    
    $("#notificationEnableBar").html('<button onclick="enableNotification('+orderId+')">ENABLE</button>');


  }
  function enableNotification(orderId){
    console.log(orderId);
    var noOfDays = $("#noOfDays").val();
    console.log(noOfDays);


  }

  function windowOnClick(event) {
      if (event.target === modal) {
          toggleModal();
      }
  }

  // trigger.addEventListener("click", toggleModal);
  closeButton.addEventListener("click", toggleModal);
  window.addEventListener("click", windowOnClick);

  function disable(orderId){
    console.log(orderId);
    $.ajax({
      type: 'post',
      url: '' + URLROOT + '/myorders/disableMsg',
      data: JSON.stringify({
        orderId: orderId
      }),
      dataType: 'json',
      success: (responce) => {
        if(responce){
          viewPreparedOrders();
          viewNonPreparedOrders();
        }
       
       
      }
    });


  }


      // window.onload = function() {
      //   viewNonPreparedOrders();
      //   viewPreparedOrders();
      // };

      // //1=nonprepared ,non prescription
      // //3=nonprepared ,prescription
      // //2=prepared
      // function viewNonPreparedOrders() {
      //   $.ajax({
      //     type: 'get',
      //     url: '' + URLROOT + '/myorders/getNonPreparedMyOrders',
      //     dataType: 'json',
      //     success: (MyNonPreparedMyOrders) => {
      //       console.log(MyNonPreparedMyOrders);

      //       MyNonPreparedMyOrders.forEach(nonPreparedMyOrder => {
      //         var type = 0;
      //         if (nonPreparedMyOrder.image_path) {
      //           type = 3;

      //         } else {

      //           type = 1;
      //         }

      //         const html = '<tr id=" np' + nonPreparedMyOrder.orderId + ' ">' +
      //           '<td class="view"><button onclick="showCart(' + type + ',' + nonPreparedMyOrder.orderId + ')">View</button></a></td>' +
      //           '<td class="view">' + nonPreparedMyOrder.orderId + ' </td>' +
      //           '<td>' + nonPreparedMyOrder.DateTime + '</td>' +

      //           '<td>PENDING </td>' +
      //           '<td><button disabled><i class="fa fa-check-square-o"></i>ENABLE</button></td>'
      //         '</tr>';
      //         $('#orders').append(html);
      //       });

      //     }
      //   });
      // }

      // function viewPreparedOrders() {
      //   $.ajax({
      //     type: 'get',
      //     url: '' + URLROOT + '/myorders/getPreparedMyOrders',
      //     dataType: 'json',
      //     success: (MyPreparedOrders) => {
      //       console.log(MyPreparedOrders);
      //       MyPreparedOrders.forEach(PreparedMyOrder => {
      //         var status;
      //         if (PreparedMyOrder.status == "completed") {

      //           status = "READY TO DELIVER";
      //         } else if (PreparedMyOrder.status == "delivered") {
      //           status = "delivered"
      //         } else {
      //           status = "ORDER IS READY,DO THE PAYMENTS";
      //         }
      //         const html = '<tr id="p' + PreparedMyOrder.orderId + '">' +
      //           '<td class="view"><button onclick="showCart(2,' + PreparedMyOrder.orderId + ')">View</button></a></td>' +
      //           '<td class="view">' + PreparedMyOrder.orderId + ' </td>' +
      //           '<td>' + PreparedMyOrder.DateTime + '</td>' +

      //           '<td>' + status + '</td>' +
      //           '<td><button><i class="fa fa-check-square-o"></i>ENABLE</button></td>'
      //         '</tr>';
      //         $('#orders').append(html);
      //       });
      //     }
      //   });
      // }

      $("#open").click(function() {
        $("#a").css("display", "block");
        $("#b").css("display", "block");
      });


      $(".cancel").click(function() {
        
        $("#a").fadeOut();
        $("#b").fadeOut();
        
      });
      // var subtotal = 0;

      // function showCart(type, orderId) {

      //   subtotal = 0;
      //   $('#customers').html(' <tr>' +
      //     ' <th>ITEM</th>' +
      //     ' <th>QUANTITY</th>' +
      //     ' <th>PRICE</th>' +
      //     ' <!-- <th>REMOVE</th> -->' +
      //     '  </tr>'
      //   );
      //   $("#a").css("display", "block");
      //   $("#main").css("display", "block");
      //   $("#b").css("display", "block");
      //   $("#headername").html("ORDER N0:" + orderId);

      //   if (type == 1) {
      //     loadNonPreparedMyOrderMedicineList(orderId);
      //   } else if (type == 3) {
      //     loadPrescription(orderId);

      //   } else {
      //     loadPreparedMyOrderMedicineList(orderId);
      //   }
        
      // }

      // function loadPrescription(orderId) {
      //   const html = '<div class="card"><img src="' + URLROOT + '/public/img/prescriptions/' + orderId + '.JPG" style="width:100%"></div>';
      //   $('#customers').html(html);
      // }

      // function loadNonPreparedMyOrderMedicineList(orderId) {

      //   $.ajax({
      //     type: 'post',
      //     url: '' + URLROOT + '/myorders/nonPreparedMyOrdersData',
      //     data: JSON.stringify({
      //       orderId: orderId
      //     }),
      //     dataType: 'json',
      //     success: (nonPreparedMyOrdersData) => {
      //       //console.log(_isempty.nonPreparedMyOrdersData);
      //       nonPreparedMyOrdersData.forEach(cartItem => {
      //         //console.log(cartItem.image_path);
      //         // console.log(cartItem[1]);
      //         if (cartItem) {
      //           const html =
      //             ' <tr >' +
      //             ' <td>' +
      //             ' <div class="cartInfo"><img src="' + URLROOT + '/public/img/medicines/' + cartItem.medicineId + '.jpg" style= "width:10%">' +
      //             ' <div>' +
      //             ' <p>' + cartItem.name + '</p><small>' + cartItem.price + '</small>' + //"addToCart('+medicine.medicineId+',1)"
      //             ' </div>' +
      //             ' </div>' +
      //             ' </td>' +
      //             ' <input type="hidden" class="pid" value="' + cartItem.medicineId + '">' +
      //             ' <td ><input disabled class="input_num" type="number"  value="' + cartItem.qty + '" ></td>' +
      //             ' <td>' + cartItem.price * cartItem.qty + ' </td>' +

      //             '</tr>';

      //           total(cartItem.price * cartItem.qty, 200);
      //           $('#customers').append(html);
      //         }
      //       });
      //     }
      //   });
      // }

      // function total(price, deliverFee) {
      //   subtotal = subtotal + price;
      //   // console.log(subtotal);
      //   $('#SUBTOTAL').html('RS' + subtotal);
      //   $('#DELIVERYFEE').html('RS' + deliverFee);
      //   var fulltotal = subtotal + deliverFee;
      //   $('#TOTAL').html('RS' + fulltotal);
      // }

      // function loadPreparedMyOrderMedicineList(orderId) {

      //   $.ajax({
      //     type: 'post',
      //     url: '' + URLROOT + '/myorders/preparedMyOrdersData',
      //     data: JSON.stringify({
      //       orderId: orderId
      //     }),
      //     dataType: 'json',
      //     success: (preparedMyOrdersData) => {
      //       console.log(preparedMyOrdersData);
      //       preparedMyOrdersData.forEach(cartItem => {


      //         if (cartItem) {
      //           const html =
      //             ' <tr >' +
      //             ' <td>' +
      //             ' <div class="cartInfo"><img src="' + URLROOT + '/public/img/medicines/med4.jpg">' +
      //             ' <div>' +
      //             ' <p>' + cartItem.name + '</p><small>' + cartItem.price + '</small><button onclick="removeItem(' + cartItem[0].medicineId + ')">REMOVE</button>' + //"addToCart('+medicine.medicineId+',1)"
      //             ' </div>' +
      //             ' </div>' +
      //             ' </td>' +
      //             ' <input type="hidden" class="pid" value="' + cartItem.medicineId + '">' +
      //             ' <td ><input class="input_num" type="number"  value="' + cartItem.qty + '" ></td>' +
      //             ' <td>' + cartItem.price * cartItem.qty + ' </td>' +
      //             '</tr>';

      //           total(cartItem.price * cartItem.qty, 200);
      //           $('#customers').append(html);

      //         }
      //       });
      //     }
      //   });

      // }
    </script>
</body>

</html>