<?php require_once ($_SERVER['DOCUMENT_ROOT']."/MVCFINAL/app/config/config.php");?>
<?php require_once($_SERVER['DOCUMENT_ROOT']."/MVCFINAL/app/includes/Admin_header.php");?>
<link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/Admin_style.css">
<style>
    .card {
        width : 1200px;
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
        <div class="row">
            <div class="col-8 col-m-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            User Details
                        </h3>
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                  <!--  <center>
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
           
            <th>UserName</th>
             <th>Status</th>
            
    
            

    </tr>
</thead>
<tbody>
              
                <?php foreach($data['uses'] as $uses): ?>
                <tr>
                        
                        <td><?php echo $uses->userName; ?></td>
                        <td><?php echo $uses->Status; ?></td>
                        
                      
                
                </tr>
                <?php endforeach;?>
            </tbody>


    </table>
                           
                    </div>
                </div>
            </div>
          
                   
               
        </div>

        <!-- end main content -->
    <?php require_once($_SERVER['DOCUMENT_ROOT']."/MVCFINAL/app/includes/Admin_footer.php");?>