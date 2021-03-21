<?php
session_start(); 

include('../control/updatecheck.php');


if(empty($_SESSION["username"])) // Destroying All Sessions
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>

<!DOCTYPE html>
<html>
<body>
<h2>Profile Page</h2>

Hii, <h3><?php echo $_SESSION["username"];?></h3>
<br>Your Profile Page.
<br><br>
<?php
$radio1=$radio2=$radio3="";
$pro1=$pro2=$pro3="";
$int1=$int2=$int3="";
$firstname=$email=$password=$address=$dob="";
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"student",$_SESSION["username"],$_SESSION["password"]);

if ($userQuery->num_rows > 0) {

    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      $firstname=$row["firstname"];
      $email=$row["email"];
      $password=$row["password"];
      $address=$row["address"];
      $dob=$row["dob"];
      
     
      if(  $row["gender"]=="female" )
      { $radio1="checked"; }
      else if($row["gender"]=="male")
      { $radio2="checked"; }
      else{$radio3="checked";}

      if(  $row["profession"]=="Academician" )
      { $pro1="selected"; }
      else if($row["profession"]=="Student")
      { $pro2="selected"; }
      else{$pro3="selected";}

      if(  $row["interests"]=="Programming" )
      { $ins1="checked"; }
      else if($row["interests"]=="Music")
      { $ins2="checked"; }
      else{$ins3="checked";}
   
  } 
}
  else {
    echo "0 results";
  }



?>
<form action='' method='post'>
firstname : <input type='text' name='firstname' value="<?php echo $firstname; ?>" >

email : <input type='text' name='email' value="<?php echo $email; ?>" >
 Gender:
     <input type='radio' name='gender' value='female'<?php echo $radio1; ?>>Female
     <input type='radio' name='gender' value='male' <?php echo $radio2; ?> >Male
     <input type='radio' name='gender' value='other'<?php  $radio3; ?> > Other
    <br>
password: <input type='text' name='password' value="<?php echo $password; ?>" >
<br>
address: <input type='text' name='address' value="<?php echo $address; ?>" > 
<br>
dob: <input type='date' name='dob' value="<?php echo $dob; ?>" > 
<br>
profession:
    <select name="profession">
    <option value="Academician" <?php echo $pro1; ?>> Academician</option>
    <option value="Student" <?php echo $pro2; ?>> Student</option>
    <option value="Staff" <?php echo $pro3; ?>> Staff</option>
    </select>
<br>
interests:
    <input type='checkbox' name='interests' value='Programming'<?php echo $int1; ?>>Programming
    <input type='checkbox' name='interests' value='Music' <?php echo $int2; ?> >Music
    <input type='checkbox' name='interests' value='Drawing'<?php  $int3; ?> > Drawing
<br>

     <input name='update' type='submit' value='Update'>  

     <?php echo $error; ?>
<br>
<br>
<a href="../view/pageone.php">Back </a>

<a href="../control/logout.php"> logout</a>

</body>
</html>
