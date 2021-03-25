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
                 <form action="<?php echo URLROOT;?>/admin/updatedrugs/<?php echo $data['drugs']->medicineId ?>" method="POST">
 
<div class="container">
   
    <?php foreach ($data['drug'] as $drugs): ?>
    <?php echo $drugs->medicineId; ?>
   <h1>Update Drug Details</h1>
    <hr>
    <label for="medicineId"><b>medicineId</b></label>
    <input type="text" placeholder="Enter medicineId" name="medicineId" id="medicineId" value="<?php echo $drugs->medicineId; ?>">
    <label for="name"><b>Generic Name</b></label>
    <input type="text" placeholder="Enter Generic Name" name="name" id="name" value="<?php echo $drugs->name; ?>">
    <label for="name"><b>Brand Name</b></label>
    <input type="text" placeholder="Enter Brand Name" name="brand" id="brand" value="<?php echo $drugs->brand; ?>">
    <label for="description"><b>Description</b></label>
    <input type="text" placeholder="Enter Description" name="description" id="description" value="<?php echo $drugs->description; ?>">
    <label for="QTY"><b>QTY</b></label>
    <input type="text" placeholder="Enter QTY" name="QTY" id="QTY" value="<?php echo $drugs->QTY; ?>">
    <label for="price"><b>Price</b></label>
    <input type="price" placeholder="Enter price" name="price" id="price" value="<?php echo $drugs->price; ?>">
    <label for="Date"><b>Expiration Date</b></label>
    <input type="Date" placeholder="Enter Expiration Date" name="EXP" id="EXP" value="<?php echo $drugs->EXP; ?>">
    <label for="Date"><b>Manufacture Date</b></label>
    <input type="Date" placeholder="Enter Manufacture Date" name="MFD" id="MFD" value="<?php echo $drugs->MFD; ?>">
    <label for="Dose"><b>DoseStatus</b></label>
    <input type="text" placeholder="Enter Dose" name="doseStatus" id="doseStatus" value="<?php echo $drugs->doseStatus; ?>">
    <label for="Dose"><b>Dose</b></label>
    <input type="text" placeholder="Enter Dose" name="dose" id="dose" value="<?php echo $drugs->dose; ?>">
    <label for="temperature"><b>Tempurature</b></label>
    <input type="text" placeholder="Enter Temperature" name="temperature" id="temperature" value="<?php echo $drugs->temperature; ?>">
    <label for="subCategory"><b>subCategory</b></label>
    <input type="text" placeholder="Enter SubCategory" name="subCategory" id="subCategory" value="<?php echo $drugs->subCategory; ?>">
  <?php endforeach;?>
    
    
   

   

    <button type="submit" name="submit" class="registerbtn">UPDATE</button>
      
  </div>
  
  
  
</form>
          
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