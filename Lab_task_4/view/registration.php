<?php
include('../control/validation.php');
?>

<!DOCTYPE html>
<html>
<head>
<title> Registration Page </title>
<script src="../js/myjs.js"></script>
</head>
<body>
<h1>My Registration Page</h1>
<p id="mytext"></p>  

<form  action="<?php echo $_SERVER["PHP_SELF"];?>" onsubmit="return validateForm()"  method="post">
  <table>
  	<tr>
  		<td>Name: </td>
  		<td><input type="text" name="name" id="name"></td>
      <br>
      <?php echo $validatename?>
  	</tr>
  	<tr>
  		<td>Email: </td>
  		<td><input type="email" name="email" id="email"></td>
      <br>
      <?php echo $validateemail?>
  	</tr>
  	<tr>
  		<td>Username: </td>
  		<td><input type="text" name="username" id="username"></td>
      <br>
      <?php echo $validateusername?>
  	</tr>
  	<tr>
  		<td>Password: </td>
  		<td><input type="password" name="password" id="password"></td>
      <br>
      <?php echo $validatepass?>
  	</tr>
  	<tr>
  		<td>Confirm Password: </td>
  		<td><input type="password" name="c-password" id="c-password"></td>
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
  		<td><input type="date" name="dob" id ="dob"></td>
      <br>
      <?php echo $validatedob?>
  	</tr>
  </table>
  <input type="submit" value="Submit">
  <input type="reset" value="Reset">
</form> 

</body>
</html>
