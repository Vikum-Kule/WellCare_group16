<?php require_once ($_SERVER['DOCUMENT_ROOT']."/MVCFINAL/app/config/config.php");?>
<?php require_once($_SERVER['DOCUMENT_ROOT']."/MVCFINAL/app/includes/del_header.php");?>

    <!-- main content -->
    <div class="wrapper" >

        <div class="row" id="city_wrapper">
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
        <div class="row">
            <div class="col-8 col-m-12 col-sm-12" id="city_card">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            City List
                        </h3>
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                    <div class="card-content">
                        <table id="allCities">
                            <thead>
                                <tr>
                                    <th>City</th>
                                    <th>orders</th>
                                </tr>
                            </thead>
                            <?php foreach($data['city'] as $city): ?>
                            <tbody>
                            <tr>
                                <td><?php echo $city->city; ?></td>
                                <td><form method="POST" action="<?php echo URLROOT; ?>/del_orders/show_streets"> <input id="city" type="hidden" name="city" value="<?php echo $city->city; ?>"><button id="select" type="submit" name="select" >Select</button></form></td>                     
                            </tr>
                            </tbody>
                            <?php endforeach;?>
                            
                        </table>
                    </div>
                </div>
            </div>
            <!-- <div class="col-4 col-m-12 col-sm-12" id="addressCard">
                <div class="card" >
                    <div class="card-header">
                        <h3>
                            Address
                        </h3>
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                    <div class="card-content">
                        <table>
                        <tbody>
                            <tr>
                                <th>Order Id </th><td id="id"></td>
                            </tr>
                            <tr>
                                <th>Street Address1: </th><td id="streetAddress1"></td>
                            </tr>
                            <tr>
                                <th>Street Address2: </th><td id="streetAddress2"></td>
                            </tr>
                            <tr>
                                <th>City: </th><td id="city"></td>
                            </tr>
                            <tr>
                                <th>District: </th><td id="district"></td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div> -->
        </div>
        

        <!-- end main content -->

        <?php require_once($_SERVER['DOCUMENT_ROOT']."/MVCFINAL/app/includes/del_footer.php");?>