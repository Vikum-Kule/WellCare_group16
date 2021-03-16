<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/Complaint.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
  <div class="topnav" id="myTopnav">
   
    <a href="#complaint" class="active">Complaint</a>
    
    
  </div>
  
 

<!-- <div class="regForm"><h2 >Registration</h2></div> -->


<div class="container">
  <form action="/action_page.php">
    
    <div class="row">
      <div class="col-25">
        <label for="orderNumber">Order Number</label>
      </div>
      <div class="col-75">
        <input type="text" id="Order Number" name="Order Number" placeholder="Order Number..">
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
      <input type="submit" value="Send">
    </div>
  </form>
</div>
<div class="smallContainer cartPage">
  <table id="customers">
    <tr>
      
      <th>ORDER NUMBER</th>
      <th>DATE</th>
      <th>COMPLAINT</th>
      
    </tr>
    <tr>
      
      <td>01 </td>
     
      <td>10/03/2020</td>
      
      <td>COMPLAINT 1</td>
      
    </tr>

    <tr>
      
      <td >02 </td>
     
      <td>11/03/2020</td>
      
      <td>COMPLAINT 2</td>
    </tr>

    <tr>
     
      <td>03 </td>
     
      <td>12/03/2020</td>
      <td>COMPLAINT 3</td>
      
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
