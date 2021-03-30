<?php require_once ($_SERVER['DOCUMENT_ROOT']."/MVCFINAL/app/config/config.php");?>
<?php require_once($_SERVER['DOCUMENT_ROOT']."/MVCFINAL/app/includes/Admin_header.php");?>
<link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/Admin_style.css">
<style>
    /* .card {
        width: 1200px;
    }

    input {
 width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
    } */
</style>
    <!-- main content -->
    <div class="wrapper">
        <div class="row">
            <div class="col-3 col-m-6 col-sm-6">
                <div class="notification">
                    <a href="http://localhost/mvcfinal/admin/addpharmacist" title="">Pharmacist Registration</a>
                         <h3>.</h3>
                </div>
            </div>
            <div class="col-3 col-m-6 col-sm-6">
                <div class="notification">
                <a href="http://localhost/mvcfinal/admin/adddeliveryperson" title="">DeliveryBoy Registration</a>
                       <h3>.</h3>
                </div>
            </div>
            <div class="col-3 col-m-6 col-sm-6">
                <div class="notification">
                    <a href="http://localhost/mvcfinal/admin/addsupplier" title="">Supplier Registration</a>
                          <h3>.</h3>
                </div>
            </div>
            <div class="col-3 col-m-6 col-sm-6">
                <div class="notification">
                  <a href="http://localhost/mvcfinal/admin/addmanager" title="">Manager Registration</a>
                   <h3>.</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-8 col-m-12 col-sm-12">
                <div class="card">
 
        
<form action="<?php echo URLROOT; ?>/admin/adddrugs" method="POST">
 
<div class="container">
<div class="box">
   <h1>Add Drug Details</h1>
    <hr>
    <label for="name"><b>medicineId</b></label>
    <input type="text" placeholder="Enter Generic Name" name="medicineId" id="medicineId">
    <label for="name"><b>Generic Name</b></label>
    <input type="text" placeholder="Enter Generic Name" name="name" id="name">
    <label for="name"><b>Brand Name</b></label> 
    <input type="text" placeholder="Enter Brand Name" name="brand" id="brand">
    <label for="description"><b>Description</b></label>
    <input type="text" placeholder="Enter Description" name="description" id="description">
    <label for="QTY"><b>QTY</b></label>
    <input type="text" placeholder="Enter QTY" name="QTY" id="QTY">
    <label for="price"><b>Price</b></label>
    <input type="price" placeholder="Enter price" name="price" id="price">
    <label for="Dose"><b>DoseStatus</b></label>
    <input type="text" placeholder="Enter Dose" name="doseStatus" id="doseStatus">
    <label for="Dose"><b>Dose</b></label>
    <input type="text" placeholder="Enter Dose" name="dose" id="dose">
    <label for="temperature"><b>Tempurature</b></label>
    <input type="text" placeholder="Enter Temperature" name="temperature" id="temperature">
    <label for="subCategory"><b>subCategory</b></label>
    <input type="text" placeholder="Enter SubCategory" name="subCategory" id="subCategory">
  
    
    
   

   

    <button type="submit" name="submit" class="registerbtn">ADD</button>
      
  </div>
  </div>
  
</form>
 
               </div>
            </div>
           
        </div>
       

  
</div>
        <!-- end main content -->
    <?php require_once($_SERVER['DOCUMENT_ROOT']."/MVCFINAL/app/includes/Admin_footer.php");?>
