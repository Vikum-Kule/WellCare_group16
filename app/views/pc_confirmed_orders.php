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
                        <table>
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
                            <tr>
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
                            Progress bar
                        </h3>
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                    <div class="card-content">

                    </div>
                </div>
            </div>
        </div>

        <!-- end main content -->
    <?php require_once($_SERVER['DOCUMENT_ROOT']."/MVCFINAL/app/includes/pc_footer.php");?>