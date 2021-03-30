<?php require_once ($_SERVER['DOCUMENT_ROOT']."/mvcfinal/app/config/config.php");?>
<?php require_once($_SERVER['DOCUMENT_ROOT']."/mvcfinal/app/includes/Man_header_notification.php");?>

<div class="wrapper">
        <div class="row">
            <div class="col-3 col-m-6 col-sm-6">
                <div class="notification">
                    <h3><div id="totalnotifications"></h3>
                    <p>Running out of Quantity</p>
                </div>
            </div>
            <div class="col-3 col-m-6 col-sm-6">
                <div class="notification">
                    <h3><div id="totalnotifications"></h3>
                    <p>Near to Expire</p>
                </div>
            </div>
            <div class="col-3 col-m-6 col-sm-6">
                <div class="notification">
                    <h3><div id="totalnotifications"></h3>
                    <p>Total Medicines to Reorder</p>
                </div>
            </div>
            <!-- <div class="col-3 col-m-6 col-sm-6">
                <div class="notification">
                    <h3>100+</h3>
                    <p>Issues</p>
                </div>
            </div> -->
        </div>


        
                <div class="card">
                    <div class="card-header">
                        <h3>
                            Expired
                        </h3>
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                    <div class="card-content">
                        <table>
                            <thead>
                                <tr>
                                    <th>Refill ID</th>                                   
                                    <th>Brand Name</th>
                                    <th>Dose</th>
                                    <th>Dose Forms</th>
                                    <th>Expiration Date</th>
                                    <th>QTY</th>
                                    <th>Remove</th>
                                  
                                </tr>
                            </thead>
                            <tbody>
                            <tbody>
                                <?php foreach($data['expiries'] as $expiry): ?>
                                <tr>
                                    
                                    <td><?php echo $expiry->refillId; ?></td>
                                    <td><?php echo $expiry->brandName; ?></td>
                                    <td><?php echo $expiry->dose; ?></td>
                                    <td><?php echo $expiry->doseStatus; ?></td>
                                    <td><?php echo $expiry->EXP; ?></td>
                                    <td><?php echo $expiry->QTY; ?></td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>


      

<?php require_once($_SERVER['DOCUMENT_ROOT']."/mvcfinal/app/includes/Man_footer.php");?>