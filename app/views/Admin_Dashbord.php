<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/MVCFINAL/app/config/config.php"); ?>
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/MVCFINAL/app/includes/Admin_header.php"); ?>
<link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/Admin_style.css">
<style>
    .card {
        width: 100%;
        margin-top: 10px;
    }

    .card-header ul li {
        display: inline;
        margin: 20px;
    }

    .card-header ul li button {
        background-color: #367BA8;
        color: white;
        padding: 16px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 20%;
        opacity: 0.9;
    }
    
</style>
<!-- main content -->
<div class="wrapper">


    <div class="row">

        <div class="card">
            <div class="card-header">
                <h3>
                    DASH BORD
                </h3>
                <i class="fas fa-ellipsis-h"></i>
            </div>


            <div class="card-content">
                <table>
                    <thead>
                        <tr>
                            <th>Pharmacist</th>
                            <th>Custemer</th>
                            <th>Manager</th>
                            <th>DeliveryBoy</th>
                            <th>Suppliers</th>


                        </tr>
                    </thead>
                    <tbody>

                        <tr>

                            <td><?php echo $data[0]; ?></td>
                            <td><?php echo $data[1]; ?></td>
                            <td><?php echo $data[2]; ?></td>
                            <td><?php echo $data[3]; ?></td>
                            <td><?php echo $data[4]; ?></td>



                        </tr>

                    </tbody>
                </table>
            </div>
        </div>


        <div class="card">
            <div class="card-header">
                <ul>
                    <li>Total Users</li>
                    <li><button><?php echo $data[5]; ?></button></li>
                </ul>

            </div>

        </div>
    </div>
</div>

<!-- end main content -->
<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/MVCFINAL/app/includes/Admin_footer.php"); ?>