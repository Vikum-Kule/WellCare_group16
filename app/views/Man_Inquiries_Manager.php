<?php require_once ($_SERVER['DOCUMENT_ROOT']."/mvcfinal/app/config/config.php");?>
<?php require_once($_SERVER['DOCUMENT_ROOT']."/mvcfinal/app/includes/Man_header.php");?>

<div class="wrapper">
        <div class="row">
           <!-- <div class="col-3 col-m-6 col-sm-6">
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
                            Table
                        </h3>
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                    <div class="card-content">
                        <table>
                            <thead>
                                <tr>
                                <th>Inquiry ID</th>
                                <th>Order ID</th>
                                <th>Inquiry Date</th>
                                <th>Inquiry </th>
                                <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($data['inquiries'] as $inquiry): ?>
			                	<tr>
                                    <td><?php echo $inquiry->inquiryId; ?></td>
                                    <td><?php echo $inquiry->orderId; ?></td>
                                    <td><?php echo $inquiry->inquiryDate; ?></td>
                                    <td><?php echo $inquiry->Inquiry; ?></td>
                                    <td><?php echo $inquiry->status; ?></td>
                                    
                                    
				                </tr>
				                <?php endforeach;?>
                            </tbody>
                        </table>
                        </div>

        </div><!--buttons-->

<?php require_once($_SERVER['DOCUMENT_ROOT']."/mvcfinal/app/includes/Man_footer.php");?>

