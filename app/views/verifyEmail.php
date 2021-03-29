<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/verifyEmail.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/footer.css">

</head>
<script src="<?php echo URLROOT ?>/public/js/topnavigation.js"></script>
<script src="<?php echo URLROOT ?>/public/js/home.js"></script>

<body>

  <div class="topnav" id="myTopnav">

    <a href="<?php echo URLROOT ?>/orders/makeOrder">Home</a>

    <?php
    if ($_SESSION['active'] == true) {
      echo ('<a href=' . URLROOT . '/myOrders/myorder >My Orders</a>');
      echo ('<a href=' . URLROOT . '/users/profile>Profile</a>');
      echo ('<a href=' . URLROOT . '/users/logout>logout</a>');
    } else {

      echo ('<a href=' . URLROOT . '/users/loginVIew>Login</a>');
      echo ('<a href="#" class="active">Verify email</a>');
      echo ('<a href=' . URLROOT . '/pages/fogotPasswordView>Forgot Password</a>');
    }  ?>

    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>


  </div>

  <?php require APPROOT . '/views/left.php' ?>

  <div class="main">

    <form action="<?php echo URLROOT; ?>/users/verifyEmail" method="POST" >
      
          <label><b>We've sent a verification code to your email-<?php if (isset($data['email'])) {echo $data['email'];} ?></b></label>
          <input type="text" placeholder="Enter 4 digit pin" name="verifyEmail" id="verifyEmail">
          <span class="invalidFeedback"><?php if (isset($data['pinError'])) {echo $data['pinError'];} ?></span>
          <br>
          <button id="submit" type="submit" value="submit">Verify</button>
      
    </form>
</div>
<?php require APPROOT . '/views/right.php' ?>
<?php require APPROOT . '/views/right2.php' ?>
<?php require APPROOT . '/views/footer.php'?>
  <!-- <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/footer.css"> -->




  <script type="text/javascript" src="<?php echo URLROOT ?>/public/js/home.js"></script>



</body>

</html>