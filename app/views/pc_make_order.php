<?php require_once ($_SERVER['DOCUMENT_ROOT']."/MVCFINAL/app/config/config.php");?>
<?php require_once($_SERVER['DOCUMENT_ROOT']."/MVCFINAL/app/includes/pc_header.php");?>
 
    <!-- main content -->
    <div class="wrapper">
        <div class="row">
            <div class="col-3 col-m-6 col-sm-6">
                <div class="notification">
                    <h3><div id="request"></div></h3>
                    <p>Requested</p>
                </div>
            </div>
            <div class="col-3 col-m-6 col-sm-6">
                <div class="notification">
                    <h3><div id="pending"></div></h3>
                    <p>Pending</p>
                </div>
            </div>
            <div class="col-3 col-m-6 col-sm-6">
                <div class="notification">
                    <h3><div id="confirmed"></div></h3>
                    <p>Completed</p>
                </div>
            </div>
			<?php foreach ($data[1]['orderData'] as $orderData):?> 
			<div class="cardDetails">
                    <div class="card-detais-header">
                        <h4>
                            Customer Details
                        </h4>
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                    <div class="card-details-content">
						<table>
						<tbody>
						<tr>
							<th> Name: </th>
							<th> <?php echo $orderData->FirstName." ".$orderData->LastName ?></th>
						</tr>
						<?php endforeach ?>
						<tr>
							<th>OrderNumber: </th>
							<th><?php echo $data[2] ?></th>
						</tr>
						<?php foreach ($data[1]['orderData'] as $orderData):?>
						<tr>
							<th>Tel: </th>
							<th><?php echo $orderData->PhoneNum ?></th>
						</tr>
						</tbody>
						</table>
                    </div>
                </div>
				<?php endforeach ?>  
				<div class="card-btn">
                    <div class="card-btn-content">
                    
						<img class="left" src="<?php echo URLROOT."/public/img/right (2).png";?>" alt="">
						<form method="POST" action="<?php echo URLROOT; ?>/pc_view_drug/show_medicine"> <input id="currentId" type="hidden" name="orderId" value="<?php echo $data[2]; ?>">
                        <img class="right" id="right" src="<?php echo URLROOT."/public/img/right (1).png";?>" alt="">
                        </form>	
                    </div>
                </div>
            <!-- <div class="col-3 col-m-6 col-sm-6">
                <div class="notification">
                    <h3>100+</h3>
                    <p>Issues</p>
                </div>
            </div> -->
			</div>
        
        <div class="row">
            <div class="col-8 col-m-12 col-sm-12" id="inputTable">
                <div class="card">
                    <div class="card-content">
                    <form ‍>
                    <input type="hidden" name="order-id-hidden" id="order-id-hidden" value="<?php echo $data[2]; ?>">
                    <?php foreach ($data[1]['orderData'] as $orderData):?> 
                    <input type="hidden" name="order-name-hidden" id="order-name-hidden" value="<?php echo $orderData->FirstName." ".$orderData->LastName ?>">
                    <input type="hidden" name="prescription-hidden" id="prescription-hidden" value="<?php echo $orderData->image_path ?>">
                    <?php endforeach?> 
                    <input type="hidden" name="rowNum" id="rowNum">
                        <table id="openTab">
                            <tbody>
                                <tr>
                                <form method="POST">
                                    <th>Medicine</th>
                                    <th>
									<input type="text" list="allMedicine" autocomplete="off" id="medicine" oninput='selectData_byName()' name= "medi_name">
									<datalist id="allMedicine" >
					    			<?php foreach ($data[0]['medicine'] as $medicine){
					    			echo "<option value=$medicine->name>$medicine->name</option>";
					    			}
					    			?>
									</th>
                                </form>
								<form >
                                    <th>Brand</th>
                                    <th>
									<input type="text" list="allBrand" id="brand" name="brand" autocomplete="off" oninput='selectData_byBrand()'>
									<datalist id="allBrand" >
									<?php foreach ($data[0]['medicine'] as $medicine){
					    			echo "<option value = $medicine->brand >$medicine->brand</option>";
					    			}
					    			?>
									</th>
                                </form>
                                </tr>
                                <tr>
                                    <th>Dosage forms</th>
                                    <th>
                                        <select id="allDoseForm" class="allDoseForm" autocomplete="off"></select>    
                                    </th>
                                    <th>Dosage</th>
                                    <th>
                                        <select id="allDoses" class="allDoses" name="Doses" autocomplete="off" onchange="defineQTY()"></select>
                                    </th>
                                </tr>
                                <tr>
                                    <th>Qty</th>
                                    <th>
                                       <div class="Qty"> 
                                        <input  type="Number" id="QTY"><span class="messageQTY" id="messageQTY" style="font-size: 12px;"></span>
                                        </div>
                                    </th>

                                </tr>
                                <tr>
									<th>Frequency type</th>
									<th>
									<input list="status" name="stat" id="stat">

										<datalist id="status">
                                        <option value="Per Week">Per Week</option>
										<option value="Per Day">Per Day</option>
										<option value="Thrice a Day">Thrice a Day</option>
                                        <option value="Twice a Day">Twice a Day</option>
                                        <option value="Per 8 hours">Per 8 hours</option>
                                        <option value="Per 6 hours">Per 6 hours</option>
                                        <option value="Per hour">Per hour</option>
										</datalist>
									</th>
									<th>Frequency</th>
									<th><input type="text" id="frequency"></th>
								</tr>
                                <tr></tr>
                            </tbody>
                        </table>
                        </form>
                    </div>
                    <div style="text-align: center;height:50px;">
                        <button class="add" id="add" onclick="displayDetails()">Add</button>
                        <button class="reset" id="reset">Reset</button>
                    </div>
                </div>
            </div>
            <div class="col-4 col-m-12 col-sm-12">
			<div class="card" style="position: relative;">
                    <div class="card-header">
                        <h3>
                            Medicine List
                            <button class="prescription" id="prescription" onclick="prescription()">Prescription</button>
                        </h3>
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                    <div class="card-content">
                        <table>
                            <thead>
                                <tr>
                                    <th>Medicine</th>
                                    <th>QTY</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($data[3]['orderMedicine'] as $orderMedicine):?> 
                            <tr>
                                    <td><?php echo $orderMedicine->name; ?>(<?php echo $orderMedicine->brand; ?>)</td>
                                    <td><?php echo $orderMedicine->qty; ?></td>
                                </tr>
                            <?php endforeach?> 
                                <tr>
                                    <th></th>
                                    <th></th>
                                </tr>
                                <tr></tr>
                                <tr></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="card" id="prescriptionCard" style="width: 50%; display:none;">
                    
                    <div class="card-header">
                        <h3>
                            Prescription
                            <button class="prescription" id="dsiplayTab" onclick="medicineList()">Close</button>
                        </h3>
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                    <div class="card-content">
                        <div id="image_wrapp">
                        </div>
                    </div>
                   
            </div>
		<div class="row">
        <div class="col-8 col-m-12 col-sm-12" id="selectedMedicine">
            <div class="card">
                    <div class="card-header">
                        <h3>
                            Table
                        </h3>
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                    <div class="card-content">
                        <table id="display">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Medicine</th>
                                    <th>Brand</th>
                                    <th>Dosage forms</th>
                                    <th>Dosage</th>
                                    <th>Frequency type</th>
                                    <th>Frequency</th>
                                    <th>QTY</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                <tr></tr>
                                <tr></tr>
                                <tr></tr>
                            </tbody>
                        </table>
                    </div>
                    <div style="text-align: center;height:50px;">
                        <button id="submit_medidcine" onclick="open_confirm()" >Submit</button>
                    </div>
            </div>
        </div>
        
        <div class="card" id="noteCard" style="width: 50%; display:none;">
                    <div class="card-header">
                        <h3>
                            Note
                            <button id="submitNote" onclick="closeNote()">Close</button>
                        </h3>
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                    <div class="card-content">
                        <table>
                            <tbody>
                                <tr>
                                    <th>Unavailable Medicine</th>
                                </tr>
                                <tr>
                                    <th>
                                    <textarea name="anAvlMedicine" id="anAvlMedicine" cols="30" rows="10"></textarea>
                                    </th>
                                </tr>
                                <tr>
                                    <th>Extra Note</th>
                                </tr>
                                <tr>
                                <th><textarea name="extra" id="extra" cols="30" rows="10"></textarea></th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
            </div>
		
        <div class="col-2 col-m-2 col-sm-2" id="priceCard">
			<div class="card" style="position: relative;">
                    <div class="card-content">
                        <table>
                            <tbody>
                                <tr>
                                    <th>Total</th>
                                </tr>
                                <tr>
                                    <th id="totalPrice">
                                    
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                    <button id="gotoNote" onclick="showNote()">Note</button>
                                    </th>
                                </tr>
                                <tr></tr>
                                <tr></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



        <!-- end main content -->

        <?php require_once($_SERVER['DOCUMENT_ROOT']."/MVCFINAL/app/includes/pc_footer.php");?>