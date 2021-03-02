<?php
include('db.php');
$validatename="";
$validateusername="";
$validateemail="";
$validatepass="";
$validategender="";
$validatedob="";
$errors = array();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name=$_REQUEST["name"];
    $username=$_REQUEST["username"];
    $email=$_REQUEST["email"];
    $password=$_REQUEST["password"];
    $gender=$_REQUEST["gender"];
    $dob=$_REQUEST["dob"];

    $usernamelength= strlen($username);
    $passwordlength= strlen($password);

    if(empty($name))
    {
        $validatename= "You can not submit without name";
        $errors['name'] = $validatename;
    }
    else
    {
        $validatename= "Your name is: ".$name;
    }

    if(!empty($email) && preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $email))
    {
        $validateemail= "Your email is: ".$email;
    }
    else
    {
        $validateemail= "You have to enter a valid email";
        $errors['email'] = $validateemail;
    }

    if(empty($password) || $passwordlength < 6)
    {
        $validatepass= "Password is required and minimum lenth 6";
        $errors['pass'] = $validatepass;
    }

    if(empty($username) || $usernamelength < 5)
    {
        $validateusername= "Username is required and minimum lenth 5";
        $errors['usename'] = $validateusername;
    }
    else
    {
        $validateusername= "Your username is: ".$username;
    }
    if(empty($gender))
    {
        $validategender= "Gender is required";
        $errors['gender'] = $validategender;
    }

    if(empty($dob))
    {
        $validatedob= "Date of Birth is required";
        $errors['dob'] = $dob;
    }
    
    if (!$errors) {
        $connection = new db();
        $conobj=$connection->OpenCon();
    
        $InsertQuery=$connection->InsertUser($conobj, $name, $username, $email, $password, $gender, $dob);
        echo $InsertQuery;
        if(!empty($InsertQuery))
        {
            $error = "Insert User Succecfull!";
        }else 
        {
            $error = "User data is invalid";
        }
        $connection->CloseCon($conobj);
    }
    else 
    {
        $error = "Data validation not successfull";

        print_r($errors);
    }
}


?>
