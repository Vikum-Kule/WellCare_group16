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
        <form action="" method="POST">
 
    <div class="container">
     <h1>Update Account Details</h1>
    <hr>
        <label for="name"><b>Name</b></label>
        <input type="text" placeholder="Name" name="name" id="name"required>
        <label for="name"><b>NIC</b></label>
        <input type="text" placeholder="Enter NIC" name="nic" id="nic"  required>
        <label for="description"><b>Address</b></label>
        <input type="text" placeholder="Enter Address" name="address" id="address"  required>
        <label for="QTY"><b>Telephoone Number</b></label>
        <input type="text" placeholder="Enter Telephone Number" name="tp" id="tp" required>
        <label for="price"><b>Gender</b></label>
        <input type="price" placeholder="Enter your Gender" name="gender" id="gender"  required>
    
    
 
     <button type="submit" class="registerbtn">Update</button>
       
   </div>
   
   
 </form>

        </div>

<?php require_once($_SERVER['DOCUMENT_ROOT']."/mvcfinal/app/includes/Man_footer.php");?>