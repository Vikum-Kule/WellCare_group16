<?php require_once ($_SERVER['DOCUMENT_ROOT']."/MVCFINAL/app/config/config.php");?>
<?php require_once($_SERVER['DOCUMENT_ROOT']."/MVCFINAL/app/includes/del_header.php");?>

    <!-- main content -->
    <div class="wrapper" id="wrapper">
    
    
    <div class="row">
            <div class="col-3 col-m-6 col-sm-6">
                <div class="notification">
                <h3 style="margin-top:20px;"><div id="to_deliver"></div></h3>
                    <p>To Deliver</p>
                </div>
            </div>
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
                            <tr>
                            <form action="<?php echo URLROOT; ?>/del_orders/showOrder" method="POST">
                                <button type="submit" name="select" id="select" style="width: 100%; background-color:rgb(224, 224, 228) ; " >
                                <input id="orderId" type="hidden" name="orderId" value="<?php echo $order->orderId; ?>">
                                <input id="redirect" type="hidden" name="redirect" value="Del_orders_forStreet">
                                   <div style="float: left;">
                                    <b>Order: </b><?php echo $order->orderId; ?>
                                   </div>
                                   <div style="float: right;">
                                    <b>Street: </b><?php echo $order->streetAddress1; ?>
                                    </div>
                                </button>
                            </form>   
                            
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