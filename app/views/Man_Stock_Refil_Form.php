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
                        <table id="openTab">
                            <tbody>
                                <tr>
                                <th>Brand Name</th>
                                    <th><input type="text" placeholder="Enter Brand Name" name="brandName" id="brandName" required> </th>
                                
                                <th>Generic Name</th>
                                    <th><input type="text" placeholder="Enter Generic Name" name="genericName" id="medName" required> </th>
                                </tr>
                                <tr>
                                    <th>Dosage forms</th>
                                    <th>
                                    <input type="text" placeholder="Enter Dose Status" name="doseStatus" id="doseStatus" required>
                                    </th>
                                   
                                
                                
                                    <th>Dose</th>
                                    <th>
                                    <input type="number" placeholder="Enter Dose" name="dose" id="dose" required>
                                    </th>
                                    </tr>
                                <tr>
                                <tr>
                                    <th>Supplier ID</th>
                                    <th>
                                    <input type="number" placeholder="Enter Supplier ID" name="supplyId" id="supplyId" required>
                                    </th>
                                    
                                    <th>Quantity</th>
                                    <th>
                                    <input type="number" placeholder="Enter Quantity" name="QTY" id="QTY" required>
                                    </th>
                                </tr>
                                <tr>
                                    <th>Expiration Date</th>
                                    <th>
                                    <input type="date" placeholder="Enter Expiration date" name="EXP" id="EXP" required>
                                    </th>
                                    
                                    <th>Manufacture Date</th>
                                    <th>
                                    <input type="date" placeholder="Enter Manufacture Date" name="MFD" id="MFD" required>
                                    </th>
                                </tr>
                                <tr>
                                    <th>Unit Price</th>
                                    <th>
                                    <input type="number" placeholder="Enter Unit Price" name="price" id="price" step="0.01" required>
                                    </th>
                                </tr>
                                </tbody>
                        </table>
        
         </div>
         <div style="text-align: center;height:50px;">
                    <button  name="add" id="add" class="add" type="button" onclick="refillData()">ADD</button>
                    </div>
                </div>
            </div>
            
<?php require_once($_SERVER['DOCUMENT_ROOT']."/mvcfinal/app/includes/Man_footer.php");?>