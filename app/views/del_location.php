<?php require_once ($_SERVER['DOCUMENT_ROOT']."/MVCFINAL/app/config/config.php");?>
<?php require_once($_SERVER['DOCUMENT_ROOT']."/MVCFINAL/app/includes/del_header.php");?>

    <!-- main content -->
    <div class="wrapper" id="wrapper" >
        <div class="row">
            <div class="col-3 col-m-6 col-sm-6">
                <div class="notification">
                <h3 style="margin-top:20px;"><div id="to_deliver"></div></h3>
                    <p>To Deliver</p>
                </div>
            </div>
            
        </div>
        <div class="row">
        <div class="col-sm-12" id="smallOrders">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            Order List
                        </h3>
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                    <div class="card-content">
                    <form action="<?php echo URLROOT; ?>/del_orders/showOrder" method="POST">
                    <table>
                            <?php foreach($data['orders'] as $orders): ?>
                            <tbody>
                            <tr>
                            <form action="<?php echo URLROOT; ?>/del_orders/showOrder" method="POST">
                                <button type="submit" name="select" id="select" style="width: 100%; background-color:rgb(224, 224, 228) ; " >
                                <input id="orderId" type="hidden" name="orderId" value="<?php echo $orders->orderId; ?>">
                                <input id="redirect" type="hidden" name="redirect" value="del_location">
                                   <div style="float: left;">
                                    <b>Order: </b><?php echo $orders->orderId; ?>
                                    &nbsp
                                    <b>Name: </b><?php echo $orders->FirstName; ?> <?php echo $orders->LastName; ?>
                                    </div>
                                </button>
                            </form>   
                            
                            </tr>
                            </tbody>
                            <?php endforeach;?>
                            
                            
                        </table>
                        </form>
                    </div>
                </div>
            </div>


            <div class="col-8 col-m-12 col-sm-12" id="allOrder_card">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            Order List
                        </h3>
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                    <div class="card-content">
                        <table id="allOrders">
                            <thead>
                                <tr>
                                    <th>Order Id</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <?php foreach($data['orders'] as $orders): ?>
                            <tbody>
                            <tr onclick="showRow_address(<?php echo $orders->orderId; ?>)">
                                <td><?php echo $orders->orderId; ?></td>
                                <td><?php echo $orders->FirstName; ?> <?php echo $orders->LastName; ?></td>
                                <td><?php echo $orders->price; ?></td>
                                <td><input id="orderId" type="hidden" name="orderId" value="<?php echo $orders->orderId; ?>">
                                <button id="delivery_btn" name="delivery_btn" ></button></form></td>
                                
                        </tr>
                            </tbody>
                            <?php endforeach;?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-4 col-m-12 col-sm-12" id="addressCard">
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
            </div>
        </div>
        

        <!-- end main content -->

        <?php require_once($_SERVER['DOCUMENT_ROOT']."/MVCFINAL/app/includes/del_footer.php");?>