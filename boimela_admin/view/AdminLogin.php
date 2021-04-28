<?php
session_start(); 
if(!empty($_SESSION['login_user'])){
    header("location: adminDashboard.php");
    }
include('../control/adminlogincheck.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<body>
    <div style="text-align: center;">
        <img src="../upload/boimela.png" alt="Boimela" width="150" height="150"><br>
        <h1>Admin Login</h1>
    </div>

<form style="text-align: center;"  action="" method="post">
    <label for="username">Username: </label>
    <input type="text" name="username" placeholder="Enter Enter" >
    <br><br>

    <label for="name">Password: </label>
    <input type="password" name="password" placeholder="Enter Password" >
    <br><?php echo $error; ?><br>
    <input name="login" type="submit" value="Login">
</form> 

<br>

</body>
</body>
</html>