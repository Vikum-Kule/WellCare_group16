<?php require_once ($_SERVER['DOCUMENT_ROOT']."/MVCFINAL/app/config/config.php");?>
<?php require_once($_SERVER['DOCUMENT_ROOT']."/MVCFINAL/app/includes/del_header.php");?>

    <!-- main content -->
    <div class="wrapper" id="wrapper">
    
    
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
                        <?php echo $data[1] ;?> Street Orders
                        </h3>
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                    <div class="card-content">
                        <table id="allStreets">
                            <?php foreach($data[0]['order'] as $order ): ?>
                            <tbody>
                            <tr id="openData<?php echo $order->orderId; ?>" onclick="opdenSlide(<?php echo $order->orderId; ?>)" >
                                <td><?php echo $order->orderId; ?></td>
                                <td><?php echo $order->streetAddress1; ?></td>
                            </tr>
                                <div id="hiddenData<?php echo $order->orderId; ?>" class="hiddenData">
                                    <tr>
                                    <td><?php echo $order->	FirstName; ?> <?php echo $order->LastName; ?></td>
                                    <td><?php echo $order->PhoneNum; ?></td>
                                    </tr>
                                    <tr>
                                        <td><form method="POST" action="<?php echo URLROOT; ?>/del_orders/selectedOrder"> <input id="orderId " type="hidden" name="orderId " value="<?php echo $order->orderId; ?>"><button id="select" type="submit" name="select" >Select</button></form></td>                     
                                    </tr>
                                </div>
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