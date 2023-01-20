console.log("Hello world");


//Validating Login Form
const loginEmail = document.forms['form']['email'];
const loginPassword = document.forms['form']['password'];


const email_error_login = document.getElementById('email_error_login');
const pass_error_login = document.getElementById('pass_error_login');


loginEmail.addEventListener('textInput', email_VerifyLogin);
loginPassword.addEventListener('textInput', pass_VerifyLogin);


function validated(){
	if (loginEmail.value.length < 8) {
		loginEmail.style.border = "1px solid red";
		email_error_login.style.display = "block";
		loginEmail.focus();
		return false;
	}
	if (loginPassword.value.length < 8) {
		loginPassword.style.border = "1px solid red";
		pass_error_login.style.display = "block";
		loginPassword.focus();
		return false;
	}

}
function email_VerifyLogin(){
	if (loginEmail.value.length >= 8) {
		loginEmail.style.border = "1px solid silver";
		email_error_login.style.display = "none";
		return true;
	}
}
function pass_VerifyLogin(){
	if (loginPassword.value.length >= 7) {
		loginPassword.style.border = "1px solid silver";
		pass_error_login.style.display = "none";
		return true;
	}
}

// REGISTER VALIDATE FORM

var email = document.forms['form']['email'];
var password = document.forms['form']['password'];
var aname = document.forms['form']['name'];
var confirmPassword = document.forms['form']['confirmPassword'];

var name_error = document.getElementById('name_error');
var email_error = document.getElementById('email_error');
var pass_error = document.getElementById('pass_error');
var confirmPass_error = document.getElementById('confirmPass_error');


aname.addEventListener('textInput', name_Verify);
email.addEventListener('textInput', email_Verify);
password.addEventListener('textInput', pass_Verify);
confirmPassword.addEventListener('textInput', confirmPass_Verify);


function validatedRegister(){
	if (aname.value.length < 3) {
		aname.style.border = "1px solid red";
		name_error.style.display = "block";
		aname.focus();
		return false;
	}
	if (email.value.length < 9) {
		email.style.border = "1px solid red";
		email_error.style.display = "block";
		email.focus();
		return false;
	}
	if (password.value.length < 6) {
		password.style.border = "1px solid red";
		pass_error.style.display = "block";
		password.focus();
		return false;
	}
	if (confirmPassword.value != password.value) {
		confirmPassword.style.border = "1px solid red";
		confirmPass_error.style.display = "block";
		confirmPassword.focus();
		return false;
	}

}
function email_Verify(){
	if (email.value.length >= 8) {
		email.style.border = "1px solid silver";
		email_error.style.display = "none";
		return true;
	}
}
function pass_Verify(){
	if (password.value.length >= 5) {
		password.style.border = "1px solid silver";
		pass_error.style.display = "none";
		return true;
	}
}
function confirmPass_Verify(){
	if (confirmPassword.value == password.value) {
		confirmPassword.style.border = "1px solid silver";
		confirmPass_error.style.display = "none";
		return true;
	}
}

function name_Verify(){
	if (aname.value.length >= 3) {
		aname.style.border = "1px solid silver";
		name_error.style.display = "none";
		return true;
	}
}

//Validate Contact Form
function validateContactForm(){  
    var names = document.form.name.value;
    var email = document.form.email.value;
	var phone = document.form.phone.value;
	var phoneRGEX = /^(\d{1,2}\s?)?1?\-?\.?\s?\(?\d{3}\)?\d{2}\d{2}$/gm;
	var phoneResult = phoneRGEX.test(phone);
    if (names==null || names==""){  
      alert("Name must be filled!");  
      return false;  
    }else if(email==null || email==""){  
      alert("Email cannot be blank!");  
      return false;  
      }else if(phoneResult == false){
		alert("Enter a valid phone number!");
		return false;
	  }
	  else{
        alert("successfully sent :)");
        return true;
      }
    } 


	//SIDEBAR
	$(document).ready(function() {

		function toggleSidebar() {
		  $(".button").toggleClass("active");
		  $("main").toggleClass("move-to-left");
		  $(".sidebar-item").toggleClass("active");
		}
	  
		$(".button").on("click tap", function() {
		  toggleSidebar();
		});
	  
		$(document).keyup(function(e) {
		  if (e.keyCode === 27) {
			toggleSidebar();
		  }
		});
	  
	  });
