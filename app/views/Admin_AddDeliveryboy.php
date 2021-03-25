<?php require_once ($_SERVER['DOCUMENT_ROOT']."/MVCFINAL/app/config/config.php");?>
<?php require_once($_SERVER['DOCUMENT_ROOT']."/MVCFINAL/app/includes/Admin_header.php");?>
<link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/Admin_style.css">

    <!-- main content -->
    <div class="wrapper">
        <div class="row">
            <div class="col-3 col-m-6 col-sm-6">
                <div class="notification">
                    <a href="http://localhost/mvcfinal/admin/addpharmacist" title="">Pharmacist Registration</a>
                         <h3>click here</h3>
                </div>
            </div>
            <div class="col-3 col-m-6 col-sm-6">
                <div class="notification">
                <a href="http://localhost/mvcfinal/admin/adddeliveryperson" title="">DeliveryBoy Registration</a>
                       <h3>click here</h3>
                </div>
            </div>
            <div class="col-3 col-m-6 col-sm-6">
                <div class="notification">
                    <a href="http://localhost/mvcfinal/admin/addsupplier" title="">Supplier Registration</a>
                          <h3>click here</h3>
                </div>
            </div>
            <div class="col-3 col-m-6 col-sm-6">
                <div class="notification">
                  <a href="http://localhost/mvcfinal/admin/addmanager" title="">Manager Registration</a>
                   <h3>click here</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8 col-m-12 col-sm-12">
                <div class="card">
                  
        
<form action="<?php echo URLROOT; ?>/admin/adddeliveryperson" method="POST">
  <div class="container">
   <h1>Delivery Person Registration Form</h1>
    <hr>

   <label for="name"><b>UserName</b></label>
    <input type="text" placeholder="Enter UserName" name="userName" id="userName" required>
    <label for="name"><b>Last Name</b></label>
    <input type="text" placeholder="Enter First Name" name="LastName" id="LastName" required>
    <label for="name"><b>First Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="FirstName" id="FirstName" required>

    <label for="NIC"><b>NIC</b></label>
    <input type="text" placeholder="Enter Your NIC Number" name="NIC" id="NIC" required>

    <label for="date"><b>DOB</b></label>
    <input type="date" placeholder="Enter your birthday" name="DOB" id="DOB" required>

     <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Your Email" name="email" id="email" required>

     <label for="number"><b>Contact Number</b></label>
    <input type="number" placeholder="Enter your contact number" name="phoneNumber" id="phoneNumber" required>

    <label for="password"><b>password</b></label>
    <input type="text" placeholder="Enter Password" name="password" id="password" required>
    

    <label for="Date"><b>From Date</b></label>
    <input type="Date" placeholder="Enter The Starting Date" name="fromDate" id="fromDate" required>
    
     <label for="Date"><b>To Date</b></label>
    <input type="Date" placeholder="Enter The Starting Date" name="toDate" id="toDate" required>

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