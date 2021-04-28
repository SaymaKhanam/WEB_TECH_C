<?php
include("../model/db.php");
session_start(); 
$connection = new db();
$conobj=$connection->OpenCon();
$user = $_SESSION["login_user"];
$sql = "SELECT * FROM admin WHERE AUserName = '$user'";
$result = $conobj->query($sql);
if($result->num_rows == 1) {
$row = $result->fetch_assoc();
}
else{
    unset($_SESSION['login_user']);
    header("location: AdminLogin.php");
    die();
}
?>


<!DOCTYPE html>
<html>
    <head>

    <link rel="stylesheet" type="text/css" href="../css/mycss.css">
        <script src="../js/myjs.js"></script>
        <title>Home Page</title>
        
    </head>
    <body>
        <div>
            <div class="top-logo">
                <img src="../upload/boimela.png" alt="Boimela" width="70" height="70">
                <h1>Welcome to Boimela</h1>
            </div>
            <div class="sticky">
                <div class="topnav" >
                    <a href="adminDashboard.php">Home</a>
                    <a href="myaccount.php">My Account</a>
                    <a href="UserRegistration.php">Registration</a>
                    <a href="ManageSeller.php">Manage Seller</a>
                    <a href="ManageDeliveryman.php">Manage Deliveryman</a>
                    <a href="ManageBuyer.php">Manage Buyer</a>
                    <a href="BookList.php">Book List</a>
                    <a href="NewMemberRequest.php">New Member Request</a>
                    <a href="changepass.php">Change Password</a>
                    <a href="../control/logout.php">Logout</a>
                </div>
            </div>
        </div>
        <h2>Admin Profile</h2>
        <div class="card">
            <img src="../upload/sayma.jpg" alt="Sayma Khanam" style="width:100%">
            <h1><?php echo $row['AName']; ?></h1>
            <p class="title">Adminstration</p>
            <p>American International University-Bangladesh</p>
            <h2><p style= "margin: 0; background-color: black; color: white;">Contact</p></h2>
            <div style="padding: 24px; border: 2px solid black;">
                <address>
                    <a href="mailto:j<?php echo $row['AEmail']; ?>"><?php echo $row['AEmail']; ?></a><br>
                    <a href="tel:<?php echo $row['APhone']; ?>"><?php echo $row['APhone']; ?></a><br>
                    <a href="#"><i class="fa fa-linkedin"></i><?php echo $row['AAddress']; ?></a> 
                </address>
            </div>
            
        </div>

    <footer>
        <div style= "color: black; fontsize: 25px;">
            <p>BOIMELA<br>
        </div>
            <a href="mailto:info@boimela.com" >info@boimela.com</a></p>
    </footer>
    </body>
</html>