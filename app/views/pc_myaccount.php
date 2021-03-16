<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>My Account</title>
  <link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/public/css/header.css">
  
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

body { font: 16px Arial, "Helvetica Neue", Helvetica, sans-serif; }



.wrapper{ width: 1200px; margin: 0 auto; display: flex; flex-wrap: wrap; background-image: url("https://static.vecteezy.com/system/resources/previews/001/110/622/non_2x/mobile-delivery-man-on-scooter-with-city-background-vector.jpg")}

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
 @media screen and (max-width:800px){
  .wrapper {
    width: 100%;
  }
  .mobnav {
    display: block;
  }
  .accountform form{
    width: 100%;
  }
  nav ul {
    display: none;
  }
  .photo { width: 100%;
    margin-left: 20px;
   }
   .Account { width: 100%;
    margin-left: 50px;
    }
    .site-search {
      width: 100%;
    }
    .button1 {
      width: 100%;
    }
     .button2 {
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
.photo{
  
 width: 25px;
  float: left;
  border: 0;
  margin-right: 200px;
}


.accountform{
  padding-top: 50px;
  padding-right: 200px;
  text-align: center;
  height: 600px;
  
}
.accountbody {
  background-color:#7E8AD5 ;
}

.accountform input[type=text]{
  width: 300px;
  height: 50px;
  background-color: #BCBFD3;
  border: none;
  padding: 10px ;
}

#firstq{
  width: 300px;
  height: 50px;
}

#secondq{
  width: 300px;
  height: 50px;
}

.buttonsaccount button{
  float: right;
  border: 1px solid blue;
  background: linear-gradient(#003087,#005EBB,#003087);
  text-align: center;
  color: white;
  padding: 10px 10px;
  font-size: 15px;
  margin: 20px 10px 0 10px
}

.buttonsaccount button:hover{
  color: black;
  cursor: pointer;
}
.accountbody:hover {
  opacity: 95%;
}

.photoaccount{
  padding-top: 80px;
  text-align: center;
}
</style>
<body>
  <div class="wrapper">
  <div class="header">
  <img src="<?php echo URLROOT ?>/public/img/logo.JPG" width="100" height="50">
    <a href="#default" class="logo">Online Pharmacy <br> Management System</a>
    <div class="header-right">
      <form action="<?php echo URLROOT ?>/users/btn_logout" method="POST">
      <a href="http://localhost/mvc/view_drug/show_medicine">Make order</a>
      <a href="http://localhost/mvc/view_drug/show_orders">View order</a>
      <a href="http://localhost/mvc/view_drug/show_confirm_orders">Confirmed Orders</a>
      <a href="http://localhost/mvc/pages/my_account.php">My Account</a>
      
      <button type="submit" id="logout" name="logout">Log out</button>
      </form>
    </div>

  </div>
     </div>

     
      
  <div class="accountbody">
    <div class="photo">
      <div class="photoaccount">
      <img src="https://i.pinimg.com/originals/d1/1a/45/d11a452f5ce6ab534e083cdc11e8035e.png" alt="Italian Trulli " width="200" height="200">
      </div><!--photoaccount-->
    </div><!--photo-->
    <div class="accountform">
      <form method = "get" action ="Drug_Stock_Page.html" >
          <div class="tableaccount">
          <table>
            <colgroup>
              <col id="firstq">
              <col id="secondq">
            </colgroup>
            <tbody>
            <tr>
              <td><label for="name">Name</label></td>
              <td><input type="text" name="name"></td>
            </tr>
            <tr>
              <td><label for="nic">NIC</label></td>
              <td><input type="text" name="nic"></td>
            </tr>
            <tr>
              <td><label for="address">Address</label></td>
              <td><input type="text" name="address"></td>
            </tr>
            <tr>
              <td><label for="telephone_number">Telephone Number</label></td>
              <td><input type="text" name="telephone_number"></td>
            </tr>
            <tr>
              <td><label for="gender">Gender</label></td>
              <td><input type="text" name="gender"></td>
            </tr>
            </tbody>
          </table>
          </div><!--tableaccount-->
        </form>
        <div class="buttonsaccount">
          <button type="button">Update</button>
          <button type="button">Save</button>
        </div><!--buttonsaccount-->
    </div><!--accountform-->
  </div><!--accountbody-->
      </div>
</body>
</html>