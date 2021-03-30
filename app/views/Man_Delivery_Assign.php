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
                            Assigning Orders
                        </h3>
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                    <div class="card-content">
                        <table>
                            <thead>
                                <tr>
                                    
                                    <th>Order ID</th>
                                    <th>Delivery Person</th>
                                    <th>Assign A Delivery Person</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($data['assigns'] as $assign): ?>
			                	<tr>
                                   
                                    <td><?php echo $assign->orderId; ?></td>
                                    <td></td>
                                    
                                    <td><div class="button"><button type="button"><a href="<?php echo URLROOT . "/Man_adddrug/deletedrug/" . $drug->medicineId ?>">Assign</a></button></td>    
                                    
				                </tr>
				                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>


</div>