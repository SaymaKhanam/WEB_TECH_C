<?php
class db{
 
function OpenCon()
 {
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "boimela";
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
    
    return $conn;
 }
 

 function InsertUser($conn, $username, $name, $gender, $email, $phone, $dob, $address, $profile_picture,  $category)
 {
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
    if($category == "Seller")
    {
       $result= $conn->query( "INSERT INTO seller ( SUserName, SName, SGender, SEmail, SPhone, SDOB, SAddress, SPhoto, SStatus) VALUES ('".$username."', '".$name."', '".$gender."', '".$email."', '".$phone."', '".$dob."', '".$address."', '".$profile_picture."',1)");
       return $result;
    }
    else if($category == "Delivery")
    {
        $result= $conn->query("INSERT INTO delivery ( DUserName, DName, DGender, DEmail, DPhone, DDOB, DAddress, DPhoto, DStatus) VALUES ('".$username."', '".$name."', '".$gender."', '".$email."', '".$phone."', '".$dob."', '".$address."', '".$profile_picture."',1)");
    }
      return $result;
 }

 
 function DeleteWhere($conn, $table, $where)
 {
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      $result= $conn->query( "DELETE FROM ".$table." WHERE ".$where);
 }
 function RemoveBook($conn, $BookID)
 {
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
 $result= $conn->query( "DELETE FROM books WHERE BookID = '".$BookID."'");
 }

 function Update($conn, $pass)
 {
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      $result=  $conn->query( "UPDATE admin set APassword = '".$pass."'");
 }

 function InsertLogin($conn, $username, $password, $category)
 {
    $result= $conn->query("INSERT INTO login (Username, Password, UserCategory) VALUES ('".$username."', '".$password."', '".$category."')");
        
      return $result;
 }

 function UpdateAdminUser($conobj, $username, $name, $email, $phone, $dob, $address)
 {
    
      $result=  $conobj->query( "UPDATE admin set AUserName = '".$username."'");
      $result=  $conobj->query( "UPDATE admin set AName = '".$name."'");
      $result=  $conobj->query( "UPDATE admin set AEmail = '".$email."'");
      $result=  $conobj->query( "UPDATE admin set APhone = '".$phone."'");
      $result=  $conobj->query( "UPDATE admin set ADOB = '".$dob."'");
      $result=  $conobj->query( "UPDATE admin set AAddress = '".$address."'");

 }

 function UpdateAdminLogin($conobj, $username)
 {
    if ($conobj->connect_error) {
        die("Connection failed: " . $conobj->connect_error);
      }
      $result=  $conobj->query( "UPDATE admin set APassword = '".$pass."'");
 }

 function checkEmail($conobj, $email)
 {
    if ($conobj->connect_error) {
        die("Connection failed: " . $conobj->connect_error);
      }
      $sql = "SELECT * FROM delivery WHERE DEmail = '$email'";
      $result = $conobj->query($sql);
      if($result->num_rows > 0) {
        return 0;
      }

      $sql = "SELECT * FROM seller WHERE SEmail = '$email'";
      $result = $conobj->query($sql);
      if($result->num_rows > 0) {
        return 0;
      }
      return 1;

 }



function CloseCon($conn)
 {
    $conn -> close();
 }
}
?>