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
                                    <th>Refill ID</th>
                                    <th>Brand Name</th>
                                    <th>Dose</th>
                                    <th>Supplier ID</th>
                                    <th>Refill Date and TIme</th>
                                    <th>Medicine ID</th>
                                    <th>QTY</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="button">
		<button type="button"><a href="http://localhost/mvcfinal/Man_pages/stockrefilformview">Add</button>
	
	</div><!--button-->
    
    </div>

<?php require_once($_SERVER['DOCUMENT_ROOT']."/mvcfinal/app/includes/Man_footer.php");?>