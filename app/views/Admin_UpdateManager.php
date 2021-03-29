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
                <form action="<?php echo URLROOT;?>/admin/updatemanager/<?php echo $data['mans']->userName ?>" method="POST">
 
<div class="container">
   <h1>Update Manager Details</h1>
    <hr>
    <label for="userName"><b>User Name</b></label>
    <input type="text" placeholder="Enter User Name" name="userName" id="userName" value="<?php echo $data['mans']->userName ?>" >
    <label for="LastName"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="LastName" id="LastName" value="<?php echo $data['mans']->LastName ?>">
    <label for="FirstName"><b>First Name</b></label>
    <input type="text" placeholder="Enter FirstName" name="FirstName" id="FirstName" value="<?php echo $data['mans']->FirstName ?>">
    <label for="NIC"><b>NIC</b></label>
    <input type="text" placeholder="Enter NIC" name="NIC" id="NIC" value="<?php echo $data['mans']->NIC ?>" >

   
    <label for="DOB"><b>DOB</b></label>
    <input type="text" placeholder="Enter DOB" name="DOB" id="DOB" value="<?php echo $data['mans']->DOB ?>">
    <label for="email"><b>email</b></label>
    <input type="email" placeholder="Enter Email" name="email" id="email" value="<?php echo $data['mans']->email ?>" >
     <label for="phoneNumber"><b>phoneNumber</b></label>
    <input type="number" placeholder="Enter phoneNumber" name="phoneNumber" id="phoneNumber" value="<?php echo $data['mans']->phoneNumber?>">
     <label for="password"><b>password</b></label>
    <input type="text" placeholder="Enter password" name="password" id="password" value="<?php echo $data['mans']->password ?>" required>
    <label for="fromDate"><b>fromDate</b></label>
    <input type="text" placeholder="Enter fromDate" name="fromDate" id="fromDate" value="<?php echo $data['mans']->fromDate ?>">

    


   

    <button type="submit" class="registerbtn">Update</button>
      
  </div>
  
  
</form>
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