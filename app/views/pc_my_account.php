<!DOCTYPE html>
<html>

<head>
    <title>Pharmacist</title>
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT?>public\css\header.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URLROOT?>public\css\my_account.css">
</head>

<body>
    <div class="header">
        <img src="images\logo.JPG" width="100" height="50">
        <a href="#default" class="logo">Online Pharmacy <br> Management System</a>
        <div class="header-right">
            <a href="make_order.php">Make order</a>
            <a href="view_order.php">View order</a>
            <a href="#">My Account</a>
            <button>Log out</button>
        </div>

    </div>
    <div class="left-side">
        <img src="images\profilePic.png" width="300" height="300">
    </div>

    <div class="right-side">
        <form action="">
            <table id="details">
                <tr>
                    <td> <label for="">Full name</label></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td> <label for="">NIC</label></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td> <label for="">Reg No:</label></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td> <label for="">Email</label></td>
                    <td><input type="text"></td>
                </tr>
                <tr>
                    <td> <label for="">Address</label></td>
                    <td><textarea name="Address" id="Address" cols="30" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button>Save</button></td>
                </tr>
            </table>
        </form>

    </div>
</body>

</html>