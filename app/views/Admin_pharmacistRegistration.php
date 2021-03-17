<?php require_once ($_SERVER['DOCUMENT_ROOT']."/MVCFINAL/app/config/config.php");?>
<?php require_once($_SERVER['DOCUMENT_ROOT']."/MVCFINAL/app/includes/Admin_header.php");?>


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
                  
        
<form action="<?php echo URLROOT; ?>/admin/addpharmacist" method="POST">
  <div class="container">
   <h1>Pharmacist Registration Form</h1>
    <hr>

    <label for="name"><b>User Name</b></label>
    <input type="text" placeholder="Enter User Name" name="userName" id="userName" required>
     <label for="name"><b>Last Name</b></label>
    <input type="text" placeholder="Enter First Name" name="LastName" id="LastName" required>
     <label for="name"><b>First Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="FirstName" id="FirstName" required>
    <label for="Date"><b>DOB</b></label>
    <input type="Date" placeholder="Enter Date Of Birthday" name="DOB" id="DOB" required>

     <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" id="email" required>

 
    <label for="number"><b>Phone Number</b></label>
    <input type="number" placeholder="Enter your contact number" name="phoneNumber" id="phoneNumber" required>
    <label for="text"><b>Password</b></label>
    <input type="text" placeholder="Enter Password" name="password" id="password" required>

    <label for="Date"><b>Form Date</b></label>
    <input type="Date" placeholder="Enter The Starting Date" name="formDate" id="fromDate" required>
     <label for="Date"><b>To Date</b></label>
    <input type="Date" placeholder="Enter The Ending Date" name="toDate" id="toDate" required>

    <label for="text"><b>LicenseNo</b></label>
    <input type="text" placeholder="Enter LicenseNo" name="licenseNo" id="licenseNo" required>

    <label for="NIC"><b>NIC</b></label>
    <input type="text" placeholder="Enter NIC" name="NIC" id="NIC" required>

    <button type="submit" class="registerbtn">Add</button>
      
  </div>
  
  
</form>

                </div>
            </div>
            <div class="col-4 col-m-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            Progress bar
                        </h3>
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                    <div class="card-content">

                    </div>
                </div>
            </div>
        </div>

        <!-- end main content -->
    <?php require_once($_SERVER['DOCUMENT_ROOT']."/MVCFINAL/app/includes/Admin_footer.php");?>