<!DOCTYPE html>
<html>
<head>
 
  <title>Admin Registration Details</title>
 
  
  
</head>
<style>
  * { margin: 0; padding: 0; box-sizing: border-box;}

body { font: 16px;  }

.wrapper{ 

background-image: url("https://thumbor.forbes.com/thumbor/fit-in/1200x0/filters%3Aformat%28jpg%29/https%3A%2F%2Fspecials-images.forbesimg.com%2Fimageserve%2F5dbb4182d85e3000078fddae%2F0x0.jpg");
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
  text-align: right;
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

.container input[type=text],input[type=password] {
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
      <img src="https://st2.depositphotos.com/2627021/11890/i/950/depositphotos_118907380-stock-photo-doctor-writing-prescription-clinic-blurred.jpg" alt="Girl in a jacket" width="100" height="50">
    </header>
  
  <div class="wrapper">
   
    <nav>
      <ul>
       
          <li><div class="dropdown">
            
                 <button class="dropbtn">Login</button>
                    <div class="dropdown-content">
                     <a href="http://localhost/mvcfinal/admin_Users/register">Registration</a>
                     <a href="http://localhost/mvcfinal/admin_Users/login">Login</a>
                    <a href="http://localhost/mvcfinal/admin_Pages/home">Home</a>
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
  

<form action="<?php echo URLROOT; ?>/admin_Users/register" method='post'>
  <div class="container">
   <h1>Admin Registration Form</h1>
    <hr>

    <label for="userName"><b>UserName</b></label>
    <input type="text" placeholder="Enter UserName" name="userName" id="userName" required>
    <span class="invalidFeedback">
                <?php echo $data['usernameError']; ?>
            </span>

     <label for="name"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="LastName" id="LastName" required>
    
    <label for="name"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="FirstName" id="FirstName" required>
    

    <label for="NIC"><b>NIC</b></label>
    <input type="text" placeholder="Enter Your NIC Number" name="NIC" id="NIC" required>

  <label for="date"><b>DOB</b></label>
    <input type="date" placeholder="Enter your birthday" name="DOB" id="DOB" required>

     <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Your Email" name="email" id="email" required>
    <span class="invalidFeedback">
                <?php echo $data['emailError']; ?>
            </span>
     <label for="number"><b>Contact Number</b></label>
    <input type="number" placeholder="Enter your contact number" name="phoneNumber" id="phoneNumber" required>

    <label for="password"><b>password</b></label>
    <input type="password" placeholder="Enter Password" name="password" id="password" required>
     <span class="invalidFeedback">
                <?php echo $data['passwordError']; ?>
            </span>


    <label for="Date"><b>From Date</b></label>
    <input type="Date" placeholder="Enter The Starting Date" name="fromDate" id="fromDate" required>
    
     <label for="Date"><b>To Date</b></label>
    <input type="Date" placeholder="Enter The Starting Date" name="toDate" id="toDate" required>

    <button type="submit" class="registerbtn">Add</button>
      
  </div>
  
  
</form>


</div>

</div>
</center>
      
</body>
</html>