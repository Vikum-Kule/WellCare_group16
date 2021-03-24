<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/Complaint.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script>
    var URLROOT = "<?php echo URLROOT ?>"
  </script>
  <script src="<?php echo URLROOT ?>/public/js/jquery-3.5.1.min.js"></script>
  <script src="<?php echo URLROOT ?>/public/js/topnavigation.js"></script>
  <script src="<?php echo URLROOT ?>/public/js/complaint.js"></script>
</head>

<body>
  <div class="topnav" id="myTopnav">
   
    <a href="#complaint" class="active">Complaint</a>
    
    
  </div>
  
 

<!-- <div class="regForm"><h2 >Registration</h2></div> -->


<div class="container">
  
    
    <div class="row">
      <div class="col-25">
        <label for="orderNumber">Order Number</label>
      </div>
      <div class="col-75">
        <input type="text" id="OrderNumber" name="OrderNumber" placeholder="Order Number.." value=" <?php if(isset( $data['complaintOrderId'])){ echo $data['complaintOrderId']; }?>">
      </div>
    </div>
    
  
    

    <div class="row">
      <div class="col-25">
        <label for="complaint">Complaint</label>
      </div>
      <div class="col-75">
        <textarea id="complaint" name="complaint" placeholder="Enter Your Complaint.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <button  onclick="sendComplaint()">Submit</button>
    </div>
    <div id="successMessage"></div>
  
</div>
<div class="smallContainer cartPage">
  <table id="customers">
    <tr>
      
      <th>ORDER NUMBER</th>
      <th>DATE</th>
      <th>COMPLAINT</th>
      
    </tr>
    
  </table>
  
  
</div>

<div class="line3">
  <div class="Cancel">
  <a href="<?php echo URLROOT ?>/myOrders/myorder"> <button>Cancel</button></a>
    
  </div>
  
</div>

</body>
</html>
