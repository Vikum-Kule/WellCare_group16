<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/Home.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/footer.css">

</head>
<script src="<?php echo URLROOT ?>/public/js/topnavigation.js"></script>
<script src="<?php echo URLROOT ?>/public/js/home.js"></script>

<body>

  <div class="topnav" id="myTopnav">
    <a href="<?php echo URLROOT ?>/orders/makeOrder">Make Order</a>
    <?php
    if ($_SESSION['active'] == true) {
      echo ('<a href=' . URLROOT . '/myOrders/myorder>My Orders</a>');
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

  <?php require APPROOT . '/views/left.php' ?>

  <div class="main">

    <form action="<?php echo URLROOT; ?>/users/recoverpassword" method="POST">
      <div class="container">

        <label><b><?php print_r($_SESSION['email']) ?></b></label> <br><br>

        <label><b>Recovery Password</b></label>
        <input type="text" placeholder="Enter recover password" name="recoverPassword" id="recoverPassword">
        <span class="invalidFeedback"><?php if ($data != NULL) {
                                        echo $data['recoverPasswordError'];
                                      } ?></span>
        <br>
        <label><b>New Password</b></label>
        <input type="text" placeholder="Enter New Password" name="newPassword" id="newPassword">
        <span class="invalidFeedback"><?php if ($data != NULL) {
                                        echo $data['newPasswordError'];
                                      } ?></span>
        <br>
        <label><b>Confirm Password</b></label>
        <input type="text" placeholder="Confirm Password" name="confirmPassword" id="confirmPassword">
        <span class="invalidFeedback"><?php if ($data != NULL) {
                                        echo $data['confirmPasswordError'];
                                      } ?></span>
        <br>
        <button id="submit" type="submit" value="submit">Recover</button>


      </div>



    </form>
  </div>


  <?php require APPROOT . '/views/right.php' ?>
  <?php require APPROOT . '/views/right2.php' ?>
  <?php
  require APPROOT . '/views/footer.php'


  ?>
  <!-- <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/footer.css"> -->




  <script type="text/javascript" src="<?php echo URLROOT ?>/public/js/home.js"></script>



</body>

</html>