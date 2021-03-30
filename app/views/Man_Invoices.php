<?php require_once ($_SERVER['DOCUMENT_ROOT']."/mvcfinal/app/config/config.php");?>
<?php require_once($_SERVER['DOCUMENT_ROOT']."/mvcfinal/app/includes/Man_header.php");?>

<div class="wrapper">
        <div class="row">
            <!-- <div class="col-3 col-m-6 col-sm-6">
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
            </div> -->
        </div>


        <div class="card">    
        <div class="tabledrug">
		<table>
			<colgroup>
				<col id="firsti">
				<col id="secondi">
			</colgroup>
			<thead>
				<tr>
					<th>Invoice Number</th>
					<th>Medicine List</th>
					<th>Update</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($data['invoices'] as $invoice): ?>
				<tr>
					<td><?php echo $invoice->invoiceNo; ?></td>
					<td><?php echo $invoice->medicineList; ?></td>	
					<td><div class="button"><button type="button"><a href="<?php echo URLROOT . "/Man_Invoices/updateinvoice/" . $drug->medicineId ?>">Update</a></button></td>
				</tr>
				<?php endforeach;?>
			</tbody>
		</table>
		
	</div><!--tableinvoice-->
	<div class="button">
		<button type="button"><a href="http://localhost/mvcfinal/Man_Invoices/addinvoice">Add</button>
	
	</div><!--button-->
    
        </div>

<?php require_once($_SERVER['DOCUMENT_ROOT']."/mvcfinal/app/includes/Man_footer.php");?>