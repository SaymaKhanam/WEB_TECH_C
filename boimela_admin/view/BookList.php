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

$sql = "SELECT * FROM books";
$books = $conobj->query($sql);

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    
    $removebook=$_REQUEST["deleteacc"];


    $connection = new db();
        $conobj=$connection->OpenCon();
        $InsertQuery = $connection->RemoveBook($conobj, $removebook);
        if(!empty($InsertQuery))
        {
            $error = "Insert Book Succecfull!";
        }else 
        {
            $error = "User Book is invalid";
        }
        $connection->CloseCon($conobj);
    header('Location: BookList.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/mycss.css">
        <script src="../js/myjs.js"></script>
        <title>Book List</title>
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
            <h2>Book List</h2>
            <form  style="text-align:center" action="" method="POST">
                    <label for="deleteacc">BookID</label>
                    <input  style="text-align:center" type="text" name="deleteacc">
                    <input class="btn-design" name="button" type="submit" value="Remove">
                
            </form>
            <table class="center">
                <tr>
                <th>BookID</th>
                <th>Book Name</th>
                <th>Author Name</th>
                <th>ISBN</th>
                <th>Book Price</th>
                <th>Book Details</th>
                </tr>
            <?php while($row = $books->fetch_assoc()){ ?>
                <tr>
                    <td><?php echo $row['BookID']; ?></td>
                    <td><?php echo $row['BookName']; ?></td>
                    <td><?php echo $row['AuthorName']; ?></td>
                    <td><?php echo $row['ISBN']; ?></td>
                    <td><?php echo $row['BookPrice']; ?></td>
                    <td><?php echo $row['BookDetails']; ?></td>
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
