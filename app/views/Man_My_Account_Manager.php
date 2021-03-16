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
        <div class="accountbody">
		<div class="photo">
			<div class="photoaccount">
			<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSMc4g58prl3gRyOTIEFqTPxeUWOTJYFL0GXg&usqp=CAU" alt="Italian Trulli">
			</div><!--photoaccount-->
		</div><!--photo-->
		<div class="accountform">
			<form method = "get" action ="Drug_Stock_Page.html" >
					<div class="tableaccount">
					<table>
						<colgroup>
							<col id="firstq">
							<col id="secondq">
						</colgroup>
						<tbody>
						<tr>
							<td><label for="name">Name</label></td>
							<td><input type="text" name="name"></td>
						</tr>
						<tr>
							<td><label for="nic">NIC</label></td>
							<td><input type="text" name="nic"></td>
						</tr>
						<tr>
							<td><label for="address">Address</label></td>
							<td><input type="text" name="address"></td>
						</tr>
						<tr>
							<td><label for="telephone_number">Telephone Number</label></td>
							<td><input type="text" name="telephone_number"></td>
						</tr>
						<tr>
							<td><label for="gender">Gender</label></td>
							<td><input type="text" name="gender"></td>
						</tr>
						</tbody>
					</table>
					</div><!--tableaccount-->
				</form>
				<div class="buttonsaccount">
					<button type="button"><a href="http://localhost/mvcfinal/Man_pages/updatemyaccount">Update</a></button>
					<button type="button"><a href="http://localhost/mvcfinal/Man_addrug/showdrugs">Save</a></button>
				</div><!--buttonsaccount-->
		</div><!--accountform-->
	</div><!--accountbody-->


        </div>

<?php require_once($_SERVER['DOCUMENT_ROOT']."/mvcfinal/app/includes/Man_footer.php");?>