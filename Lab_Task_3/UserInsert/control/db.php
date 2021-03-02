<?php
class db{
 
function OpenCon()
 {
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "mydb";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
    
    return $conn;
 }
 

 function InsertUser($conn, $name, $username, $email, $password, $gender, $dob)
 {
    $result= $conn->query("INSERT INTO user (name, username, email, password, gender, dob)
    VALUES ($name, $username, $email, $password, $gender, $dob)");
    
    if ($result === TRUE) 
    {
        echo "New record created successfully";
    } 
      else {
        echo $conn->error;
      }
      return $result;
 }



function CloseCon($conn)
 {
    $conn -> close();
 }
}
?>
