<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/footer.css">

  <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/Register.css">
 

</head>
<script src="<?php echo URLROOT ?>/public/js/topnavigation.js"></script>

<body>
  <div class="topnav" id="myTopnav">

    <a href="<?php echo URLROOT ?>/orders/makeOrder">Make Order</a>

    

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


  <!-- <div class="regForm"><h2 >Registration</h2></div> -->


  <div class="container">
    <form id="register-form" method="POST" action="<?php echo URLROOT; ?>/users/register">

      <div class="row">
        <div class="col-25">
          <label for="fname">First Name</label>
        </div>
        <div class="col-75">
          <input type="text" id="firstname" name="firstname" placeholder="Your First Name..">
          <span class="invalidFeedback"><?php echo $data['firstnameError']; ?></span>
        </div>
      </div>


      <div class="row">
        <div class="col-25">
          <label for="lname">Last Name</label>
        </div>
        <div class="col-75">
          <input type="text" id="lastname" name="lastname" placeholder="Your Last Name..(optional)">
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="nic">NIC</label>
        </div>
        <div class="col-75">
          <input type="text" id="nic" name="nic" placeholder="Your NIC..">
          <span class="invalidFeedback"><?php echo $data['nicError']; ?></span>
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="userName">User Name</label>
        </div>
        <div class="col-75">
          <input type="text" id="userName" name="userName" placeholder="User Name..">
          <span class="invalidFeedback"><?php echo $data['usernameError']; ?></span>

        </div>
      </div>



      <div class="row">
        <div class="col-25">
          <label for="password">Password</label>
        </div>
        <div class="col-75">
          <input type="password" id="password" name="password" placeholder="Password..">
          <span class="invalidFeedback"><?php echo $data['passwordError']; ?></span>

        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="password">Confirm Password</label>
        </div>
        <div class="col-75">
          <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password..">
          <span class="invalidFeedback"><?php echo $data['confirmPasswordError']; ?></span>

        </div>
      </div>


      <div class="row">
        <div class="col-25">
          <label for="phoneNumber">Phone Number</label>
        </div>
        <div class="col-75">
          <input type="text" id="phoneNumber" name="phoneNumber" placeholder="Phone Number..">
          <span class="invalidFeedback"><?php echo $data['phoneNumberError']; ?></span>
        </div>
      </div>




      <div class="row">
        <div class="col-25">
          <label for="email">Email</label>
        </div>
        <div class="col-75">
          <input type="text" id="email" name="email" placeholder="Enter Your Email Address..">
          <span class="invalidFeedback"><?php echo $data['emailError']; ?></span>
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label for="address">Address</label>
        </div>
        <div class="col-75">
          <input type="text" id="streetAddress1" name="streetAddress1" placeholder="Enter Street Address 1..">
          <span class="invalidFeedback"><?php echo $data['streetAddress1Error']; ?></span>

          <input type="text" id="streetAddress2" name="streetAddress2" placeholder="Enter Street Address 2..(optional)">
          <span class="invalidFeedback"><?php echo $data['streetAddress2Error']; ?></span>

          <input type="text" id="city" name="city" placeholder="Enter Your City ..">
          <span class="invalidFeedback"><?php echo $data['cityError']; ?></span>

          <input type="text" id="district" name="district" placeholder="Enter Your District ..">
          <span class="invalidFeedback"><?php echo $data['districtError']; ?></span>

          <input type="text" id="postalCode" name="postalCode" placeholder="Postal Code ..">
          <span class="invalidFeedback"><?php echo $data['postalCodeError']; ?></span>


          <!-- <textarea id="address" name="address" placeholder="Write Your Address.." style="height:100px"></textarea> -->
        </div>
      </div>
      <div class="row">
        <input type="submit" value="Submit">
      </div>
    </form>
  </div>
  <?php
  require APPROOT . '/views/footer.php'
  
  
  ?>

  
</body>

</html>