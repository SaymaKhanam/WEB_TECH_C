<?php

include("../model/db.php");
//session_start();

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $username=$_POST["username"];
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $address=$_POST["address"];

    $connection = new db();
    $conn=$connection->OpenCon();

        $result=  $conn->query( "UPDATE admin set AUserName = '".$username."'");
        $result=  $conn->query( "UPDATE admin set AName = '".$name."'");
        $result=  $conn->query( "UPDATE admin set AEmail = '".$email."'");
        $result=  $conn->query( "UPDATE admin set APhone = '".$phone."'");
        $result=  $conn->query( "UPDATE admin set AAddress = '".$address."'");
        
		if($result) {
            $_SESSION['login_user'] = $username;
            echo "true";
        }
        $conn -> close();
}



?>