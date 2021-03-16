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
                                    <th>Order Id</th>
                                    <th>Supplier Id</th>
                                    <th>Invoice No</th>
                                    <th>Price</th>
                                    <th>Date</th>
                                    <th>Update</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($data['orders'] as $order): ?>
				<tr>
					<td><?php echo $order->orderId; ?></td>
					<td><?php echo $order->supplierId; ?></td>
					<td><?php echo $order->invoiceNo; ?></td>
					<td><?php echo $order->price; ?></td>
					<td><?php echo $order->date; ?></td>
					<td><a href="<?php echo URLROOT . "/Man_supplier_order/updateorder/" . $order->orderId ?>">Update</a></td>
				</tr>
				<?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>


                <div class="button">
                <button type="button"><a href="http://localhost/mvcfinal/Man_supplier_order/addorder">Add</a></button>
	
	</div><!--button-->

<?php require_once($_SERVER['DOCUMENT_ROOT']."/mvcfinal/app/includes/Man_footer.php");?>