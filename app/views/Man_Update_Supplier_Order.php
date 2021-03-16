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
        <div class="container">
   <h1>Update Supplier Order</h1>
    <hr>

    <label for="supplierId"><b>SupplierId</b></label>
    <input type="text" placeholder="Enter SupplierId" name="supplierId" id="supplierId" value = "<?php echo $data['order']->supplierId ?>"required>

    <label for="number"><b>Invoice No</b></label>
    <input type="number" placeholder="Enter invoice No" name="invoiceNo" id="invoiceNo" value = "<?php echo $data['order']->invoiceNo ?> "required>

    <label for="price"><b>Price</b></label>
    <input type="price" placeholder="Enter price" name="price" id="price" value = "<?php echo $data['order']->price ?>" required>

   <label for="Date"><b>Date</b></label>
   <input type="Date" placeholder="Date" name="date" id="date" value = "<?php echo $data['order']->date ?>" required>


    <button type="submit" class="registerbtn">Update</button>
      
  </div>
        </div>

<?php require_once($_SERVER['DOCUMENT_ROOT']."/mvcfinal/app/includes/Man_footer.php");?>