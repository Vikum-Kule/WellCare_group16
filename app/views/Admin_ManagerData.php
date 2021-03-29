<?php require_once ($_SERVER['DOCUMENT_ROOT']."/MVCFINAL/app/config/config.php");?>
<?php require_once($_SERVER['DOCUMENT_ROOT']."/MVCFINAL/app/includes/Admin_header.php");?>
    <!-- main content -->
    <style>
    
    .card {
        width: 1200px;
    }
</style>
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
                     <p>.</p>
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
                            Manager Details
                        </h3>
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                   <!-- <center>
                <div class="viewform">
                    <form method="post">
                        <br><br>
                        <label> Search  </label>
                        <input type="text" name="code">
                        
                        <button class="btn6" type="submit" name="view"><b>View</b></button>
                        
                       
                    </form>
                </div>          
              </center>-->

                    <div class="card-content">
                        <table>
                           <thead>
    <tr>
            
            <th>User Name</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>NIC</th>
            <th>DOB</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>From Date</th>
            <th>Delete</th>
            <th>Update</th>
            

    </tr>
</thead>
<tbody>
                <?php foreach($data['mans'] as $mans): ?>
                <tr>
                        <td><?php echo $mans->userName; ?></td>
                        <td><?php echo $mans->LastName; ?></td>
                        <td><?php echo $mans->FirstName; ?></td>
                        <td><?php echo $mans->NIC; ?></td>
                        <td><?php echo $mans->DOB; ?></td>
                        <td><?php echo $mans->email; ?></td>
                        <td><?php echo $mans->phoneNumber; ?></td>
                        <td><?php echo $mans->fromDate; ?></td>
    
                        

                        <td><form action="<?php echo URLROOT . "/admin/deletemanager/" . $mans->userName ?>" method = "POST">
                            <input type="submit" name="delete" value="Delete">
                        </form></td>
                        <td><button><a href="<?php echo URLROOT . "/admin/updatemanager/" . $mans->userName ?>">Update</a></button></td>
                </tr>
                <?php endforeach;?>
            </tbody>
    </table>
    <div class="button">
        <div class="left-button">
            
        
        <ul>
            <button type="button"><a href="<?php echo URLROOT; ?>/admin/addmanager">Add</button>
    
          
           
        </ul>
        </div><!--Left-button-->
        
    </div>
                    </div>
                </div>
            </div>
           
        <!-- end main content -->
    <?php require_once($_SERVER['DOCUMENT_ROOT']."/MVCFINAL/app/includes/Admin_footer.php");?>