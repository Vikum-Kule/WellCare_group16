<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/MVCFINAL/app/config/config.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/MVCFINAL/app/includes/Admin_header.php"); ?>
<link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/Admin_style.css">
<style>

</style>
<!-- main content -->
<div class="wrapper">
    <div class="row">
        <div class="col-3 col-m-6 col-sm-6">
            <div class="notification">

                <a href="http://localhost/mvcfinal/admin/addpharmacist" title="">Pharmacist Registration</a>

            </div>
        </div>
        <div class="col-3 col-m-6 col-sm-6">
            <div class="notification">
                <a href="http://localhost/mvcfinal/admin/adddeliveryperson" title="">DeliveryBoy Registration</a>

            </div>
        </div>
        <div class="col-3 col-m-6 col-sm-6">
            <div class="notification">
                <a href="http://localhost/mvcfinal/admin/addsupplier" title="">Supplier Registration</a>

            </div>
        </div>
        <div class="col-3 col-m-6 col-sm-6">
            <div class="notification">
                <a href="http://localhost/mvcfinal/admin/addmanager" title="">Manager Registration</a>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-8 col-m-12">
            <div class="card">


                <form action="<?php echo URLROOT; ?>/admin/addsupplier" method="POST">

                    <div class="container">
                        <div class="box">
                            <h1>Add Supplier Details</h1>


                            <label for="supplyId">SupplierId</label>
                            <input type="number" placeholder="Enter Supplier Id" name="supplyId" id="supplyId" required>
                            <label for="companyName">Company Name</label>
                            <input type="text" placeholder="Enter Company Name" name="companyName" id="companyName" required>
                            <label for="companyRegNo">Company Reg No</label>
                            <input type="text" placeholder="Enter Company Reg No" name="companyRegNo" id="companyRegNo" required>

                            <label for="phoneNo">Phone Number</label>
                            <input type="number" placeholder="Enter your contact number" name="phoneNo" id="phoneNo" required>

                            <label for="companyAddress">Company Address</label>
                            <input type="text" placeholder="Enter Address" name="companyAddress" id="companyAddress" required>






                            <button type="submit" class="registerbtn">Add</button>
                        </div>
                    </div>


                </form>

            </div>
        </div>

    </div>

    <!-- end main content -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'] . "/MVCFINAL/app/includes/Admin_footer.php"); ?>