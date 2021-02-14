<!DOCTYPE html>
<html>
<head>
<title> Registration Page </title>
</head>
<body>
<h1>My Registration Page</h1>
<?php
$validatename="";
$validateusername="";
$validateemail="";
$validatepass="";
$validategender="";
$validatedob="";

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
    }
    else
    {
        $validatename= "Your name is: ".$name;
    }

    if(empty($email) || preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'))
    {
        $validateemail= "You have to enter a valid email";
    }
    else
    {
        $validateemail= "Your email is: ".$email;
    }

    if(empty($password) || $passwordlength < 6)
    {
        $validatepass= "Password is required and minimum lenth 6";
    }

    if(empty($username) || $usernamelength < 5)
    {
        $validateusername= "Username is required and minimum lenth 5";
    }

    if(empty($gender))
    {
        $validategender= "Gender is required";
    }

    if(empty($dob))
    {
        $validatedob= "Date of Birth is required";
    }
}
?>
<form  action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
  <table>
  	<tr>
  		<td>Name: </td>
  		<td><input type="text" name="name"></td>
      <br>
      <?php echo $validatename?>
  	</tr>
  	<tr>
  		<td>Email: </td>
  		<td><input type="email" name="email"></td>
      <br>
      <?php echo $validateemail?>
  	</tr>
  	<tr>
  		<td>Username: </td>
  		<td><input type="text" name="username"></td>
      <br>
      <?php echo $validateusername?>
  	</tr>
  	<tr>
  		<td>Password: </td>
  		<td><input type="password" name="password"></td>
      <br>
      <?php echo $validatepass?>
  	</tr>
  	<tr>
  		<td>Confirm Password: </td>
  		<td><input type="password" name="c-password"></td>
      <br>
      <?php echo $validatepass?>
  	</tr>
  	<tr>
  		<td>Gender: </td>
  		<br>
  		<td>
			<input type="radio" id="male" name="gender" value="male">
			<label>Male</label><br>
			<input type="radio" id="female" name="gender" value="female">
			<label>Female</label><br>
			<input type="radio" id="other" name="gender" value="other">
			<label>Other</label>
		</td>
    <br>
      <?php echo $validategender?>
  	</tr>
  	<tr>
  		<td>Date of Birth</td>
  		<td><input type="date" name="dob"></td>
      <br>
      <?php echo $validatedob?>
  	</tr>
  </table>
  <input type="submit" value="Submit">
  <input type="reset" value="Reset">
</form> 

</body>
</html>
