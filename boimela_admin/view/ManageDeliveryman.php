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

if(!empty($_GET['finalreport'])) {
    $finalreport = $_GET['finalreport'];
}else{
    $finalreport = "";
}
$sql = "SELECT * FROM delivery where DStatus=1";
$seller = $conobj->query($sql);


?>


<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/mycss.css">
        <script src="../js/myjs.js"></script>
        <title>Deliveryman List</title>
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
        <div class="center">
            <h2>Deliveryman List</h2>
            <p style= "color: red; font-size: 20px; text-align: center;"><?php echo $finalreport ?></p>
          
            <table class="center">
                <tr>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Date of Birth</th>
                    <th>Address</th>
                    <th>Photo</th>
                    <th>Action</th>
                </tr>
                <?php while($row = $seller->fetch_assoc()){ ?>
                <tr>
                    <td><?php echo $row['DName']; ?></td>
                    <td><?php echo $row['DGender']; ?></td>
                    <td><?php echo $row['DPhone']; ?></td>
                    <td><?php echo $row['DEmail']; ?></td>
                    <td><?php echo $row['DDOB']; ?></td>
                    <td><?php echo $row['DAddress']; ?></td>
                    <td><img src="../upload/<?php echo $row['DPhoto']; ?>" alt="" width="150" height="150"></td>
                    <td><a href="../control/delete.php?method=deliveryman&id=<?php echo $row['DID']; ?>">Delete</a></td>
                </tr>
                <?php } ?>
            </table>
        </div>
    <footer>
        <div style= "color: black; fontsize: 25px;">
            <p>BOIMELA<br>
        </div>
            <a href="mailto:info@boimela.com" >info@boimela.com</a></p>
    </footer>
    </body>
</html>