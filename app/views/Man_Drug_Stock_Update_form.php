<?php require_once ($_SERVER['DOCUMENT_ROOT']."/mvcfinal/app/config/config.php");?>
<?php require_once($_SERVER['DOCUMENT_ROOT']."/mvcfinal/app/includes/Man_header.php");?>

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


        <div class="card">

        <form action="<?php echo URLROOT; ?>/Man_adddrug/updatedrugs/<?php echo $data['drug']->medicineId ?>" method="POST">
 
<!--<div class="container">
   <h1>Update Drug Details</h1>
    <hr>
     <label for="name"><b>Generic Name</b></label>
    <input type="text" placeholder="Enter Generic Name" name="name" id="name" value = "<?php echo $data['drug']->name ?>"required>
    <label for="name"><b>Brand Name</b></label>
    <input type="text" placeholder="Enter Brand Name" name="brand" id="brand" value = "<?php echo $data['drug']->brand ?>" required>
    <label for="description"><b>Description</b></label>
    <input type="text" placeholder="Enter Description" name="description" id="description" value = "<?php echo $data['drug']->description ?>" required>
    <label for="QTY"><b>QTY</b></label>
    <input type="text" placeholder="Enter QTY" name="QTY" id="QTY" value = "<?php echo $data['drug']->QTY ?>" required>
    <label for="price"><b>Price</b></label>
    <input type="price" placeholder="Enter price" name="price" id="price" value = "<?php echo $data['drug']->price ?>" required>
    <label for="Date"><b>Expiration Date</b></label>
    <input type="Date" placeholder="Enter Expiration Date" name="EXP" id="EXP" value = "<?php echo $data['drug']->EXP ?>" required>
    <label for="Date"><b>Manufacture Date</b></label>
    <input type="Date" placeholder="Enter Manufacture Date" name="MFD" id="MFD" value = "<?php echo $data['drug']->MFD ?>" required>
    <label for="Dose"><b>Category</b></label>
    <input type="text" placeholder="Enter Category" name="category" id="category" value = "<?php echo $data['drug']->category ?>" required>
    <label for="Dose"><b>Dose</b></label>
    <input type="text" placeholder="Enter Dose" name="dose" id="dose" value = "<?php echo $data['drug']->dose ?>" required>
    <label for="tempurature"><b>Tempurature</b></label>
    <input type="text" placeholder="Enter Tempurature" name="temperature" id="temperature" value = "<?php echo $data['drug']->temperature ?>" required>
   

    <button type="submit" class="registerbtn">Update</button>
      
  </div>-->
  <div class="row">
            <div class="col-8 col-m-12 col-sm-12" id="inputTable">
                <div class="card">
                    <div class="card-content">
                    <form ‍>
                    
                    <input type="hidden" name="rowNum" id="rowNum">
                        <table id="openTab">
                            <tbody>
                                <tr>
                                <form method="POST">
                                <th>Generic Name</th>
                                    <th><input type="text" placeholder="Enter Generic Name" name="name" id="name" value = "<?php echo $data['drug']->name ?>"required></th>
                                </form>
								<form >
                                <th>Brand Name</th>
                                    <th>
                                    <input type="text" placeholder="Enter Brand Name" name="brand" id="brand" value = "<?php echo $data['drug']->brand ?>" required>
                                    </th>
                                </form>
                                </tr>
                                <tr>
                                <th>Description</th>
                                    <th>
                                    <input type="text" placeholder="Enter Description" name="description" id="description" value = "<?php echo $data['drug']->description ?>" required>
                                    </th>
                                     <th>QTY</th>
                                    <th>
                                    <input type="text" placeholder="Enter quantity" name="QTY" id="QTY" value = "<?php echo $data['drug']->QTY ?>" required>
                                    </th>
                                </tr>
                                <tr>
                                    <th>Price</th>
                                    <th>
                                    <input type="price" placeholder="Enter price" name="price" id="price" value = "<?php echo $data['drug']->price ?>" required>
                                    </th>
                                    <th>Expiration Date</th>
                                    <th>
                                    <input type="Date" placeholder="Enter Expiration Date" name="EXP" id="EXP" value = "<?php echo $data['drug']->EXP ?>" required>
                                    </th>
                                </tr>
                                <tr>
                                    <th>Manufacture Date</th>
                                    <th>
                                    <input type="Date" placeholder="Enter Manufacture Date" name="MFD" id="MFD" value = "<?php echo $data['drug']->MFD ?>" required>
                                    </th>
                                    <th>Dose Status</th>
                                    <th>
                                    <input type="text" placeholder="Enter Dose Status" name="doseStatus" id="doseStatus" value = "<?php echo $data['drug']->doseStatus ?>" required>
                                    </th>
                                </tr>
                                <tr>
                                    <th>Dose</th>
                                    <th>
                                    <input type="text" placeholder="Enter Dose" name="dose" id="dose" value = "<?php echo $data['drug']->dose ?>" required>
                                    </th>
                                    <th>Tempurature</th>
                                    <th>
                                    <input type="text" placeholder="Enter Tempurature" name="temperature" id="temperature" value = "<?php echo $data['drug']->temperature ?>" required>
                                    </th>
                                </tr>
                                <tr>
                                    <th>Sub Category</th>
                                    <th>
                                    <input type="text" placeholder="Enter Sub Category" name="subCategory" id="subCategory" value = "<?php echo $data['drug']->subCategory ?>" required>
                                    </th>
                                    <th>Image Location</th>
                                    <th>
                                    <input type="text" placeholder="Enter Image Location" name="imageLocation" id="imageLocation" value = "<?php echo $data['drug']->imageLocation ?>" required>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                        </form>
                    </div>
                    <div style="text-align: center;height:50px;">
                    <button type="submit" class="registerbtn">Update</button>
                    </div>
                </div>
            </div>
  
  
</form>



        </div><!--buttons-->

<?php require_once($_SERVER['DOCUMENT_ROOT']."/mvcfinal/app/includes/Man_footer.php");?>