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


        <form action="<?php echo URLROOT; ?>/Man_adddrug/adddrugs" method="POST">
 
 <!--<div class="container">
    <h1>Add Drug Details</h1>
     <hr>
      <label for="name"><b>Medicine ID</b></label>
     <input type="text" placeholder="Enter Medicine ID" name="medicineId" id="medicineId" required>
     <label for="name"><b>Generic Name</b></label>
     <input type="text" placeholder="Enter Generic Name" name="name" id="name" required>
     <label for="name"><b>Brand Name</b></label>
     <input type="text" placeholder="Enter Brand Name" name="brand" id="brand" required>
     <label for="description"><b>Description</b></label>
     <input type="text" placeholder="Enter Description" name="description" id="description" required>
     <label for="QTY"><b>QTY</b></label>
     <input type="text" placeholder="Enter QTY" name="QTY" id="QTY" required>
     <label for="price"><b>Price</b></label>
     <input type="price" placeholder="Enter price" name="price" id="price" required>
     <label for="Date"><b>Expiration Date</b></label>
     <input type="Date" placeholder="Enter Expiration Date" name="EXP" id="EXP" required>
     <label for="Date"><b>Manufacture Date</b></label>
     <input type="Date" placeholder="Enter Manufacture Date" name="MFD" id="MFD" required>
     <label for="Dose"><b>Dose Status</b></label>
     <input type="text" placeholder="Enter Dose Status" name="doseStatus" id="doseStatus" required>
     <label for="Dose"><b>Dose</b></label>
     <input type="text" placeholder="Enter Dose" name="dose" id="dose" required>
     <label for="tempurature"><b>Tempurature</b></label>
     <input type="text" placeholder="Enter Tempurature" name="temperature" id="temperature" required>
     <label for="tempurature"><b>Sub Category</b></label>
     <input type="text" placeholder="Enter Sub Category" name="subCategory" id="subCategory" required>
     <label for="tempurature"><b>Image Location</b></label>
     <input type="text" placeholder="Enter Image Location" name="imageLocation" id="imageLocation" required>
     
    <tr>
    <th>Medicine ID </th>
    <th><input type="text" placeholder="Enter Medicine ID" name="medicineId" id="medicineId" required> </th>
    </tr>
    <tr>
    <th>Generic Name </th>
    <th><input type="text" placeholder="Enter Generic Name" name="name" id="name" required> </th>
    </tr>
    <tr>
    <th>Brand Name </th>
    <th><input type="text" placeholder="Enter Brand Name" name="brand" id="brand" required> </th>
    </tr>
    <tr>
    <th>Description </th>
    <th><input type="text" placeholder="Enter Medicine ID" name="medicineId" id="medicineId" required> </th>
    </tr>
    <tr>
    <th>Medicine ID </th>
    <th><input type="text" placeholder="Enter Medicine ID" name="medicineId" id="medicineId" required> </th>
    </tr>
    <tr>
    <th>Medicine ID </th>
    <th><input type="text" placeholder="Enter Medicine ID" name="medicineId" id="medicineId" required> </th>
    </tr>-->
 
    <div class="row">
            <div class="col-8 col-m-12 col-sm-12" id="inputTable">
                <div class="card">
                    <div class="card-content">
                    <form ‍>
                    
                    <input type="hidden" name="rowNum" id="rowNum">
                        <table id="openTab">
                            <tbody>
                               <!-- <tr>
                                <form method="POST">
                                    <th>Medicine ID</th>
                                    <th><input type="text" placeholder="Enter Medicine ID" name="medicineId" id="medicineId" required> </th>
                                </form>
								<form >
                                    <th>Generic Name</th>
                                    <th><input type="text" placeholder="Enter Generic Name" name="name" id="name" required> </th>
                                </form>
                               --> </tr>
                                <tr>
                                <th>Medicine ID</th>
                                    <th><input type="text" placeholder="Enter Medicine ID" name="medicineId" id="medicineId" required> </th>
                                    <th>Generic Name</th>
                                    <th><input type="text" placeholder="Enter Generic Name" name="name" id="name" required> </th>
                                </tr>
                                <tr>
                                    <th>Brand Name</th>
                                    <th>
                                    <input type="text" placeholder="Enter Brand Name" name="brand" id="brand" required>
                                    </th>
                                    <th>Description</th>
                                    <th>
                                    <input type="text" placeholder="Enter Description" name="description" id="description" required>
                                    </th>
                                </tr>
                                <tr>
                                    <th>Quantity</th>
                                    <th>
                                    <input type="price" placeholder="Enter Quantity" name="QTY" id="QTY" required>
                                    </th>
                                    <th>Price</th>
                                    <th>
                                    <input type="price" placeholder="Enter price" name="price" id="price" required>
                                    </th>
                                </tr>
                                <tr>
                                <th>Expiration Date</th>
                                    <th>
                                    <input type="Date" placeholder="Enter Expiration Date" name="EXP" id="EXP" required>
                                    </th>
                                    <th>Manufacture Date</th>
                                    <th>
                                    <input type="Date" placeholder="Enter Manufacture Date" name="MFD" id="MFD" required>
                                    </th>
                                </tr>
                                <tr>
                                <th>Dose Status</th>
                                    <th>
                                    <input type="text" placeholder="Enter Dose Status" name="doseStatus" id="doseStatus" required>
                                    </th>
                                    <th>Dose</th>
                                    <th>
                                    <input type="text" placeholder="Enter Dose" name="dose" id="dose" required>
                                    </th>
                                </tr>
                                <tr>
                                <th>Tempurature</th>
                                    <th>
                                    <input type="text" placeholder="Enter Tempurature" name="temperature" id="temperature" required>
                                    </th>
                                    <th>Sub Category</th>
                                    <th>
                                    <input type="text" placeholder="Enter Sub Category" name="subCategory" id="subCategory" required>
                                    </th>
                                </tr>
                                <tr>
                                    <th>Image Location</th>
                                    <th>
                                    <input type="text" placeholder="Enter Image Location" name="imageLocation" id="imageLocation" required>
                                    </th>
                                    <!--<th>Image Location</th>
                                    <th>
                                    <input type="text" placeholder="Enter Image Location" name="imageLocation" id="imageLocation" required>
                                    </th>-->
                                </tr>
                            </tbody>
                        </table>
                        </form>
                    </div>
                    <div style="text-align: center;height:50px;">
                    <button type="submit" name="submit" class="registerbtn">ADD</button>
                    </div>
                </div>
            </div>
 
     
       
   </div>
   
   
 </form>   



<?php require_once($_SERVER['DOCUMENT_ROOT']."/mvcfinal/app/includes/Man_footer.php");?>