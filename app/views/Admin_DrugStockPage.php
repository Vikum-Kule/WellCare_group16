<?php require_once ($_SERVER['DOCUMENT_ROOT']."/MVCFINAL/app/config/config.php");?>
<?php require_once($_SERVER['DOCUMENT_ROOT']."/MVCFINAL/app/includes/Admin_header.php");?>
<style>
   
    .card-header {
        width: 1200px;
    }
    table {
        width: 1000px;
    }
    table th {
        width:100%;
    }
   
</style>
    <!-- main content -->
    <div class="wrapper">
        <div class="row">
            <div class="col-3 col-m-6 col-sm-6">
                <div class="notification">
                    <!-- <h3>100+</h3>
                    <p>To do</p> -->
                </div>
            </div>
            <div class="col-3 col-m-6 col-sm-6">
                <div class="notification">
                       <!-- <h3>100+</h3>
                    <p>In progress</p> -->
                </div>
            </div>
            <div class="col-3 col-m-6 col-sm-6">
                <div class="notification">
                    <!-- <h3>100+</h3>
                    <p>Completed</p> -->
                </div>
            </div>
            <div class="col-3 col-m-6 col-sm-6">
                <div class="notification">
                    <!-- <h3>100+</h3>
                    <p>Issues</p> -->
                </div>
            </div>
        </div>
      
                <div class="card">
                    
                
                    <div class="card-header">
                        <h3>
                           Medicine Details
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
            
          
            <th>Generic Name</th>
            <th>Brand</th>
            <th>Description</th>
            <th>QTY</th>
            <th>Price</th>
            <th>DoseStatus</th>
            <th>Dose</th>
            <th>Temperature</th>
            <th>SubCategory</th>
            <th>imageLocation</th>
            <th>Delete</th>
            <th>Update</th>
            

    </tr> 
    </thead>
   <tbody>
                <?php foreach($data['drugs'] as $drug): ?>
                <tr>
                        
                        <td><?php echo $drug->name; ?></td>
                        <td><?php echo $drug->brand; ?></td>
                        <td><?php echo $drug->description; ?></td>
                        <td><?php echo $drug->QTY; ?></td>
                        <td><?php echo $drug->price; ?></td>
                        <td><?php echo $drug->doseStatus; ?></td>
                        <td><?php echo $drug->dose; ?></td> 
                        <td><?php echo $drug->temperature; ?></td>
                        <td><?php echo $drug->subCategory; ?></td>
                        <td><?php echo $drug->imageLocation; ?></td>
                       
                        <td><form action="<?php echo URLROOT . "/admin/deletedrug/" . $drug->medicineId ?>" method = "POST">
                            <input type="submit" name="delete" value="Delete">
                        </form></td>
                        <td><button><a href="<?php echo URLROOT . "/admin/updatedrugs/" . $drug->medicineId ?>">Update</a></button></td>
                </tr>
                <?php endforeach;?>
            </tbody>
    </table>
    <div class="button">
            <button type="button"><a href="<?php echo URLROOT; ?>/admin/adddrugs">Add</button>
    </div>
    </div>
                    </div>
            

        <!-- end main content -->
    <?php require_once($_SERVER['DOCUMENT_ROOT']."/MVCFINAL/app/includes/Admin_footer.php");?>