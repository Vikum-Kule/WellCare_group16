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
                            Assigning Orders With Delivers
                        </h3>
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                    <div class="card-content">
                        <table>
                            <thead>
                                <tr>
                                    
                                    <th>Order ID</th>
                                    <th>Delivery Person</th>
                                    <th>Deliver/Not</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($data['assignd'] as $assign): ?>
			                	<tr>
                                   
                                    <td><?php echo $assign->OrderId; ?></td>
                                    <td><?php echo $assign->delivery_Username; ?></td>
                                    <?php if($assign->status =="delivered"){?>
                                    <td style="color: green;">Delivered</td>
                                    <?php }else{?>
                                    <td style="color: Red;">Delivering</td>
                                    <?php }?>
                                    
                                        
                                    
				                </tr>
				                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>


</div>