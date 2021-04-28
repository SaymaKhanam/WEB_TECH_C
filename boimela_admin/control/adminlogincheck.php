<?php
include("../model/db.php");


 $error="";
// store session data
if (isset($_POST['login'])) 
{
    if (empty($_POST['username']) || empty($_POST['password'])) 
    {
    $error = "Username or Password is invalid";
    }
    else
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $connection = new db();
        $conobj=$connection->OpenCon();

        $sql = "SELECT * FROM admin WHERE AUserName = '$username' and APassword = '$password'";
        $result = $conobj->query($sql);
    
        if($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $_SESSION['login_user'] = $row["AUserName"];
            
            header("location: adminDashboard.php");
            die();
        }else {
            $error = "Your Login Name or Password is invalid";
        }

   }
 
}



?>