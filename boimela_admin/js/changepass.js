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

document.getElementById('submit').addEventListener('click',changepass);
function changepass(e){
    if(document.getElementById('password').value != "" && document.getElementById('c-password').value != "" && document.getElementById('password').value.length >5 && document.getElementById('password').value == document.getElementById('c-password').value){
        var xhttp = new XMLHttpRequest();	

		let passwordvalue = document.getElementById('password').value;

		xhttp.open("POST", "../control/updatechangepass.php", true);
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhttp.send("password="+passwordvalue);

        console.log(xhttp.responseText);

		xhttp.onreadystatechange = function() {
			if(this.readyState == 4 && this.status == 200) {
                console.log(xhttp.responseText);
				if(xhttp.responseText == 'true'){
					window.location.href = "../view/adminDashboard.php";
				}
			}
		}
    }
}