<!DOCTYPE html>
<html>

<head>
    <title>Admin template</title>

    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">


    <!-- Import lib -->
    <!-- End import lib -->
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT."/public/css/Man_style.css";?>">
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
                            <a href="http://localhost/mvcfinal/Man_pages/myaccountmanagerview" class="dropdown-menu-link">
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
    <?php require_once($_SERVER['DOCUMENT_ROOT']."/mvcfinal/app/includes/Man_sidebar.php");?>

    <div id="content">
    