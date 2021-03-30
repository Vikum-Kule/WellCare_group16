<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/MVCFINAL/app/config/config.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/MVCFINAL/app/includes/Admin_header.php"); ?>
<link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/Admin_style.css">

<!-- main content -->
<div class="wrapper">
  <div class="row">
    <div class="col-3 col-m-6 col-sm-6">
      <div class="notification">
        <a href="http://localhost/mvcfinal/admin/addpharmacist" title="">Pharmacist Registration</a>
       
      </div>
    </div>
    <div class="col-3 col-m-6 col-sm-6">
      <div class="notification">
        <a href="http://localhost/mvcfinal/admin/adddeliveryperson" title="">DeliveryBoy Registration</a>
        
      </div>
    </div>
    <div class="col-3 col-m-6 col-sm-6">
      <div class="notification">
        <a href="http://localhost/mvcfinal/admin/addsupplier" title="">Supplier Registration</a>
       
      </div>
    </div>
    <div class="col-3 col-m-6 col-sm-6">
      <div class="notification">
        <a href="http://localhost/mvcfinal/admin/addmanager" title="">Manager Registration</a>
        
      </div>
    </div>
  </div>
  
    <div class="row">
      <div class="col-8 col-m-12 col-sm-12">
        <div class="card">


          <form action="<?php echo URLROOT; ?>/admin/adddeliveryperson" method="POST">
            <div class="container">

              <div class="box">
                <h1>Delivery Person Registration Form</h1>

                <label for="userName">User Name</label>

                <input type="text" id="userName" name="userName" placeholder="User Name..">
                <span class="invalidFeedback"><?php if (isset($data['usernameError'])) {
                                                echo $data['usernameError'];
                                              } ?></span>



                <label for="lname">Last Name</label>

                <input type="text" placeholder="Enter First Name" name="LastName" id="LastName" required>

                <label for="fname">First Name</label>

                <input type="text" id="FirstnName" name="FirstName" placeholder="Your First Name..">
                <span class="invalidFeedback"><?php if (isset($data['FirstNameError'])) {
                                                echo $data['FirstNameError'];
                                              } ?></span>

                <label for="nic">NIC</label>

                <input type="text" placeholder="Enter Your NIC Number" name="NIC" id="NIC" required>
                <span class="invalidFeedback"><?php if (isset($data['firstnameError'])) {
                                                echo $data['nicError'];
                                              } ?></span>

                <label for="lname">DOB</label>

                <input type="date" placeholder="Enter your birthday" name="DOB" id="DOB" required>

                <label for="email">Email</label>

                <input type="text" id="email" name="email" placeholder="Enter Your Email Address..">
                <span class="invalidFeedback"><?php if (isset($data['emailError'])) {
                                                echo $data['emailError'];
                                              } ?></span>

                <label for="phoneNumber">Phone Number</label>

                <input type="text" id="phoneNumber" name="phoneNumber" placeholder="Phone Number..">
                <span class="invalidFeedback"><?php if (isset($data['phoneNumberError'])) {
                                                echo $data['phoneNumberError'];
                                              } ?></span>

                <label for="password">Password</label>

                <input type="password" id="password" name="password" placeholder="Password..">
                <span class="invalidFeedback"><?php if (isset($data['passwordError'])) {
                                                echo $data['passwordError'];
                                              } ?></span>


                <label for="lname">FromDate</label>

                <input type="Date" placeholder="Enter The Starting Date" name="fromDate" id="fromDate" required>


                <button type="submit" class="registerbtn">Add</button>
              </div>
            </div>


          </form>

        </div>
      </div>

    </div>
  </center>


</div>
<!-- end main content -->
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/MVCFINAL/app/includes/Admin_footer.php"); ?>