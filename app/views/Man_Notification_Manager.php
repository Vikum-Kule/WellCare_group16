<?php require_once ($_SERVER['DOCUMENT_ROOT']."/mvcfinal/app/config/config.php");?>
<?php require_once($_SERVER['DOCUMENT_ROOT']."/mvcfinal/app/includes/Man_header.php");?>

<div class="wrapper">
        <div class="row">
            <div class="col-3 col-m-6 col-sm-6">
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
            </div>
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
                                    <th>Medicine Id</th>
                                    <th>Generic Name</th>
                                    <th>Brand Name</th>
                                    <th>Dose</th>
                                    <th>QTY</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($data['minimums'] as $minimum): ?>
                                <tr>
                                    <td><?php echo $minimum->medicineId; ?></td>
                                    <td><?php echo $minimum->name; ?></td>
                                    <td><?php echo $minimum->brand; ?></td>
                                    <td><?php echo $minimum->dose; ?></td>
                                    <td><?php echo $minimum->QTY; ?></td>
                                    <td><form action="<?php echo URLROOT . "/Man_adddrug/deletedrug/" . $drug->medicineId ?>" method = "POST">
                                                <input type="submit" name="delete" value="Remove">
                                    </form></td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>


      

<?php require_once($_SERVER['DOCUMENT_ROOT']."/mvcfinal/app/includes/Man_footer.php");?>