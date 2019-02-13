function proveraIme(){
	var ime = document.getElementById('name');
	var reIme = /^[A-Z][a-z]{2,20}(\s[A-Z][a-z]{2,20})+$/;
	if(!reIme.test(ime.value)){
        ime.style.border="3px solid red";
    }
    else {
        ime.style.border="0px";
    }
}	
	
	
function proveraAdresa(){	
	var adresa = document.getElementById('address');
	var reAdresa = /^([A-z]{2,10}\s)+\d+$/;
	
	if(!reAdresa.test(adresa.value)){
        adresa.style.border="3px solid red";
    }
    else {
        adresa.style.border="0px";
    }

}	
	
function proveraUser(){
	var user = document.getElementById('user');
	var reUser = /^[a-z]{5,20}$/;
	
	if(!reUser.test(user.value)){
        user.style.border="3px solid red";
    }
    else {
        user.style.border="0px";
    }
}
	

function proveraPassword(){
	var password = document.getElementById('password');
	var rePassword = /^[a-z]{4,10}$/;
	
	if(!rePassword.test(password.value)){
        password.style.border="3px solid red";
    }
    else {
        password.style.border="0px";
    }
}
	
	
function proveraEmail(){	
	var email = document.getElementById('email');
	var reEmail =/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;	
	if(!reEmail.test(email.value)){
        email.style.border="3px solid red";
    }
    else {
        email.style.border="0px";
    }
}