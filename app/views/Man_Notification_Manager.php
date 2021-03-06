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
                            Running out of Quantity
                        </h3>
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                    <div class="card-content">
                        <table>
                            <thead>
                                <tr>
                                    
                                    <th>Generic Name</th>
                                    <th>Brand Name</th>
                                    <th>Dose</th>
                                    <th>Dose Forms</th>
                                    <th>QTY</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($data['minimums'] as $minimum): ?>
                                <tr>
                                    
                                    <td><?php echo $minimum->name; ?></td>
                                    <td><?php echo $minimum->brand; ?></td>
                                    <td><?php echo $minimum->dose; ?></td>
                                    <td><?php echo $minimum->doseStatus; ?></td>
                                    <td><?php echo $minimum->QTY; ?></td>
                                   
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>

               


      

<?php require_once($_SERVER['DOCUMENT_ROOT']."/mvcfinal/app/includes/Man_footer.php");?>