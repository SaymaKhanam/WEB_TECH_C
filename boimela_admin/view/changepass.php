<?php
include("../model/db.php");
session_start(); 
$connection = new db();
$conobj=$connection->OpenCon();
$user = $_SESSION["login_user"];
$sql = "SELECT * FROM admin WHERE AUserName = '$user'";
$result = $conobj->query($sql);
if($result->num_rows == 1) {
$user = $result->fetch_assoc();
}
else{
    header("location: AdminLogin.php");
    die();
}
?>


<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/mycss.css">
        <script src="../js/myjs.js"></script>
        <title>Change Password</title>
        <style>
            td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            }
            tr:nth-child(even) {
            background-color: #dddddd;
            }
        </style>
    </head>
    <body>
        <div>
            <div class="top-logo">
                <img src="../upload/boimela.png" alt="Boimela" width="70" height="70">
                <h1>Welcome to Boimela</h1>
            </div>
            <div class="sticky">
                <div class="topnav">
                
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

    <div class="regForm">    
        <div>


            <label for="password">Password: </label>
            <input type="password" name="password" id="password" placeholder="Enter Password" >
            <span style="color: red" id="validatepassword">Password is required</span>
            <br>
            <br>

            <label for="c_password">Confirm Password: </label>
            <input type="password" name="c_password" id="c-password" placeholder="Confirm Your Password" >
            <span style="color: red" id="validatecpassword">Comfirm Password is required</span>

            <br>
            <div style= "text-align: center";>
                <input class="btn-design" name="button" type="submit" value="Submit" id="submit">
            </div>
        </div> 
    </div>
    <footer>
        <div style= "color: black; fontsize: 25px;">
            <p>BOIMELA<br>
        </div>
            <a href="mailto:info@boimela.com" >info@boimela.com</a></p>
    </footer>

    <script src="../js/changepass.js"></script>

    </body>
</html>