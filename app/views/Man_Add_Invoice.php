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


        <div class ="updateform">
  


<form action="" method="POST">
 
<div class="container">
   <h1>Add Invoice</h1>
    <hr>
     <label for="name"><b>Invoice Number</b></label>
    <input type="text" placeholder="Enter Invoice Number" name="invoiceNo" id="invoiceNo" required>
    <label for="name"><b>Medicine List</b></label>
    <textarea placeholder="Enter MedicineList" name="medicineList" id="medicineList"></textarea>
    

    <button type="submit" class="registerbtn">Add</button>
      
  </div>
  
  
</form>

</div>



        <?php require_once($_SERVER['DOCUMENT_ROOT']."/mvcfinal/app/includes/Man_footer.php");?>