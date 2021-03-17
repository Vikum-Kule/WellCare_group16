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
                            Supplier Details
                        </h3>
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                    <div class="card-content">
                        <table>
                            <thead>
        
    
    <tr>
        
            <th>SupplierId</th>
            <th>Company Name</th>
            <th>Company Reg No</th>
            <th>Phone Number</th>
            <th>Company Address</th>
            <th>Delete</th> 
            <th>Update</th>
            

    </tr>
    </thead>
    <tbody>
                <?php foreach($data['sups'] as $sups): ?>
                <tr>
                        <td><?php echo $sups->supplyId; ?></td>
                        <td><?php echo $sups->companyName; ?></td>
                        <td><?php echo $sups->companyRegNo; ?></td>
                        <td><?php echo $sups->phoneNo; ?></td>
                        <td><?php echo $sups->companyAddress; ?></td>
                        <td><form action="<?php echo URLROOT . "/admin/deletesupply/" . $sups->supplyId ?>" method = "POST">
                            <input type="submit" name="delete" value="Delete">
                        </form></td>
                        <td><button><a href="<?php echo URLROOT . "/admin/updatesupply/" . $sups->supplyId ?>">Update</a></button></td>
                </tr>
                <?php endforeach;?>
            </tbody>

    </table>
    <div class="button">
            <button type="button"><a href="<?php echo URLROOT; ?>/admin/addsupplier">Add</button>
    </div>
                    </div>
                </div>
          

        <!-- end main content -->
    <?php require_once($_SERVER['DOCUMENT_ROOT']."/MVCFINAL/app/includes/Admin_footer.php");?>