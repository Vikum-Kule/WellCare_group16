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
    <a href="<?php echo URLROOT ?>/orders/makeOrder">Home</a>

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
        <th></th>
        <th></th>
        <th></th>

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
        <h2>
          <div id="model2head"></div>
        </h2><br>
        <h4>
          <div id="model2message"></div>
        </h4>
        <div id="notificationEnableBar"></div>
      </div>
    </div>
  </div>



  <script>
    const modal = document.querySelector(".modal2");

    const closeButton = document.querySelector(".close-button2");

    function toggleModal(type, orderId) {
       modal.classList.toggle("show-modal2");
      if (type == 1) {
        $("#model2head").html('');
        $("#model2message").html('')
        //modal.classList.toggle("show-modal2");
      
        $("#notificationEnableBar").html('');
            $.ajax({
            type: 'post',
            url: '' + URLROOT + '/myorders/cofirmOrderByCustomer',
            data: JSON.stringify({
              orderId: orderId
            }),
            dataType: 'json',
            success: (responce) => {

              console.log(responce);
              if (responce.responce) {
                
                
                $("#model2head").html('ORDER : '+responce.orderId+' CONFIRMED <br><img  src="'+URLROOT+'/public/img/confirm_order.png" style="width:30%;margin-left: 35%;">');
                $("#model2message").html('Thank you for confirming the order.The order will arrive on doorstep in 3-4 week days')
                
                $('#btnCanselOrder'+responce.orderId).hide();
                $('#btnConfirmOrder'+responce.orderId).hide();

                $('#status'+responce.orderId).html('CONFIRMED,IT MIGHT TAKE 3-4 WEEK DAYS TO DELIVER.THANK YOU!...');
                //'<td id="status'+PreparedMyOrder.orderId+'"


                
               

              }


            }
          });
      } else if (type == 2) {
        // console.log(type);
        
        $("#model2head").html('CANCEL ORDER: '+orderId+'<br><img  src="'+URLROOT+'/public/img/cancel_order.png" style="width:30%;margin-left: 35%;">');
        $("#model2message").html(' <form id="complaint" method="POST" action="'+URLROOT+'/myOrders/complaint">'+
        '<input type="hidden" id="complaintOrderId" name="complaintOrderId" value="'+orderId+'">'+        
        '<input type="submit" class="btnInquary" value="Complaint">'+
        '</form>'
        +'If you have any complaint regarding the order you can posting a inquary by clicking COMPLAINT button')
        //modal.classList.toggle("show-modal2");
      
        $("#notificationEnableBar").html('<button class="btnCancel" onclick="canselOrder('+orderId+')">Cancel order:'+orderId+'</button>');
      }

      
    }



    function canselOrder(orderId) {
      $("#model2head").html('');
        $("#model2message").html('')
        //modal.classList.toggle("show-modal2");
      
        $("#notificationEnableBar").html('');
      $.ajax({
            type: 'post',
            url: '' + URLROOT + '/myorders/cancelOrderByCustomer',
            data: JSON.stringify({
              orderId: orderId
            }),
            dataType: 'json',
            success: (responce) => {

              console.log(responce);
              if (responce.responce) {
                
                
                $("#model2head").html('ORDER : '+responce.orderId+'  CANCELED');
               
               
                $('#btnCanselOrder'+responce.orderId).hide();
                $('#btnConfirmOrder'+responce.orderId).hide();
                $('#status'+responce.orderId).html('ORDER HAS BEEN CANCELED!...');

                
               

              }


            }
          });


    }

    function windowOnClick(event) {
      if (event.target === modal) {
        toggleModal();
      }
    }

    // trigger.addEventListener("click", toggleModal);
    closeButton.addEventListener("click", toggleModal);
    window.addEventListener("click", windowOnClick);

    

    $("#open").click(function() {
      $("#a").css("display", "block");
      $("#b").css("display", "block");
    });


    $(".cancel").click(function() {

      $("#a").fadeOut();
      $("#b").fadeOut();

    });
  </script>
</body>

</html>