<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/MVCFINAL/app/config/config.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/MVCFINAL/app/includes/Admin_header.php"); ?>
<link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/Admin_style.css">
<style>
    .card {
        width: 100%;
    }
    
</style>
<!-- main content -->
<div class="wrapper">
    <div class="row">
        <div class="col-3 col-m-6 col-sm-6">
            <div class="notification">
                <!-- <h3>100+</h3>
                    <p>To do</p> -->
            </div>
        </div>
        <div class="col-3 col-m-6 col-sm-6">
            <div class="notification">
                <!-- <h3>100+</h3>
                    <p>In progress</p> -->
            </div>
        </div>
        <div class="col-3 col-m-6 col-sm-6">
            <div class="notification">
                <!-- <h3>100+</h3>
                    <p>Completed</p> -->
            </div>
        </div>
        <div class="col-3 col-m-6 col-sm-6">
            <div class="notification">
                <!-- <h3>100+</h3>
                    <p>Issues</p> -->
            </div>
        </div>
    </div>
    <div class="row">
        
            <div class="card">
                <div class="card-header">
                    <h3>
                        Customer Details
                    </h3>
                    <i class="fas fa-ellipsis-h"></i>
                    <!--<center>
                <div class="viewform">
                    <form method="post">
                        <br><br>
                        <label> Search  </label>
                        <input type="text" name="code">
                        
                        <button class="btn6" type="submit" name="view"><b>View</b></button>
                        
                       
                    </form>
                </div>          
              </center>-->

                </div>
                <div class="card-content">
                    <table>
                        <thead>
                            <tr>

                                <th>UserName</th>
                                <th>Email</th>
                                <th>PhoneNumber</th>
                                <th>StreetAddress1</th>
                                <th>StreetAddress2</th>
                                <th>City</th>
                                <th>District</th>
                                <th>postalcode</th>



                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($data['cus'] as $cus) : ?>
                                <tr>

                                    <td><?php echo $cus->userName; ?></td>
                                    <td><?php echo $cus->Email; ?></td>
                                    <td><?php echo $cus->PhoneNum; ?></td>
                                    <td><?php echo $cus->streetAddress1; ?></td>
                                    <td><?php echo $cus->streetAddress2; ?></td>
                                    <td><?php echo $cus->city; ?></td>
                                    <td><?php echo $cus->district; ?></td>
                                    <td><?php echo $cus->postalCode; ?></td>





                                </tr>
                            <?php endforeach; ?>
                        </tbody>


                    </table>

                </div>
            </div>
       

    </div>

    <!-- end main content -->
    <?php require_once($_SERVER['DOCUMENT_ROOT'] . "/MVCFINAL/app/includes/Admin_footer.php"); ?>