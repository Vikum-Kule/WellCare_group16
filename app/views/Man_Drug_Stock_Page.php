<?php require_once ($_SERVER['DOCUMENT_ROOT']."/mvcfinal/app/config/config.php");?>
<?php require_once($_SERVER['DOCUMENT_ROOT']."/mvcfinal/app/includes/Man_header.php");?>

<div class="wrapper">
        <div class="row">
            <div class="col-3 col-m-6 col-sm-6">
                <div class="notification">
                    <h3><div id="totaldrugs"></div></h3>
                    <p>Total Medicines</p>
                </div>
            </div>
           <!-- <div class="col-3 col-m-6 col-sm-6">
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
            </div>-->
        </div>


        <div class="card">
                    <div class="card-header">
                        <h3>
                            Drug Stock
                        </h3>
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                    <div class="card-content">
                        <table>
                            <thead>
                                <tr>
                                    
                                    <th>Generic Name</th>
                                    <th>Brand Name</th>
                                    <th>Description</th>
                                    <th>QTY</th>
                                    <th>Price</th>
                                    
                                    <th>Dose Status</th>
                                    <th>Dose</th>
                                    <th>Tempurature</th>
                                    <th>subCategory</th>
                                    <th>imageLocation</th>
                                   
                                    <th>Update</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($data['drugs'] as $drug): ?>
			                	<tr>
                                   
                                    <td><?php echo $drug->name; ?></td>
                                    <td><?php echo $drug->brand; ?></td>
                                    <td><?php echo $drug->description; ?></td>
                                    <td><?php echo $drug->QTY; ?></td>
                                    <td><?php echo $drug->price; ?></td>
                                   
                                    <td><?php echo $drug->doseStatus; ?></td>
                                    <td><?php echo $drug->dose; ?></td>
                                    <td><?php echo $drug->temperature; ?></td>
                                    <td><?php echo $drug->subCategory; ?></td>
                                    <td><?php echo $drug->imageLocation; ?></td>
                                        
                                    <td><div class="button"><button type="button"><a href="<?php echo URLROOT . "/Man_adddrug/updatedrugs/" . $drug->medicineId ?>">Update</a></button></td>
				                </tr>
				                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>


                <div class="button">
		<button type="button"><a href="<?php echo URLROOT; ?>/Man_adddrug/adddrugs">Add</button>
	
	</div><!--button-->

<?php require_once($_SERVER['DOCUMENT_ROOT']."/mvcfinal/app/includes/Man_footer.php");?>
