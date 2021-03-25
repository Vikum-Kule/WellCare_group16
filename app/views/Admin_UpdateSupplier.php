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
               <form action="<?php echo URLROOT;?>/admin/updatesupply/<?php echo $data['sups']->supplyId ?>" method="POST">
 
<div class="container">
   <h1>Update suppliers Details</h1>
    <hr>
    <label for="supplyId"><b>supplyId</b></label>
    <input type="text" placeholder="Enter supplyId" name="supplyId" id="supplyId" value="<?php echo $data['sups']->supplyId ?>" >
    <label for="companyName"><b>company Name</b></label>
    <input type="text" placeholder="Enter Last companyName" name="companyName" id="companyName" value="<?php echo $data['sups']->companyName ?>">
    <label for="companyRegNo"><b>companyRegNo</b></label>
    <input type="text" placeholder="Enter companyRegNo" name="companyRegNo" id="companyRegNo" value="<?php echo $data['sups']->companyRegNo?>">
    <label for="phoneNo"><b>phoneNo</b></label>
    <input type="text" placeholder="Enter phoneNo" name="phoneNo" id="phoneNo" value="<?php echo $data['sups']->phoneNo ?>">
    <label for="companyAddress"><b>companyAddress</b></label>
    <input type="text" placeholder="Enter companyAddress" name="companyAddress" id="companyAddress" value="<?php echo $data['sups']->companyAddress ?>" >
    

   

    <button type="submit" class="registerbtn">Update</button>
      
  </div>
  
  
</form>
            </div>
           
           

        <!-- end main content -->
    <?php require_once($_SERVER['DOCUMENT_ROOT']."/MVCFINAL/app/includes/Admin_footer.php");?>