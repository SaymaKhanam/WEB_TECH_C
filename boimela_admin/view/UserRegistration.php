<?php
include('../control/UserRegistration.php');
?>

<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" type="text/css" href="../css/mycss.css">
<title>Seller/Delivery Man Registration Form</title>
</head>
<body>
    <div>
        <div class="top-logo">
            <img src="../upload/boimela.png" alt="Boimela" width="70" height="70">
            <h1>Welcome to Boimela</h1>
        </div>
        <div class="sticky">
            <div class="topnav">
           
                    <a href="adminDashboard.php">Home</a>
                    <a href="myaccount.php">My Account</a>
                    <a href="UserRegistration.php">Registration</a>
                    <a href="ManageSeller.php">Manage Seller</a>
                    <a href="ManageDeliveryman.php">Manage Deliveryman</a>
                    <a href="ManageBuyer.php">Manage Buyer</a>
                    <a href="BookList.php">Book List</a>
                    <a href="NewMemberRequest.php">New Member Request</a>
                    <a href="changepass.php">Change Password</a>
                    <a href="../control/logout.php">Logout</a>
           
            </div>
        </div>
    </div>
    <div class="regForm">
    
        <h3>Seller/Delivery Man Registration Form</h3>
        
        <p style= "color: green; font-size: 20px; text-align: center;"><?php echo $finalreport ?></p>

        <!-- onsubmit="return validateUserReg()" -->

        <form action=""  method="post" enctype="multipart/form-data">
            <label for="username">User Name: </label>
            <input type="text" name="username" id="username" placeholder="Enter Username" >
            <span style="color: red" id="validateusername">Username is required</span> 
            <br>
            <br>

            <label for="name">Full Name: </label>
            <input type="text" name="name" id="name" placeholder="Enter Name" >
            <span style="color: red" id="validatename">Name is required</span>
            <?php echo $validatename?>
            <br>
            <br>

            <label for="gender">Gender:</label>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label>
            <span style="color: red"> <?php echo $validategender?></span>
            
            <br>
            <br>

            <label for="email">Email: </label>
            <input type="text" name="email" id="email" placeholder="Enter Email Address" onchange="checkEmail($(this).val());" >
            <span style="color: red"  id="validateuseremail"> <?php echo $validateemail ?></span>
           
            <br>
            <br>

            <label for="phone">Phone: </label>
            <input type="text" id="phone" name="phone" placeholder="01XXXXXXXXX" >
            <span style="color: red" id="validatephone">Phone is required</span>

            <br>
            <br>

            <label for="dob">Date of birth: </label>
            <input type="date" name="dob" id="dob">
            <span style="color: red"> <?php echo $validatedob ?></span>

            <br>
            <br>

            <label for="password">Password: </label>
            <input type="password" name="password" id="password" placeholder="Enter Password" >
            <span style="color: red" id="validatepassword">Password is required</span>
            <br>
            <br>

            <label for="c_password">Confirm Password: </label>
            <input type="password" name="c_password" id="c-password" placeholder="Confirm Your Password" >
            <span style="color: red" id="validatecpassword">Comfirm Password is required</span>
            <br>
            <br>

            <label for="category">Please Select User Category:</label>
            <select name="category" style= "width: 150px;">
                <option value="Seller" selected>Seller</option>
                <option value="Delivery">Delivery Man</option>
            </select>
            <br>
            <br>

            <label for="address">Address: </label>
            <input type="text" name="address" id="address" placeholder="Not Mendatory" >
            <br>
            <br>
            <label for="profile_picture">Profile Picture: </label>
            <input type="file" name="profile_picture">
            <br>
            <span style="color: red"> <?php echo $validatepp ?></span>
            <br>
            <div style= "text-align: center">
                <input class="btn-design" name="button" type="submit" value="Submit">
                <input class="btn-design" type="reset" value="Reset">
            </div>
        </form> 
    </div>



<br>
<footer>
        <div style= "color: black; fontsize: 25px;">
            <p>BOIMELA<br>
        </div>
            <a href="mailto:info@boimela.com" >info@boimela.com</a></p>
</footer>

<script src="../js/UserRegistration.js"></script>
<script src="../js/jquery.min.js"></script>
<script>
    function checkEmail(email){
    $.ajax({
        url: "../control/checkEmail.php?email="+email,

        success: function(result){
            var value = JSON.parse(result);
            if(value.status == 0){
                console.log('exist');
                $('#validateuseremail').html('Email Already Exist');
                $('#validateuseremail').show();
            }else{
                $('#validateuseremail').hide();
            }
    }});
    }
</script>

</body>
</html>