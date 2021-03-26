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
                         Delivery Details
                        </h3>
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                    <center>
               <div class="filter-post">
                <input type="text" name="filter" id="filter" placeholder="Enter Drug Name" onkeyup="searchBlog()">
                <button type="">view</button>
                   
               </div>
               </center>

                    <div class="card-content">
                        <table id="tableRecord">
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
            <th>To Date</th>
            <th>Delete</th>
            <th>Update</th>
            

    </tr>
</thead>
<tbody>
                <?php foreach($data['dils'] as $dils): ?>
                <tr>
                        <td><?php echo $dils->userName; ?></td>
                        <td><?php echo $dils->LastName; ?></td>
                        <td><?php echo $dils->FirstName; ?></td>
                        <td><?php echo $dils->NIC; ?></td>
                        <td><?php echo $dils->DOB; ?></td>
                        <td><?php echo $dils->email; ?></td>
                        <td><?php echo $dils->phoneNumber; ?></td>
                        <td><?php echo $dils->fromDate; ?></td>
                        <td><?php echo $dils->toDate; ?></td>
                        

                        <td><form action="<?php echo URLROOT . "/admin/deletedeliveryperson/" . $dils->userName ?>" method = "POST">
                            <input type="submit" name="delete" value="Delete">
                        </form></td>
                                <td><button><a href="<?php echo URLROOT . "/admin/updatedeliveryperson/" . $dils->userName ?>">Update</a></button></td>
                </tr>
                <?php endforeach;?>
            </tbody>
    </table>
    <div class="button">
        <div class="left-button">
            
        
        <ul>
           <button type="button"><a href="<?php echo URLROOT; ?>/admin/adddeliveryperson">Add</button>
           
        </ul>
        </div><!--Left-button-->
        
    </div>
                    </div>
                </div>
            </div>
            

        <!-- end main content -->
    <?php require_once($_SERVER['DOCUMENT_ROOT']."/MVCFINAL/app/includes/Admin_footer.php");?>