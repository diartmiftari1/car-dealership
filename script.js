console.log("Hello world");

// SLIDER SINGLE CAR
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

//Validating Login Form
var names = document.forms['form']['name'];
var email = document.forms['form']['email'];
var password = document.forms['form']['password'];

var name_error = document.getElementById('name_error');
var email_error = document.getElementById('email_error');
var pass_error = document.getElementById('pass_error');

names.addEventListener('textInput', name_Verify);
email.addEventListener('textInput', email_Verify);
password.addEventListener('textInput', pass_Verify);

function validatedRegister(){
  if (names.value.length < 3) {
		names.style.border = "1px solid red";
		name_error.style.display = "block";
		names.focus();
		return false;
	}
	if (email.value.length < 9) {
		email.style.border = "1px solid red";
		email_error.style.display = "block";
		email.focus();
		return false;
	}
	if (password.value.length < 6) {
		password.style.border = "2px solid red";
		pass_error.style.display = "block";
		password.focus();
		return false;
	}
}

function validated(){
	if (email.value.length < 9) {
		email.style.border = "1px solid red";
		email_error.style.display = "block";
		email.focus();
		return false;
	}
	if (password.value.length < 6) {
		password.style.border = "2px solid red";
		pass_error.style.display = "block";
		password.focus();
		return false;
	}
}
function email_Verify(){
	if (email.value.length >= 8) {
		email.style.border = "2px solid silver";
		email_error.style.display = "none";
		return true;
	}
} 
function name_Verify(){
  if (names.value.length >= 8) {
		names.style.border = "2px solid silver";
		name_error.style.display = "none";
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



// const [form] = document.forms;
// const [
//   nameFeedback,
//   emailFeedback,
//   passwordFeedback,
//   confirmPasswordFeedback
// ] = document.querySelectorAll('.feedback');

// const isNameValid = name => {
//   return name.length > 3 && name.length <= 20 && /^[A-Za-z0-9_ ]*$/g.test(name);
// }

// const isEmailValid = email => {
//   return /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/g.test(email);
// }

// const isPasswordValid = password => {
//   return /^((?=.*[\d])(?=.*[a-z])(?=.*[A-Z])|(?=.*[a-z])(?=.*[A-Z])(?=.*[^\w\d\s])|(?=.*[\d])(?=.*[A-Z])(?=.*[^\w\d\s])|(?=.*[\d])(?=.*[a-z])(?=.*[^\w\d\s])).{7,30}$/gm.test(password);
// }

// const isPasswordMatch = (password, confirmPassword) => {
//   return !!confirmPassword && password === confirmPassword;
// }

// const validation = (name, email, password, confirmPassword) => {
//   return (
//     isNameValid(name) &&
//     isEmailValid(email) &&
//     isPasswordValid(password) &&
//     isPasswordMatch(password, confirmPassword)
//   );
// }

// const toggleShowPassword = (toggler, elements) => {
//   toggler.addEventListener('change', e => {
//     elements.forEach(element => {
//       element.setAttribute('type', e.target.checked ? 'text' : 'password');
//     });
//   });
// };

// const getElement = (name, e) => {
//   return {
//     name(e) {
//       e.target.classList.toggle('border-danger', !isNameValid(e.target.value));
//       nameFeedback.textContent = isNameValid(e.target.value) ? null : 'Name must be at least 3 to 20 characters long and contain only alphabet, number, underscore and white space';
//     },
//     email(e) {
//       e.target.classList.toggle('border-danger', !isEmailValid(e.target.value));
//       emailFeedback.textContent = isEmailValid(e.target.value) ? null : 'Provide a valid email address';
//     },
//     password(e) {
//       e.target.classList.toggle('border-danger', !isPasswordValid(e.target.value));
//       passwordFeedback.textContent = isPasswordValid(e.target.value) ? null : 'Password must be at least 7 characters long and contain 1 capital letter and 1 symbol or number';

//       form.confirmPassword.classList.toggle('border-danger', !isPasswordMatch(e.target.value, form.confirmPassword.value));
//       confirmPasswordFeedback.textContent = isPasswordMatch(e.target.value, form.confirmPassword.value) ? null : 'Password do not match';
//     },
//     confirmPassword(e) {
//       e.target.classList.toggle('border-danger', !isPasswordMatch(form.password.value, e.target.value));
//       confirmPasswordFeedback.textContent = isPasswordMatch(form.password.value, e.target.value) ? null : 'Password do not match';
//     }
//   }[name](e);
// }

// const handleInput = e => {
//   const { name: formName, email, password, confirmPassword, btn } = form;
//   const { name } = e.target;
  
//   getElement(name, e);
  
//   btn.disabled = !validation(formName.value, email.value, password.value, confirmPassword.value);
// }

// document.addEventListener('DOMContentLoaded', () => {
//   toggleShowPassword(form.showPassword, [form.password, form.confirmPassword]);
  
//   form.name.addEventListener('input', handleInput);

//   form.email.addEventListener('input', handleInput);

//   form.password.addEventListener('input', handleInput);

//   form.confirmPassword.addEventListener('input', handleInput);
  
//   form.addEventListener('submit', e => {
//     e.preventDefault();
//     const { name, email, password, confirmPassword } = e.target;
//     const submittedValue = {
//       name: name.value,
//       email: email.value,
//       password: password.value,
//       confirmPassword: confirmPassword.value
//     };
    
//     // Check console to see the result
//     console.log(submittedValue);
//   });
// });



