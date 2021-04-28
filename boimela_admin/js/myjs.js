function validateUserReg() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var cpassword = document.getElementById("c-password").value;
    var dob = document.getElementById("dob").value;
    var address = document.getElementById("address").value;
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var status = true;
        if (name == "") {
            document.getElementById("mytext").innerHTML="Please enter name";
            status = false;
        }
        if (email == "") {
          var new_validation = "<p>Please enter email</p>";
          document.getElementById("mytext").innerHTML+= new_validation;
          status =  false;
        }
        else if (!filter.test(email.value)) {
            var new_validation = "<p>Please provide a valid email address</p>";
            document.getElementById("mytext").innerHTML+= new_validation;
            email.focus;
            status =  false;
         }
        if (username == "") {
          new_validation = "<p>Please enter username</p>";
          document.getElementById("mytext").innerHTML+= new_validation;
          status =  false;
        }
        if (password == "") {
            new_validation = "<p>Please enter password</p>";
            document.getElementById("mytext").innerHTML+= new_validation;
            status =  false;
          }
          if (dob == "") {
            new_validation = "<p>Please slect date of birth</p>";
            document.getElementById("mytext").innerHTML+= new_validation;
            status =  false;
          }
          if (address == "") {
              new_validation = "<p>Please write address</p>";
              document.getElementById("mytext").innerHTML+= new_validation;
              status =  false;
            }
          if (password != cpassword) {
            new_validation = "<p>Password and confirm password not matched</p>";
            document.getElementById("mytext").innerHTML+= new_validation;
            status =  false;
          }
        if ( password.length < 6) {
            new_validation = "<p>Password is small</p>";
            document.getElementById("mytext").innerHTML+= new_validation;
          status =  false;
        }
    
        if (document.getElementById("male").checked == false &&  document.getElementById("female").checked == false &&  document.getElementById("other").checked == false)
        {
            new_validation = "<p>Please Select gender</p>";
            document.getElementById("mytext").innerHTML+= new_validation;
            status =  false;
        }
    
        if(status == false)
        {
            var text = document.getElementById('mytext');
            text.classList.add('alert');
            window.scrollTo(0, 0);
           
            return false;
        }
    }
  
    
    