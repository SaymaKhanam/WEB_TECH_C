
    document.getElementById('username').addEventListener('keyup',uservalidation);
    function uservalidation(e){
        if(document.getElementById('username').value == ""){
            document.getElementById('validateusername').innerHTML="Username is required";
        }
        else if(document.getElementById('username').value.length < 6){
            document.getElementById('validateusername').innerHTML="Username is less then 6 character";
        }
        else{
            document.getElementById('validateusername').innerHTML="";
        }
    }
    
    document.getElementById('name').addEventListener('keyup',namevalidation);
    function namevalidation(e){
        if(document.getElementById('name').value == ""){
            document.getElementById('validatename').innerHTML="Name is required";
        }
        else{
            document.getElementById('validatename').innerHTML="";
        }
    
    }
    

    document.getElementById('phone').addEventListener('keyup',phonevalidation);
    function phonevalidation(e){
        if(document.getElementById('phone').value == ""){
            document.getElementById('validatephone').innerHTML="Phone number is required";
        }
        else if(document.getElementById('phone').value.length < 11){
            document.getElementById('validatephone').innerHTML="Phone number is invalid";
        }
        else{
            document.getElementById('validatephone').innerHTML="";
        }
    
    }

    document.getElementById('password').addEventListener('keyup',passvalidation);
    function passvalidation(e){
        if(document.getElementById('password').value == ""){
            document.getElementById('validatepassword').innerHTML="Password is required";
        }
        else if(document.getElementById('password').value.length < 6){
            document.getElementById('validatepassword').innerHTML="Password Must be at least 6 character";
        }
        else{
            document.getElementById('validatepassword').innerHTML="";
        }
    
    }

    document.getElementById('c-password').addEventListener('keyup',cpassvalidation);
    function cpassvalidation(e){
        if(document.getElementById('c-password').value == ""){
            document.getElementById('validatecpassword').innerHTML="Confirm Password is required";
        }
        else if(document.getElementById('c-password').value != document.getElementById('password').value){
            document.getElementById('validatecpassword').innerHTML="Password does not match!";
        }
        else{
            document.getElementById('validatecpassword').innerHTML="";
        }
    
    }
    

