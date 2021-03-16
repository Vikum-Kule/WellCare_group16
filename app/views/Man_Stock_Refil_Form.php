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
        <form>
 
            <div class="container">
                <h1>STOCK REFIL FORM</h1>
                <hr>
                <label for="name"><b>Refill ID</b></label>
                <input type="text" placeholder="Enter Refill ID" name="refilid" id="refilid" required>
                <label for="name"><b>Brand Name</b></label>
                <input type="text" placeholder="Enter Brand Name" name="brandname" id="brandname" required>
                <label for="name"><b>Supplier ID</b></label>
                <input type="text" placeholder="Enter Supplier ID" name="supplierid" id="supplierid" required>
                <label for="Dose"><b>Dose</b></label>
                <input type="text" placeholder="Enter Dose" name="dose" id="dose" required>
                <label for="number"><b>Quantity</b></label>
                <input type="number" placeholder="Enter Quantity" name="qty" id="qty" required>
            
                
            
                <button type="submit" class="registerbtn">Refil</button>
                
            </div>
            
            
        </form>
  
        </div>

<?php require_once($_SERVER['DOCUMENT_ROOT']."/mvcfinal/app/includes/Man_footer.php");?>