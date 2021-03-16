<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/HomeAfterLogin.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/footer.css">
  
</head>


<body>


  <div class="topnav" id="myTopnav">
    <a href="<?php echo URLROOT ?>/orders/makeOrder" >Make Order</a>

    <a href="<?php echo URLROOT ?>/myOrders/myorder">My Orders</a>

    <?php
    if ($_SESSION['user_id'] != null) {
      echo ('<a href=' . URLROOT . '/users/profile class="active" >Profile</a>');
      echo ('<a href=' . URLROOT . '/users/logout>logout</a>');
    } else {
      echo ('<a href=' . URLROOT . '/users/loginVIew>Login</a>');
      echo ('<a href=' . URLROOT . '/users/register>Sign Up</a>');
    }  ?>

    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>

  <?php require APPROOT . '/views/left.php'?>
  
  <div class="main">

    <div class="card">
      <h1 style="text-align:center">User Profile</h1><br>

      <img src="<?php echo URLROOT ?>/public/img/profile.png" style="width:40% ">

      <div class="row">
        <div class="col-25">
          <label for="userName">User Name</label>
        </div>
        <div class="col-75" id="userName">
          <?php echo $_SESSION['username'] ?>

        </div>
      </div>



      <div class="row">
        <div class="col-25">
          <label for="fullName">Full Name</label>
        </div>
        <div class="col-75" id="fullName"><?php echo $_SESSION['FirstName'] . " " . $_SESSION['LastName'] ?></div>
      </div>

    

      <div class="row">
        <div class="col-25">
          <label for="nic">NIC</label>
        </div>
        <div class="col-75" id="nic"><?php echo $_SESSION['NIC'] ?></div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="nic">Email</label>
        </div>
        <div class="col-75" id="email"><?php echo $_SESSION['email'] ?></div>
      </div>

      

      <div class="phoneNumber">
        <div class="col-25">
          <label for="phoneNumber">Phone Number</label>
        </div>
        <div class="col-75" id="phoneNumber"><?php echo $_SESSION['PhoneNumber'] ?></div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="address">Address</label>
        </div>
        <div class="col-75" id="address"><?php echo $_SESSION['streetAddress1'];

                                          if (!empty($_SESSION['streetAddress2'])) {
                                            echo ",";
                                          }

                                          echo $_SESSION['streetAddress2'] . "," . $_SESSION['city'] . "," . $_SESSION['district'] . "." ?></div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="postalCode">Postal Code</label>
        </div>
        <div class="col-75" id="address"><?php echo $_SESSION['postalCode'] ?></div>
      </div>

      <a href="<?php echo URLROOT ?>/users/letUpdateProfile">
        <p><button>Edit Profile</button></p>
      </a>

    </div>
  </div>

 
  <?php require APPROOT . '/views/right.php'?>
  <?php require APPROOT . '/views/right2.php'?>
  <?php require APPROOT . '/views/footer.php'?>
  <!-- <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/footer.css"> -->

  <script type="text/javascript" src="<?php echo URLROOT ?>/public/js/home.js"></script>

</body>

</html>