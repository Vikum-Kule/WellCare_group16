<?php require_once ($_SERVER['DOCUMENT_ROOT']."/mvcfinal/app/config/config.php");?>
<?php require_once($_SERVER['DOCUMENT_ROOT']."/mvcfinal/app/includes/Man_header_inquiries.php");?>

<div class="wrapper">
        <div class="row">
           < <div class="col-3 col-m-6 col-sm-6">
                <div class="notification">
                    <h3><div id="unread"></div></h3>
                    <p>Unread</p>
                </div>
            </div>
            <div class="col-3 col-m-6 col-sm-6">
                <div class="notification">
                    <h3><div id="processing"></div></h3>
                    <p>Processing</p>
                </div>
            </div>
            <div class="col-3 col-m-6 col-sm-6">
                <div class="notification">
                    <h3><div id="completed"></div></h3>
                    <p>Completed</p>
                </div>
            </div>
           
        </div>


        <div class="card">

        <div class="card-header">
                        <h3>
                            Inquiries
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
                                <th>Complete </th>

                               
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($data['inquiries'] as $inquiry): ?>
			                	<tr>
                                    <td><?php echo $inquiry->inquiryId; ?></td>
                                    <td><?php echo $inquiry->orderId; ?></td>
                                    <td><?php echo $inquiry->inquiryDate; ?></td>
                                    <td><?php echo $inquiry->Inquiry; ?></td>
                                    <td><div class="button"><button type="button"><a href="<?php echo URLROOT . "/Man_Inquiry/completeinquiry/" . $inquiry->inquiryId ?>">Complete</a></button></td>
                                    
                                    
                                    
				                </tr>
				                <?php endforeach;?>
                            </tbody>
                        </table>
                        </div>
                        

        </div><!--buttons-->

<?php require_once($_SERVER['DOCUMENT_ROOT']."/mvcfinal/app/includes/Man_footer.php");?>

