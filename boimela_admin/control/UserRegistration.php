<?php
include('../model/db.php');
$validateusername="";
$validatename="";
$validategender="";
$validateemail="";
$validatephone="";
$validatedob="";
$validatepassword="";
$validatec_password="";
$validatecategory="";
$validateaddress="";
$validatepp="";
$finalreport= "";

$errors = array();
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $username=$_REQUEST["username"];
    $name=$_REQUEST["name"];
    $email=$_REQUEST["email"];
    //$gender=$_REQUEST["gender"];
    if(!empty($_POST['gender'])) {
        $gender=$_POST['gender'];
    }
    $phone=$_REQUEST["phone"];
    $dob=$_REQUEST["dob"];
    $password=$_REQUEST["password"];
    $c_password=$_REQUEST["c_password"];
    $category=$_REQUEST["category"];
    $address=$_REQUEST["address"];


    if(empty($username) || strlen($username)<6 || empty($name) || empty($phone) || strlen($phone)!==11 || empty($password) || strlen($password)<6 || empty($c_password) || $password !== $c_password)
    {
        $errors['exist'] = "exist";
    }

    if(!isset($gender))
    {
        $validategender= "Gender is required";
        $errors['gender'] = $validategender;
    }

    

    if(empty($email))
    {
        $validateemail= "Email is required";
        $errors['nullemail'] = $validateemail;
    }
    elseif(!empty($email) && preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $email))
    {
        $validateemail= "";
    }
    else
    {
        $validateemail= "You have to enter a valid email";
        $errors['validemail'] = $validateemail;
    }

    if(empty($dob))
    {
        $validatedob= "Date of Birth is required";
        $errors['dob'] = $dob;
    }

    $target_dir = "../upload/";
    $fileName       = $_FILES['profile_picture']['name'];
    $file_tmp_name  = $_FILES['profile_picture']['tmp_name'];
    $fileSize       = $_FILES['profile_picture']['size'];
    $target_file    = $target_dir . basename($fileName);
    $fileEXT = explode(".", $fileName);
    $newName = $username . time() . '.' . end($fileEXT);
    if (move_uploaded_file($file_tmp_name, $target_dir . $newName)) {
        $profile_picture = $newName;
    } else {
        $validatepp="Upload a picture for your profile";
        $errors['pp'] = $validatepp;
    }

    if (!$errors) {
        $connection = new db();
        $conobj=$connection->OpenCon();
        $InsertQuery = $connection->InsertUser($conobj, $username, $name, $gender, $email, $phone, $dob, $address, $profile_picture, $category);
        $InsertLogin = $connection->InsertLogin($conobj, $username, $password, $category);
        if(!empty($InsertQuery) && !empty($InsertLogin))
        {
            $finalreport = "Insert User Succecfull!";
        }else 
        {
            $finalreport = "User data is invalid";
        }
        $connection->CloseCon($conobj);
    }
    else 
    {
        $error = "Data validation not successfull";
    }
}

?>