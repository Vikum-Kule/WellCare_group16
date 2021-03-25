<?php require_once ($_SERVER['DOCUMENT_ROOT']."/MVCFINAL/app/config/config.php");?>
<?php require_once($_SERVER['DOCUMENT_ROOT']."/MVCFINAL/app/includes/Admin_header.php");?>

    <!-- main content -->
    <div class="wrapper">
        <div class="row">
            <div class="col-3 col-m-6 col-sm-6">
                <div class="notification">
                    <a href="http://localhost/mvcfinal/admin/showpharmacist" title="">Pharmacist Details</a>
                </div>
            </div>
            
            <div class="col-3 col-m-6 col-sm-6">
                <div class="notification">
                  <a href="http://localhost/mvcfinal/admin/showsupplier">Supplier Details</a>
                     <p>dfdfsds</p> 
                </div>
            </div>
            <div class="col-3 col-m-6 col-sm-6">
                <div class="notification">
                  <a href="http://localhost/mvcfinal/admin/showdeliveryperson">Delivery Person Details</a>
                </div>
            </div>
             <div class="col-3 col-m-6 col-sm-6">
                <div class="notification">
                  <a href="http://localhost/mvcfinal/admin/showmanager" title="">Manager Details</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8 col-m-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            Pharmacist Details
                        </h3>
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                    <center>
                <div class="viewform">
                    <form method="post">
                        <br><br>
                        <label> Search  </label>
                        <input type="text" name="code">
                        
                        <button class="btn6" type="submit" name="view"><b>View</b></button>
                        
                       
                    </form>
                </div>          
              </center>

                    <div class="card-content">
                        <table>
                            <thead>
    <tr>
            
            <th>UserName</th>
            <th>LastName</th>
            <th>FirstName</th>
            <th>DOB</th>
            <th>Email</th>
            <th>PhoneNumber</th>
            <th>FromDate</th>
            <th>ToDate</th>
            <th>licenseNo</th>
            <th>NIC</th>
            <th>Delete</th>
            <th>Update</th>
    
            

    </tr>
</thead>
<tbody>
                <?php foreach($data['phas'] as $phas): ?>
                <tr>
                        <td><?php echo $phas->userName; ?></td>
                        <td><?php echo $phas->LastName; ?></td>
                        <td><?php echo $phas->FirstName; ?></td>
                        <td><?php echo $phas->DOB; ?></td>
                        <td><?php echo $phas->email; ?></td>
                        <td><?php echo $phas->phoneNumber; ?></td>
                        <td><?php echo $phas->fromDate; ?></td>
                        <td><?php echo $phas->toDate; ?></td>   
                        <td><?php echo $phas->licenseNo; ?></td>
                        <td><?php echo $phas->NIC; ?></td>                     

                    
                        <td><form action="<?php echo URLROOT . "/admin/deletepharmacist/" . $phas->userName ?>" method = "POST">
                            <input type="submit" name="delete" value="Delete">
                        </form></td>
                        <td><button><a href="<?php echo URLROOT . "/admin/updatepharmacist/" . $phas->userName ?>">Update</a></button></td>
                </tr>
                <?php endforeach;?>
            </tbody>


    </table>
    <div class="button">
            <button type="button"><a href="<?php echo URLROOT; ?>/admin/addpharmacist">Add</button>
    
    </div>
                    </div>
                </div>
            </div>
            

        <!-- end main content -->
    <?php require_once($_SERVER['DOCUMENT_ROOT']."/MVCFINAL/app/includes/Admin_footer.php");?>