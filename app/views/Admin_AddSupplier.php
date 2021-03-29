<?php require_once ($_SERVER['DOCUMENT_ROOT']."/MVCFINAL/app/config/config.php");?>
<?php require_once($_SERVER['DOCUMENT_ROOT']."/MVCFINAL/app/includes/Admin_header.php");?>
<link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/Admin_style.css">
<style>
     input {
 width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
    }
    
</style>
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
                  
        
<form action="<?php echo URLROOT; ?>/admin/addsupplier" method="POST">
 
<div class="container">
  <h1>Add Supplier Details</h1>
    <hr>

    <label for="supplyId"><b>SupplierId</b></label>
    <input type="number" placeholder="Enter Supplier Id" name="supplyId" id="supplyId" required>
    <label for="companyName"><b>Company Name</b></label>
    <input type="text" placeholder="Enter Company Name" name="companyName" id="companyName" required>
    <label for="companyRegNo"><b>Company Reg No</b></label>
    <input type="text" placeholder="Enter Company Reg No" name="companyRegNo" id="companyRegNo" required>

    <label for="phoneNo"><b>Phone Number</b></label>
    <input type="number" placeholder="Enter your contact number" name="phoneNo" id="phoneNo" required>

    <label for="companyAddress"><b>Company Address</b></label>
    <input type="text" placeholder="Enter Address" name="companyAddress" id="companyAddress" required>


    
    <hr>
    

    <button type="submit" class="registerbtn">Add</button>
      
  </div>
  
  
</form>

                </div>
            </div>
            
        </div>

        <!-- end main content -->
    <?php require_once($_SERVER['DOCUMENT_ROOT']."/MVCFINAL/app/includes/Admin_footer.php");?>