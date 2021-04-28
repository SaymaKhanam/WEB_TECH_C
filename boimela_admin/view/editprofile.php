<?php
session_start();
include('../control/updateeditprofile.php');
 
$dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "boimela";
        $conobj = new mysqli($dbhost, $dbuser, $dbpass,$db);
$user = $_SESSION["login_user"];
$sql = "SELECT * FROM admin WHERE AUserName = '$user'";
$result = $conobj->query($sql);
if($result->num_rows == 1) {
$row = $result->fetch_assoc();
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
        <title>Edit Profile</title>
        
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
        <h2>Edit Profile</h2>
        <div class="card">
            <img src="../upload/sayma.jpg" alt="Sayma Khanam" style="width:100%">
                <div>
                    <div style="text-align: left; margin-left: 5px; color: blue">
                        <p>Username: <input style=" border: 1px solid black; width:255px;" type="text" id="username" name="username" value="<?php echo $row['AUserName']; ?>"> </p>
                        <span style="color: red" id="validateusername"></span>
                        <p>Name: <input style=" border: 1px solid black;width:255px;" type="text" id="name" name="name" value="<?php echo $row['AName']; ?>"> </p>
                        <span style="color: red" id="validatename"></span>
                        <p>Email: <input style="border: 1px solid black; width:255px;" type="text" id="email" name="email" value="<?php echo $row['AEmail']; ?>"> </p>
                        <span style="color: red" id="validateemail"></span>
                        <p>Phone Number: <input style="border: 1px solid black; width:255px;" type="text" id="phone" name= "phone" value="<?php echo $row['APhone']; ?>"> </p>
                        <span style="color: red" id="validatephone"></span>
                        <p>Address: <input style=" border: 1px solid black;width:255px;" type="text" name= "address" id="address" value="<?php echo $row['AAddress']; ?>"> </p>
                    </div>
                
      
            <div style="margin: 24px 0;">
                
        </div>
            
            <p style="border: 2px solid black; background-color: black; padding: 0 5px 0 5px; width: 150px; margin: auto;">
            <input class="btn-design" id="updatesubmit" name="button" type="submit" value="Save" style="margin: 0; background-color:black">
            </p>
            

    </div>
    </div>
    <footer>
        <div style= "color: black; fontsize: 25px;">
            <p>BOIMELA<br>
        </div>
            <a href="mailto:info@boimela.com" >info@boimela.com</a></p>
    </footer>
    
<script src="../js/editprofile.js"></script>
        
</body>
</html>