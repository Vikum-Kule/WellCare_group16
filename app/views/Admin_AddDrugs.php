<!DOCTYPE html>
<html>
<head>
 
  <title>Add Drugs</title>
 
  
  
</head>
<style>
  * { margin: 0; padding: 0; box-sizing: border-box;}

body { font: 16px;  }

.wrapper{ 

background-image: url("https://c1.wallpaperflare.com/preview/990/593/237/apothecary-pharmacy-chemist-mortar-and-pestle.jpg");
 height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  width: 1200px; margin: 0 auto; display: flex; flex-wrap: wrap}

header {
  margin: 0 auto;
  width: 1200px;
  background: linear-gradient(#7FB5F1,white,#7FB5F1);

}
.top-bar{
  width: 100%;
  background: #005EBB;
}

.top-bar-links{
  padding: 15px;
  float: right;
}

.top-bar-links ul{
  list-style: none;
}

.top-bar-links ul li{
  margin-top: 10px;
  display: inline-block;
}

.top-bar-links ul li a{

  color: white;
}

.top-bar ul li a:hover{
  color: black;
}
.site-search{
  padding: 10px 10px 10px 10px;
  margin: 15px;
  float: right;
  background: #182666 ;
  border-radius: 10px;
}

.site-search input{
  border: 0;
  float: left;
  background-color: #ABB1CC;
}

.site-search button{
  width: 18px;
  height: 18px;
  background: url(img/icons/search.png);
  border: 0;
  float: right;
  color: blue;
} 
a {
  text-decoration: none;
  font-variant: bold;
}
nav {
  width: 100%;
  background: blue;
  background: linear-gradient(#003087,#005EBB,#003087);
  text-align: center;
}

nav ul{
  list-style: none;
}

nav ul li{
  display: inline;
}
nav ul li a{
  color: white;
  text-transform: uppercase;
  margin: 25px 10px 25px 10px;
  display: inline-block;
}

nav ul li a:hover{
  color: black;
}

 .site-search {
  padding: 0px 10px;
  margin-top: 10px;
  float: right;
  border-radius: 10px;
height: 40px;
margin-bottom: 20px;
padding: 10px 10px 10px 10px;
  margin: 15px;
  float: right;
  background: #3498DB;
  border-radius: 10px;
}
.site-search input{
  border: 0;
  float: left;
}
.site-search button {
 width: 18px;
  height: 18px;
  background: url(img/icons/search.png);
  border: 0;
  float: right;
  color: blue;
}
.site-search button:hover {
  background: #1E2B81;
}

.container input[type=text],input[type=password] ,input[type=price] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
.logform:hover {
  opacity: 95%;
}
.container button {
  background-color:#044D6F  ;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

.container button:hover {
  opacity: 0.95;
}
.updateform{

  width: 70%;
background:#7F98AD ;
}
.container input[type=text], input[type=number] ,input[type=email] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
.container input[type=Date] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}


.container input[type=text]:focus, input[type=number]:focus , input[type=email]:focus {
  background-color: #ddd;
  outline: none;
}
.container:hover {
  opacity: 90%;
}

/* Overwrite default styles of hr */

/* Set a style for the submit button */
.container button {
  background-color: #367BA8;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
  opacity: 0.9;
}
.container button:hover {
  background:  #1E2B81;
    }
.container h1 {
  margin-bottom: 20px;
}


.updateform h1{
  font-variant: bold;
  text-align: center;
   background: -webkit-linear-gradient(black,#07153D,#667EBF,#07153D,black);
  padding: 50px;
  color: white;
  border-bottom: 5px solid #709699 ;
}
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #12727A ;
  margin-bottom: 50px;
}



img.avatar {
  width: 40%;
  border-radius: 50%;
  text-align: center;
}

.container {
  padding: 16px;

}
.container b {
  color: white;
}
.container input {

  background-color: #BFBFC3 ;
}

span.psw {
  float: right;
  padding-top: 16px;
}
.dropbtn {
  background: linear-gradient(#236178,#5793A9,#35B0D8,#5793A9,#236178);
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #B7CFDE ;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color:#72A7C6 ;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: white;}


</style>
<body>
   <header>
      <img src="https://st2.depositphotos.com/2627021/11890/i/950/depositphotos_118907380-stock-photo-doctor-writing-prescription-clinic-blurred.jpg" alt="Girl" width="100" height="50">
    </header>
  
  <div class="wrapper">
   
    <div class="top-bar clearfix" >
      <div class="site-search">
        <form method = "get" action ="Drug_Stock_Page.html" >
          <input type="search" name="search-box">
          <button type="submit"></button>
        </form>
      </div><!--site-search-->
      <div class="top-bar-links">
        <ul>
         <li><a href="http://localhost/mvc/Admin_Pages/home">Log Out</a></li>
          
        </ul>
      </div><!--top-bar-links-->
    </div><!--top-bar-->
    <nav>
      <ul>
        <li><a href="http://localhost/mvcfinal/admin/showdrugs">Medicines</a></li>
        <li><a href="http://localhost/mvcfinal/admin/showpharmacist">Pharmacist Details</a></li>
        <li><a href="http://localhost/mvcfinal/admin/showdeliveryperson">Delivery Person Details</a></li>
        <li><a href="http://localhost/mvcfinal/admin_Pages/customerdetails">Customer Details</a></li>
          <li><a href="http://localhost/mvcfinal/admin/showsupplier">Supplier Details</a></li>
          <li><a href="http://localhost/mvcfinal/admin/showmanager">Manager Details</a></li>
          <li><div class="dropdown">
            
                 <button class="dropbtn">Registration</button>
                    <div class="dropdown-content">
                    <a href="http://localhost/mvcfinal/admin/addpharmacist">Pharmacist</a>
                     <a href="http://localhost/mvcfinal/admin/addmanager">Manager</a>
                       <a href="http://localhost/mvcfinal/admin/adddeliveryperson">Delivery Boy</a>
                      <a href="http://localhost/mvcfinal/admin/addsupplier">Supplier</a>


                    </div>
                </div>
            </li>
      </ul>

    </nav>
    
      <div class="site-search">
      <form  method="get" action="SellerReg.html">
        <input type="text" placeholder="search">
        <button type="submit"></button>
      </form>
     </div>

   
 
  
<div class ="updateform">
  


<form action="<?php echo URLROOT; ?>/admin/adddrugs" method="POST">
 
<div class="container">
   <h1>Add Drug Details</h1>
    <hr>
    <label for="medicineId"><b>medicineId</b></label>
    <input type="text" placeholder="Enter medicineId" name="medicineId" id="medicineId">
    <label for="name"><b>Generic Name</b></label>
    <input type="text" placeholder="Enter Generic Name" name="name" id="name">
    <label for="name"><b>Brand Name</b></label>
    <input type="text" placeholder="Enter Brand Name" name="brand" id="brand">
    <label for="description"><b>Description</b></label>
    <input type="text" placeholder="Enter Description" name="description" id="description">
    <label for="QTY"><b>QTY</b></label>
    <input type="text" placeholder="Enter QTY" name="QTY" id="QTY">
    <label for="price"><b>Price</b></label>
    <input type="price" placeholder="Enter price" name="price" id="price">
    <label for="Date"><b>Expiration Date</b></label>
    <input type="Date" placeholder="Enter Expiration Date" name="EXP" id="EXP">
    <label for="Date"><b>Manufacture Date</b></label>
    <input type="Date" placeholder="Enter Manufacture Date" name="MFD" id="MFD">
    <label for="Dose"><b>DoseStatus</b></label>
    <input type="text" placeholder="Enter Dose" name="doseStatus" id="doseStatus">
    <label for="Dose"><b>Dose</b></label>
    <input type="text" placeholder="Enter Dose" name="dose" id="dose">
    <label for="temperature"><b>Tempurature</b></label>
    <input type="text" placeholder="Enter Temperature" name="temperature" id="temperature">
    <label for="subCategory"><b>subCategory</b></label>
    <input type="text" placeholder="Enter SubCategory" name="subCategory" id="subCategory">
  
    
    
   

   

    <button type="submit" name="submit" class="registerbtn">ADD</button>
      
  </div>
  
  
</form>

</div>

</div>
</center>
      
</body>
</html>