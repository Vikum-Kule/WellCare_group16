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
 
            <!--<div class="container">
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
            -->
            <div class="row">
            <div class="col-8 col-m-12 col-sm-12" id="inputTable">
                <div class="card">
                    <div class="card-content">
                    <form ‍>
                    
                    <input type="hidden" name="rowNum" id="rowNum">
                        <table id="openTab">
                            <tbody>
                                <tr>
                                <!--<form method="POST">
                                    <th>Refill ID</th>
                                    <th><input type="text" placeholder="Enter Refill ID" name="refilid" id="refilid" required> </th>
                                </form>
                                </tr>
                                <tr>
								<form >
                                    <th>Brand Name</th>
                                    <th><input type="text" placeholder="Enter Brand Name" name="brandname" id="brandname" required> </th>
                                </form>
                                </tr>-->
                                <tr>
                                <th>Refill ID</th>
                                    <th><input type="text" placeholder="Enter Refill ID" name="refillId" id="refillId" required> </th>
                                    </tr>
                                <tr>
                                <th>Brand Name</th>
                                    <th><input type="text" placeholder="Enter Brand Name" name="brandName" id="brandName" required> </th>
                                </tr>
                                <tr>
                                    <th>Dose Status</th>
                                    <th>
                                    <input type="text" placeholder="Enter Dose Status" name="doseStatus" id="doseStatus" required>
                                    </th>
                                    </tr>
                                <tr>
                                <tr>
                                    <th>Dose</th>
                                    <th>
                                    <input type="text" placeholder="Enter Dose" name="dose" id="dose" required>
                                    </th>
                                    </tr>
                                <tr>
                                <tr>
                                    <th>Supplier ID</th>
                                    <th>
                                    <input type="text" placeholder="Enter Supplier ID" name="supplyId" id="supplyId" required>
                                    </th>
                                    </tr>
                                
                                <tr>
                                    <th>Quantity</th>
                                    <th>
                                    <input type="number" placeholder="Enter Quantity" name="QTY" id="QTY" required>
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
            
<?php require_once($_SERVER['DOCUMENT_ROOT']."/mvcfinal/app/includes/Man_footer.php");?>