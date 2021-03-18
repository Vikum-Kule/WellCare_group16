<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/UploadPrescription.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
  <div class="topnav" id="myTopnav">
   
    <a href="#uploadPrescription" class="active">Upload Prescription</a>
    
    
  </div>
  
 




<div class="container">
  <img src="<?php echo URLROOT ?>/public/img/uploadprescriptions1.JPG" class="responsive"  >
  

  <div class="uploadFile">
    <form action="/action_page.php">
    <input type="file" id="myFile" name="filename">
    <input type="submit">
    </form>
  </div>

  <img src="<?php echo URLROOT ?>/public/img/uploadprescriptions2.JPG" class="responsive"  >


  
</div>
<div class="line3">
  <div class="confirmOrder">
  <a href='<?php echo URLROOT ?>/orders/makeOrder'> <button><i class="fa fa-caret-square-o-left"></i> Continue Shopping</button></a>
    
  <!-- <button><i class="fa fa-caret-square-o-left"></i> Continue Shopping</button> -->
  </div>
  <div class="newOrder">
   <button id="myBtn"><i class="fa fa-caret-square-o-left"></i> Confirm</button>
    
  </div>

  <div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" src="<?php echo URLROOT ?>/public/img/processing.png">
  <div id="caption">YOUR ORDER IS PROCESS AFTER CONFIRMED... 
    <br>CHECK YOUR EMAILS...
    <br>PAY THE AMOUNT OF ORDER TO BANK ACCOUNT NUMBER : XXXXXXXX
    <br>REPLY TO THAT EMAIL,INCLUDE BANK SLIP IMAGES OF RELEVANT PAYMENT OR SCREENSHOTS OF PAYMENT DETAILS WITH ORDER NUMBER
    <br>THANK YOU !...
    <br><div class="newOrder"><a href='<?php echo URLROOT ?>/myOrders/myorder'> <button><i class="fa fa-caret-square-o-left"></i> Confirm</button></a></div>
  </div>
</div>
  
</div>
<script>
  // Get the modal
  var modal = document.getElementById("myModal");
  var myBtn= document.getElementById("myBtn");
  // Get the image and insert it inside the modal - use its "alt" text as a caption
  var img = document.getElementById("myImg");
  var modalImg = document.getElementById("img01");
  var captionText = document.getElementById("caption");
  myBtn.onclick = function(){
    modal.style.display = "block";
    modalImg.src =myImg.src;
    captionText.innerHTML =caption.innerHTML;
  }
  
  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];
  
  // When the user clicks on <span> (x), close the modal
  span.onclick = function() { 
    modal.style.display = "none";
    
  }
  </script>
</body>
</html>
