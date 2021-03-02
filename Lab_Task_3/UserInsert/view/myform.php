<?php
include('../control/validation.php');
?>

<!DOCTYPE html>
<html>
<head>
<title> Registration Page </title>
</head>
<body>
<h1>My Registration Page</h1>

<form  action="" method="post">
    <label for="name">Name: </label>
    <input type="text" name="name" placeholder="Enter your Name" >
    <br>
    <?php echo $validatename?>
    <br>

    <label for="username">Username: </label>
    <input type="text" name="username" placeholder="Enter your username" >
    <br>
    <?php echo $validateusername?>
    <br>

    <label for="email">Email: </label>
    <input type="text" name="email" placeholder="Enter your Email" >
    <br>
    <?php echo $validateemail?>
    <br>

    <label for="password">Password: </label>
    <input type="password" name="password" placeholder="Enter your Password" >
    <br>
    <?php echo $validatepass?>
    <br>

    <label for="con_pass">Confrim Password: </label>
    <input type="password" name="con_pass" placeholder="Re-enter your Password" >
    <br>
    <?php echo $validatepass?>
    <br>

    <label for="gender">Gender: </label>
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label>
    <input type="radio" id="other" name="gender" value="other">
    <label for="other">Other</label>
    <br>
    <?php echo $validategender?>
    <br>

    <label for="dob">Date of birth: </label>
    <input type="date" name="dob">
    <br>
    <?php echo $validatedob?>
    <br>
    <br>
    <input name="submit" type="submit" value="Submit">
    <input type="reset" value="Reset">
</form> 

<br>

</body>
</html>
