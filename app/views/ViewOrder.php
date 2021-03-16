<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/ViewOrder.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>


<body>
  <div class="topnav" id="myTopnav">
   
    <a href="#viewOrder" class="active">Order Number:1</a>
    
    
  </div>
  
<div class="smallContainer cartPage">
  <table id="customers">
    <tr>
      <th>ITEM</th>
      <th>QUANTITY</th>
      <th>PRICE</th>
      
    </tr>
    <tr>
      <td><div class="cartInfo"><img src="<?php echo URLROOT ?>/public/img/medicines/med4.jpg"><div><p>panadol</p><small>rs10</small><a href="">REMOVE</a></div></div></td>
     
      <td><input type="number" value ="1" disabled></td>
      <td>10</td>
      
    </tr>
    <tr>
      <td><div class="cartInfo"><img src="<?php echo URLROOT ?>/public/img/medicines/med10.jpg"><div><p>chandanalepa</p><small>rs100</small></div></div></td>
     
      <td><input type="number" value ="1" disabled></td>
      <td>100</td>
      
    </tr>
    
    
  </table>
  <div class="totalPrice">
    <table>
      <tr>
        <td>SUBTOTAL</td>
        <td>RS110</td>
      </tr>
      <tr>
        <td>DELIVERY FEE</td>
        <td>RS200</td>
      </tr>
      <tr>
        <td>TOTAL</td>
        <td>RS310</td>
      </tr>
    </table>

  </div>
  
</div>

<div class="line3">
  <div class="confirmOrder">
   
    <a href="<?php echo URLROOT ?>/myOrders/myorder"> <button><i class="fa fa-caret-square-o-left"></i> Back</button></a>
  
  </div>       
  
</div>

</body>
</html>
