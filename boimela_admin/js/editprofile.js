


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




document.getElementById('updatesubmit').addEventListener('click',updatedata);
function updatedata(e){
    let username = document.getElementById('username').value;
    let name = document.getElementById('name').value;
    let phone = document.getElementById('phone').value;
    let email = document.getElementById('email').value;
    let address = document.getElementById('address').value;
    if(username != "" && name != "" && email != "" && address != "" && phone != ""){
        var xhttp = new XMLHttpRequest();	

		xhttp.open("POST", "../control/updateeditprofile.php", true);
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhttp.send("username="+username+"&name="+name+"&phone="+phone+"&email="+email+"&address="+address);


		xhttp.onreadystatechange = function() {
			if(this.readyState == 4 && this.status == 200) {
                console.log(xhttp.responseText);
				if(xhttp.responseText == 'true'){
					window.location.href = "../view/myaccount.php";
				}
			}
		}
    }
}
    