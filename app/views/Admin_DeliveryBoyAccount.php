<?php require_once ($_SERVER['DOCUMENT_ROOT']."/MVCFINAL/app/config/config.php");?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin template</title>

    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">


    <!-- Import lib -->
    <!-- End import lib -->
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT."/public/css/Admin_style.css";?>">
</head>

<body class="overlay-scrollbar">
    <!-- navbar -->
    <div class="navbar">
        <!-- nav left -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <img class="logo" src="<?php echo URLROOT."/public/img/logo.JPG";?>" alt="">
            </li>
            <li class="nav-item">
                <h4>Pharmacy Management <br>System</h4>
            </li>
        </ul>
        <!-- end nav left -->
        <!-- form -->
        <form class="navbar-search">
            <input type="text" name="Search" class="navbar-search-input" placeholder="Search for...">
            <i class="fas fa-search"></i>
        </form>
        <!-- end form -->
        <!-- nav right -->
        <ul class="navbar-nav nav-right">
            <li class="nav-item mode">
                <h6>user Name</h6>
            </li>
            <li class="nav-item avt-wrapper">
                <div class="avt dropdown">
                    <img src="<?php echo URLROOT."/public/img/user.png";?>" alt="User image" class="dropdown-toggle" data-toggle="user-menu">
                    <ul id="user-menu" class="dropdown-menu">
                        <li class="dropdown-menu-item">
                            <a class="dropdown-menu-link">
                                <div>
                                    <i class="fas fa-user-tie"></i>
                                </div>
                                <span>Profile</span>
                            </a>
                        </li>
                        <li class="dropdown-menu-item">
                            <a href="#" class="dropdown-menu-link">
                                <div>
                                    <i class="fas fa-sign-out-alt"></i>
                                </div>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
        <!-- end nav right -->
    </div>
    <!-- end navbar -->
    <?php require_once($_SERVER['DOCUMENT_ROOT']."/MVCFINAL/app/includes/Delivery_sidebar.php");?>

    <div id="content">
    <img class="left" id="myBtn" onclick="topFunction()" src="<?php echo URLROOT."/public/img/back-to.png";?>" alt="">
    
<link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/Admin_style.css">

    <!-- main content -->
    <div class="wrapper">
        <div class="row">
            <div class="col-3 col-m-6 col-sm-6">
                <div class="notification">
                    <h3>100+</h3>
                    <p>To do</p>
                </div>
            </div>
            <div class="col-3 col-m-6 col-sm-6">
                <div class="notification">
                    <h3>100+</h3>
                    <p>In progress</p>
                </div>
            </div>
            <div class="col-3 col-m-6 col-sm-6">
                <div class="notification">
                    <h3>100+</h3>
                    <p>Completed</p>
                </div>
            </div>
            <div class="col-3 col-m-6 col-sm-6">
                <div class="notification">
                    <h3>100+</h3>
                    <p>Issues</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8 col-m-12 col-sm-12">
                <div class="card">
                    <div class="accountbody">
        <div class="accountform">
      <form method = "get" action ="Admin_Drug_Stock_Page.html" >
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
  </div>
  </div>

            </div>
            <div class="col-4 col-m-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <img src="https://img.freepik.com/free-vector/bicycle-delivery_52683-8056.jpg?size=338&ext=jpg" alt="Italian Trulli " width="200" height="200">
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                    <div class="card-content">

                    </div>
                </div>
            </div>
        </div>

        <!-- end main content -->
    <?php require_once($_SERVER['DOCUMENT_ROOT']."/MVCFINAL/app/includes/Admin_footer.php");?>