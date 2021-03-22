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
                        <table id="completed_tab">
                            <thead>
                                <tr>
                                    <th>Order number</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Date & time</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <?php foreach($data['orders'] as $orders): ?>
                            <tbody>
                            <tr onclick="pen_rowData(<?php echo $orders->orderId; ?>)">
                                <td><?php echo $orders->orderId; ?></td>
                                <td><?php echo $orders->FirstName; ?></td>
                                <td><?php echo $orders->LastName; ?></td>
                                <td><?php echo $orders->DateTime; ?></td>
                                <td><?php echo $orders->price; ?></td>
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
                            <table id="pen_data" style="font-size: 12px;">
                            <tbody>
                                <tr>
                                    <th> Name: </th>
                                    <td id="pen_name"></td>
                                </tr>
                                <tr>
                                    <th>Tel: </th>
                                    <td id="pen_tel"></td>
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