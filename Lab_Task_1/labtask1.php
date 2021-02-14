<!DOCTYPE html>
<html>
<head>
<title> Registration Page </title>
</head>
<body>
<h1>My Registration Page</h1>

<form>
  <table>
  	<tr>
  		<td>Name: </td>
  		<td><input type="text" name="name"></td>
  	</tr>
  	<tr>
  		<td>Email: </td>
  		<td><input type="email" name="email"></td>
  	</tr>
  	<tr>
  		<td>Username: </td>
  		<td><input type="text" name="username"></td>
  	</tr>
  	<tr>
  		<td>Password: </td>
  		<td><input type="password" name="password"></td>
  	</tr>
  	<tr>
  		<td>Confirm Password: </td>
  		<td><input type="password" name="c-password"></td>
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
  	</tr>
  	<tr>
  		<td>Date of Birth</td>
  		<td><input type="date" name="dob"></td>
  	</tr>
  </table>
  <input type="submit" value="Submit">
  <input type="reset" value="Reset">
</form> 

</body>
</html>
