<?php require_once ($_SERVER['DOCUMENT_ROOT']."/mvcfinal/app/config/config.php");?>
<?php require_once($_SERVER['DOCUMENT_ROOT']."/mvcfinal/app/includes/Man_header.php");?>

<div class="wrapper">
        <div class="row">
            <!-- <div class="col-3 col-m-6 col-sm-6">
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
            </div> -->
        </div>


        <div class ="updateform">
  


        <form action="<?php echo URLROOT; ?>/Man_Invoices/addinvoice" method="POST">
 
<!--<div class="container">
   <h1>Add Invoice</h1>
    <hr>
     <label for="name"><b>Invoice Number</b></label>
    <input type="text" placeholder="Enter Invoice Number" name="invoiceNo" id="invoiceNo" required>
    <label for="name"><b>Medicine List</b></label>
    <textarea placeholder="Enter MedicineList" name="medicineList" id="medicineList"></textarea>
    

    <button type="submit" class="registerbtn">Add</button>
      
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
                                
                                    <th>Invoice Number</th>
                                    <th><input type="text" placeholder="Enter Invoice Number" name="invoiceNo" id="invoiceNo" required> </th>
                               
                                </tr>
                                <tr>
								
                                    <th>Medicine List</th>
                                    <th><input type="text" placeholder="Enter MedicineList" name="medicineList" id="medicineList" required></th>
                                
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