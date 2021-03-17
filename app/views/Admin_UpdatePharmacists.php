<?php require_once ($_SERVER['DOCUMENT_ROOT']."/MVCFINAL/app/config/config.php");?>
<?php require_once($_SERVER['DOCUMENT_ROOT']."/MVCFINAL/app/includes/Admin_header.php");?>

    <!-- main content -->
    <div class="wrapper">
        <div class="row">
            <div class="col-3 col-m-6 col-sm-6">
                <div class="notification">
                    <h3>100+</h3>
                    <p>To do</p>
                </div>
            </div>
            <div class="col-3 col-m-6 col-sm-6">
                <div class="notification">
                    <h3>100+</h3>
                    <p>In progress</p>
                </div>
            </div>
            <div class="col-3 col-m-6 col-sm-6">
                <div class="notification">
                    <h3>100+</h3>
                    <p>Completed</p>
                </div>
            </div>
            <div class="col-3 col-m-6 col-sm-6">
                <div class="notification">
                    <h3>100+</h3>
                    <p>Issues</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8 col-m-12 col-sm-12">
               <div class="container">
   <h1>Update Pharmacist Details</h1>
    <hr>
    <label for="userName"><b>User Name</b></label>
    <input type="text" placeholder="Enter User Name" name="userName" id="userName" value="<?php echo $data['phas']->userName ?>" >
    <label for="LastName"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="LastName" id="LastName" value="<?php echo $data['phas']->LastName ?>">
    <label for="FirstName"><b>First Name</b></label>
    <input type="text" placeholder="Enter FirstName" name="FirstName" id="FirstName" value="<?php echo $data['phas']->FirstName ?>">
    <label for="DOB"><b>DOB</b></label>
    <input type="text" placeholder="Enter DOB" name="DOB" id="DOB" value="<?php echo $data['phas']->DOB ?>">
    <label for="email"><b>email</b></label>
    <input type="email" placeholder="Enter Email" name="email" id="email" value="<?php echo $data['phas']->email ?>" >
     <label for="phoneNumber"><b>phoneNumber</b></label>
    <input type="number" placeholder="Enter phoneNumber" name="phoneNumber" id="phoneNumber" value="<?php echo $data['phas']->phoneNumber?>">
     <label for="password"><b>password</b></label>
    <input type="text" placeholder="Enter password" name="password" id="password" value="<?php echo $data['phas']->password ?>" required>
    <label for="fromDate"><b>fromDate</b></label>
    <input type="text" placeholder="Enter fromDate" name="fromDate" id="fromDate" value="<?php echo $data['phas']->fromDate ?>">

    <label for="toDate"><b>toDate</b></label>
    <input type="text" placeholder="Enter toDate" name="toDate" id="toDate" value="<?php echo $data['phas']->toDate ?>">
     <label for="toDate"><b>licenseNo</b></label>
    <input type="text" placeholder="Enter toDate" name="licenseNo" id="licenseNo" value="<?php echo $data['phas']->licenseNo ?>">
    <label for="NIC"><b>NIC</b></label>
    <input type="text" placeholder="Enter NIC" name="NIC" id="NIC" value="<?php echo $data['phas']->NIC ?>" >
    


   

    <button type="submit" class="registerbtn">Update</button>
      
  </div>
  
  
</form>
        </div>

        <!-- end main content -->
    <?php require_once($_SERVER['DOCUMENT_ROOT']."/MVCFINAL/app/includes/Admin_footer.php");?>