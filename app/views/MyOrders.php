<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/MyOrders.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script>
      var URLROOT= "<?php echo URLROOT ?>"
  </script>
  <script src="<?php echo URLROOT ?>/public/js/jquery-3.5.1.min.js"></script>
  <style>
    .topnav a.logout {
      background-color: rgb(0, 0, 0, 0.7);
      color: white;
    }

    .topnav a.logout:hover {
      background-color: black;
      color: white;
    }
  </style>
</head>
<script src="<?php echo URLROOT ?>/public/js/topnavigation.js"></script>

<body>
  <div class="topnav" id="myTopnav">
    <a href="<?php echo URLROOT ?>/orders/makeOrder">Make Order</a>

    <a href="<?php echo URLROOT ?>/myOrders/myorder" class="active">My Orders</a>

    <?php
    if ($_SESSION['active'] == true) {
      echo ('<a href=' . URLROOT . '/users/profile>Profile</a>');
      echo ('<a href=' . URLROOT . '/users/logout">logout</a>');
    } else {
      echo ('<a href=' . URLROOT . '/users/loginVIew>Login</a>');
      echo ('<a href=' . URLROOT . '/users/register>Sign Up</a>');
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
      CART

      <a href="#" class="cancel">X</a>

    </div>
    <div class="content">
     


      <table id="customers">

        <tr>
          <th>ITEM</th>
          <th>QUANTITY</th>
          <th>PRICE</th>

        </tr>

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

    </div>


    <div class="footer">
    <div class=footterButton>
    <button onclick="checkout()">Checkout</button>
      <button class="cancelCheckout">Cancel</button>
    
    </div>
     
      <div id="b2"></div>
    </div>
  </div>

  <a> <button onclick="showCart()"><i class="fa fa-shopping-cart"></i>Cart</i></button></a>



  <div class="smallContainer cartPage">
    <table id="customers">
      <tr>
        <th></th>
        <th>ORDER NUMBER</th>
        <th>DATE</th>
        <th>MEDICINE LIST</th>
        <th>PRICE</th>
        <th>STATE</th>
        <th>CONFIRM DELIVERY</th>
      </tr>
      <tr>
        <td class="view"><a href="<?php echo URLROOT ?>/myOrders/order"><button>View</button></a></td>
        <td class="view">01 </td>
        <td>10/03/2020</td>

        <td>panadol<br>chandanalepa<br>iodex balm</td>
        <td>100</td>
        <td>PENDING or READY TO DELIVER OR DELIVERD </td>
        <td><button><i class="fa fa-check-square-o"></i>CONFIRM AS DELIVERD</button></td>
      </tr>

      <tr>
        <td class="view"><a href="<?php echo URLROOT ?>/myOrders/order"><button>View</button></a></td>
        <td class="view">02 </td>

        <td>11/03/2020</td>
        <td>panadol <br>ayurwedik hair oil</td>
        <td>300</td>
        <td>PENDING or READY TO DELIVER OR DELIVERD </td>
        <td><button><i class="fa fa-check-square-o"></i>CONFIRM AS DELIVERD</button></td>
      </tr>

      <tr>
        <td class="view"><a href="<?php echo URLROOT ?>/myOrders/order"><button>View</button></a></td>
        <td class="view">03 </td>

        <td>12/03/2020</td>
        <td>PRESCRIPTION</td>
        <td>3000</td>
        <td>PENDING or READY TO DELIVER OR DELIVERD </td>
        <td><button><i class="fa fa-check-square-o"></i>CONFIRM AS DELIVERD</button></td>
      </tr>


    </table>


  </div>

  <div class="line3">
    <div class="confirmOrder"><a href='<?php echo URLROOT ?>/orders/makeOrder'> <button><i class="fa fa-caret-square-o-left"></i> Continue Shopping</button></a>
    </div>
    <div class="complaint">
      <div class="confirmOrder"><a href='<?php echo URLROOT ?>/myOrders/complaint'> <button><i class="fa fa-caret-square-o-left"></i> Complaint</button></a></div>

    </div>
    <script>

window.onload = function() {
      viewOrder();
    };


    function viewOrders(){
      $.ajax({
        type: 'get',
        url: ''+URLROOT+'/myorders/getMyOrders',
        dataType: 'json',
        success: (MyOrders) => {


          

        }
      });




    }
      $("#open").click(function() {
        $("#a").css("display", "block");
        $("#b").css("display", "block");
      });


      $(".cancel").click(function() {
        $("#a").fadeOut();
        $("#b").fadeOut();
      });

      function showCart() {
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



    }
    </script>
</body>

</html>