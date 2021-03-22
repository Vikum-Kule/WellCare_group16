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
            <div class="col-3 col-m-6 col-sm-6">
                <div class="notification">
                    <h3>0</h3>
                    <p>Issues</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8 col-m-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            Table
                        </h3>
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                    <div class="card-content">
                        <table id="requested_tab">
                            <thead>
                                <tr>
                                    <th>Order number</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>date & time</th>
                                    <th>Image Path</th>
                                </tr>
                            </thead>
                            <?php foreach($data['nonOrders'] as $nonOrders): ?>
                            <tbody>
                            <tr onclick="rowData_fromReq(<?php echo $nonOrders->orderId; ?>)">
                                <td><?php echo $nonOrders->orderId; ?></td>
                                <td><?php echo $nonOrders->FirstName; ?></td>
                                <td><?php echo $nonOrders->LastName; ?></td>
                                <td><?php echo $nonOrders->DateTime; ?></td>
                                <td><?php echo $nonOrders->image_path; ?></td>

                                <td><form method="POST" action="<?php echo URLROOT; ?>/pc_view_drug/show_medicine"> <input id="orderId" type="hidden" name="orderId" value="<?php echo $nonOrders->orderId; ?>"><button id="process" type="submit" name="process" >Process</button></form></td>
                                
                        </tr>
                            </tbody>
                            <?php endforeach;?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-4 col-m-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            Order Details
                        </h3>
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                    <div class="card-content">
                            <table id="req_data" style="font-size: 12px;">
                            <tbody>
                                <tr>
                                    <th> Name: </th>
                                    <td id="req_name"></td>
                                </tr>
                                <tr>
                                    <th>Tel: </th>
                                    <td id="req_tel"></td>
                                </tr>
                                <tr>
                                    <th>Prescription: </th>
                                    <td id="orderPrescription"></td>
                                </tr>
                                <tr>
                                    <th>Medicine List: </th>
                                </tr>
                                
	    					</tbody>   
                            </table>
                            
                    </div>
                </div>
            </div>
        </div>



        <!-- end main content -->
    <?php require_once($_SERVER['DOCUMENT_ROOT']."/MVCFINAL/app/includes/pc_footer.php");?>