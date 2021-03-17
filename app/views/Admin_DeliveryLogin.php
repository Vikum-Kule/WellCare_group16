<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Deliver Boy Login</title>
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script> 
          $(document).ready(function(){
            $('.mobnav h3').click(function(){
               $('.mobnav ul').slideToggle();
           });
          });
  </script>
</head>
<style>
  * { margin: 0; padding: 0; box-sizing: border-box;}

body { font: 16px Arial, "Helvetica Neue", Helvetica, sans-serif;  }

.wrapper{ 

background-image: url("https://chicagohealthonline.com/wp-content/uploads/2020/03/AdobeStock_274131656-1170x700.png");
  width: 1200px; margin: 0 auto; display: flex; flex-wrap: wrap }

header { width: 1200px;
  background: linear-gradient(#7FB5F1,white,#7FB5F1);
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
 .mobnav ul li { 
  width : 100px; 
  display: block;
  }
  .mobnav h3 {
    padding: 15px;
    background: #5F93CB ;
  }
  .mobnav {
    display: none;
    width: 100px;
  }
  .mobnav ul li a {
  width: 100%;
  padding: 15px;
  border-bottom: 1px solid #3B618B ;
  }

  @media screen and (max-width:500px){
  .wrapper {
    width: 100%;
  }
  .mobnav {
    display: block;
  }
  nav ul {
    display: none;
  }
 
    .site-search {
      width: 100%;
    }

     span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
  .login {

    margin-left: 0px;
    width: 100%;
  }
 .logform {
  margin-left: 0px;
  width: 100%;
 }
  
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

.container input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
.logform:hover {
  opacity: 80%;
}
.container button {
  background-color: #0C1F4D ;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

.container button:hover {
  opacity: 0.8;
}
.logform{

  
background:#367FAD;
}

.logform h1{
  font-variant: bold;
  text-align: center;
  padding: 50px;
  border-bottom: 5px solid #709699 ;
}
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #12727A ;
  margin-bottom: 50px;
}

.imgcontainer {
 
  text-align: center;
  width: 400px;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
  text-align: center;
}

.container {
  padding: 16px;
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
  
  <div class="wrapper">
   <header>
      <img src="https://st2.depositphotos.com/2627021/11890/i/950/depositphotos_118907380-stock-photo-doctor-writing-prescription-clinic-blurred.jpg" alt="Girl in a jacket" width="100" height="50">
    </header>
    <nav>
      <ul>
       
          <li><div class="dropdown">
            
                 <button class="dropbtn">Registration</button>
                    <div class="dropdown-content">
                      <a href="http://localhost/mvc/admin_Pages/deliveryboyreg">Registration</a>
                     <a href="http://localhost/mvc/admin_Pages/logindeliveryboy">Login</a>
                     <a href="http://localhost/mvc/admin_Pages/home">Home</a>
                    </div>
                </div>
            </li>
      </ul>
       <div class="mobnav">
        <h3>Menu</h3>
        <ul>
      
        <li><a href="#">MyAccount</a></li>
        <li><a href="#">OrderList</a></li>
     <li><a href="http://localhost/mvc/admin_Pages/home">Log Out</a></li>
        
      </ul> 

    </nav>
    
      <div class="site-search">
      <form  method="get" action="SellerReg.html">
        <input type="text" placeholder="search">
        <button type="submit"></button>
      </form>
     </div>

   
 
  
<div class ="logform">
  

<h1>Login Form</h1>

<form action="/action_page.php" method="post">
  <div class="imgcontainer">
    <img src="https://cdn5.vectorstock.com/i/thumb-large/49/69/delivery-men-or-courier-in-protective-medical-vector-31284969.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <!--<button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>-->
    <button type="submit" class="registerbtn"><a href="http://localhost/mvc/admin_Pages/myaccount">Login</button>
  </div>

  <div class="container2">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</div>

</div>
</center>
      
</body>
</html>