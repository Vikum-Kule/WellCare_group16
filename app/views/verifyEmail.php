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
   
   <a href="#complaint" class="active">Verify email</a>
   
   
 </div>

  <?php require APPROOT . '/views/left.php' ?>

  <div class="main">

    <form action="<?php echo URLROOT; ?>/users/verifyEmail" method="POST">
      <div class="container">

       

        <label><b></b></label>
        <input type="text" placeholder="Enter recover password" name="recoverPassword" id="recoverPassword">
        <span class="invalidFeedback"><?php if ($data != NULL) {
                                        echo $data['recoverPasswordError'];
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