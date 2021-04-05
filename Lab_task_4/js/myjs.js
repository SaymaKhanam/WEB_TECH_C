function validateForm() {
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;
  var cpassword = document.getElementById("c-password").value;
    if (name == "") {
      document.getElementById("mytext").innerHTML="Please enter name";
      return false;
    }
    if (email == "") {
        var new_validation = "<p>Please enter email</p>";
        document.getElementById("mytext").innerHTML+= new_validation;
        return false;
      }
      if (username == "") {
        new_validation = "<p>Please enter username</p>";
        document.getElementById("mytext").innerHTML+= new_validation;
        return false;
      }
      if (password == "") {
        new_validation = "<p>Please enter password</p>";
        document.getElementById("mytext").innerHTML+= new_validation;
        return false;
      }
    if ( password.length < 6) {
        new_validation = "<p>Password is small</p>";
        document.getElementById("mytext").innerHTML+= new_validation;
      return false;
    }
  
    if (document.getElementById("male").checked == false &&  document.getElementById("female").checked == false &&  document.getElementById("other").checked == false)
    {
        new_validation = "<p>Please Select gender</p>";
        document.getElementById("mytext").innerHTML+= new_validation;
      return false;
    }
  }

  
  
