<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/EditProfile.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
  <div class="topnav" id="myTopnav">
   
    <a href="#editProfile" class="active">Edit Profile</a>
    
    
  </div>
  
 




<div class="container">
  <form action="<?php echo URLROOT ?>/users/updateProfile" method="POST">
    
        <div class="row">
          <div class="col-25">
            <label for="fname">First Name</label>
          </div>
          <div class="col-75">
            <input type="text" id="fname" name="firstname" value="<?php echo $_SESSION['FirstName']?>">
          </div>
        </div>
        
        
        <div class="row">
          <div class="col-25">
            <label for="lname">Last Name</label>
          </div>
          <div class="col-75">
            <input type="text" id="lname" name="lastname" value="<?php echo $_SESSION['LastName']?>">
          </div>
        </div>

       

        <div class="row">
            <div class="col-25">
              <label for="nic">NIC</label>
            </div>
            <div class="col-75">
              <input type="text" id="nic" name="nic" value="<?php echo $_SESSION['NIC']?>">
            </div>
          </div>

        


      

        <div class="row">
          <div class="col-25">
            <label for="phoneNumber">Phone Number</label>
          </div>
          <div class="col-75">
            <input type="text" id="phoneNumber" name="phoneNumber" value="<?php echo $_SESSION['PhoneNumber']?>">
          </div>
        </div>
        

        <div class="row">
          <div class="col-25">
            <label for="address">Street Address 1</label>
          </div>
          <div class="col-75">
            <input  type="text" id="streetAddress1" name="streetAddress1" value="<?php echo $_SESSION['streetAddress1']?>">
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="address">Street Address 2</label>
          </div>
          <div class="col-75">
            <input  type="text" id="streetAddress2" name="streetAddress2" value="<?php echo $_SESSION['streetAddress2']?>">
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="address">City</label>
          </div>
          <div class="col-75">
            <input  type="text" id="city" name="city" value="<?php echo $_SESSION['city']?>">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="address">District</label>
          </div>
          <div class="col-75">
            <input  type="text" id="district" name="district" value="<?php echo $_SESSION['district']?>">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="address">Postal Code</label>
          </div>
          <div class="col-75">
            <input  type="text" id="postalCode" name="postalCode" value="<?php echo $_SESSION['postalCode']?>">
          </div>
        </div>

       

        <div class="row">
          <input type="submit" value="Change">
        </div>
  </form>
</div>

<div class="line3">

  <div class="Cancel">
  <a href="<?php echo URLROOT ?>/users/profile" > <button>Cancel</button></a>
   
  </div>
  
</div>

</body>
</html>
