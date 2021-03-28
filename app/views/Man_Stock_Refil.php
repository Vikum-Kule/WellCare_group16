<?php require_once ($_SERVER['DOCUMENT_ROOT']."/mvcfinal/app/config/config.php");?>
<?php require_once($_SERVER['DOCUMENT_ROOT']."/mvcfinal/app/includes/Man_header.php");?>

<div class="wrapper">
        <div class="row">
            <!--<div class="col-3 col-m-6 col-sm-6">
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
            </div>-->
        </div>


        <div class="card">

        <div class="card-header">
                        <h3>
                            Stock Refil Table
                        </h3>
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                    <div class="card-content">
                        <table>
                            <thead>
                                <tr>
                                    <th>Refill ID</th>
                                    <th>Brand Name</th>
                                    <th>Dosage forms</th>
                                    <th>Dose</th>
                                    <th>Supplier ID</th>
                                    <th>Refill Date and TIme</th>
                                    <th>Medicine ID</th>
                                    <th>QTY</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($data['refills'] as $refill): ?>
			                	<tr>
                                    <td><?php echo $refill->refillId; ?></td>
                                    <td><?php echo $refill->brandName; ?></td>
                                    <td><?php echo $refill->doseStatus; ?></td>
                                    <td><?php echo $refill->dose; ?></td>
                                    <td><?php echo $refill->supplyId; ?></td>
                                    <td><?php echo $refill->refillDateTime; ?></td>
                                    <td><?php echo $refill->medicineId; ?></td>
                                    <td><?php echo $refill->QTY; ?></td>
                                    
				                </tr>
				                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                    <div class="button">
		<button type="button"><a href="http://localhost/mvcfinal/Man_pages/stockrefilformview">Add</button>
	
	</div><!--button-->
    
    </div>

<?php require_once($_SERVER['DOCUMENT_ROOT']."/mvcfinal/app/includes/Man_footer.php");?>