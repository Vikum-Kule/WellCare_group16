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
  


  <form action="<?php echo URLROOT; ?>/Man_supplier_order/addorder" method="post">
   
 <!-- <div class="container">
     <h1>Add Supplier Order</h1>
      <hr>
  
      <label for="Id"><b>Supplier Id</b></label>
      <input type="text" placeholder="Enter SupplierId" name="supplierId" id="supplierId" required>
  
      <label for="number"><b>Invoice No</b></label>
      <input type="number" placeholder="Enter invoice No" name="invoiceNo" id="invoiceNo" required>
  
      <label for="price"><b>Price</b></label>
      <input type="price" placeholder="Enter price" name="price" id="price" required>
  
      <label for="Date"><b>Date</b></label>
      <input type="Date" placeholder="Date" name="date" id="date" required>
  
      <button type="submit" class="registerbtn">ADD</button>
        
    </div>
    -->
    
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
                                    <th>Order ID</th>
                                    <th><input type="text" placeholder="Enter Order ID" name="orderid" id="orderid" required> </th>
                                </form>
                                </tr>
                                <tr>
								<form >
                                    <th>Supplier Id</th>
                                    <th><input type="text" placeholder="Enter SupplierId" name="supplierId" id="supplierId" required> </th>
                                </form>
                                </tr>-->
                                <tr>
                                <th>Order ID</th>
                                    <th><input type="text" placeholder="Enter Order ID" name="orderid" id="orderid" required> </th>
                                    </tr>
                                <tr>
                                <th>Supplier Id</th>
                                    <th><input type="text" placeholder="Enter SupplierId" name="supplierId" id="supplierId" required> </th>
                                </tr>
                                <tr>
                                    <th>Invoice No</th>
                                    <th>
                                    <input type="number" placeholder="Enter invoice No" name="invoiceNo" id="invoiceNo" required>
                                    </th>
                                    </tr>
                                <tr>
                                    <th>Price</th>
                                    <th>
                                    <input type="price" placeholder="Enter price" name="price" id="price" required>
                                    </th>
                                </tr>
                                <tr>
                                    <th>Date</th>
                                    <th>
                                    <input type="Date" placeholder="Date" name="date" id="date" required>
                                    </th>
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

  </form>
  
  </div>


  <?php require_once($_SERVER['DOCUMENT_ROOT']."/mvcfinal/app/includes/Man_footer.php");?>