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


    <a href="<?php echo URLROOT ?>/orders/makeOrder" >Make Order</a>

    

    <?php
    if ($_SESSION['active']==true) {
      echo ('<a href=' . URLROOT . '/myOrders/myorder>My Orders</a>');
      echo ('<a href=' . URLROOT . '/users/profile>Profile</a>');
      echo ('<a href=' . URLROOT . '/users/logout>logout</a>');
      
    } else{
      
      echo ('<a href=' . URLROOT . '/users/loginVIew>Login</a>');
      echo ('<a href=' . URLROOT . '/users/register>Sign Up</a>');
      echo ('<a href=' . URLROOT . '/pages/fogotPasswordView>Forgot Password</a>');
    }  ?>




    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>

  <?php require APPROOT . '/views/left.php'?>
  <div class="main">
    <!-- <?php var_dump($_SESSION);   ?> -->
    <form action="<?php echo URLROOT; ?>/users/login" method="POST">
      <div class="container">


        <label><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" id="username">
        <span class="invalidFeedback"><?php 
        if($data!=NULL){ echo $data['usernameError'];} ?></span>
        <br>
        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" id="password">
        <span class="invalidFeedback"><?php 
        if($data!=NULL){ echo $data['passwordError'];} ?></span>

        <!-- <input type="checkbox" checked="checked" > Remember me  -->
        <button id="submit" type="submit" value="submit">Login</button>

        

        <p><span>Not a member? </span><a href="<?php echo URLROOT; ?>/users/register">Sign Up</a></p>
        <span class="psw">Forgot <a href="<?php echo URLROOT; ?>/pages/fogotPasswordView">password?</a></span>
      </div>
      <!-- <span class="psw">Forgot <a href="#">password?</a></span>  -->


    </form>
  </div>
 
  <?php require APPROOT . '/views/right.php'?>
  <?php require APPROOT . '/views/right2.php'?>
  <?php require APPROOT . '/views/footer.php'?>
  <script type="text/javascript" src="<?php echo URLROOT ?>/public/js/home.js"></script>
</body>

</html>