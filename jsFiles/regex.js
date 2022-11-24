
let signup = document.querySelector(".registervalidation");

let inputs = document.querySelectorAll("input");
let fname = document.querySelector(".fname");
let lname = document.querySelector(".lname");
let email = document.querySelector(".email");
let password = document.querySelector(".password");


let fname_error = document.querySelector(".fname_error");
let lname_error = document.querySelector(".lname_error");
let email_error = document.querySelector(".email_error");
let password_error = document.querySelector(".pass_error");


let email_regex = /^[a-zA-Z]+@[a-zA-Z]+.com$/;
let password_regex = /^[a-zA-Z0-9]{6,}$/;
let name_regex = /^[a-zA-Z]{3,}$/;

signup.disabled=true;

inputs.forEach(input => {
    input.addEventListener("keyup", function() {
        validateEmail();
        validatePassword();
        validateName();
        validatelName();
        if((email_regex.test(email.value)) && (password_regex.test(password.value)) && (name_regex.test(fname.value)) && (name_regex.test(lname.value))){
            signup.disabled=false;
        }else{
            signup.disabled=true;
        }
           })
});

function validateEmail() {
    if (email_regex.test(email.value)) {
        email.classList.remove("text-danger");
        email_error.innerHTML = "";
    } else {
        email.classList.add("text-danger");
        email_error.innerHTML = "Invalid email";
    }
}
function validatePassword() {
    if (password_regex.test(password.value)) {
        password.classList.remove("text-danger");
        password_error.innerHTML = "";
        
    } else {
        password.classList.add("text-danger");
        password_error.innerHTML = "Invalid password";
    }
}
function validateName() {
    if (name_regex.test(fname.value)){
        fname.classList.remove("text-danger");
        fname_error.innerHTML = "";
    } else {
        fname.classList.add("text-danger");
        fname_error.innerHTML = "Invalid name";
    }
}
function validatelName() {
    if (name_regex.test(lname.value)) {
        lname.classList.remove("text-danger");
        lname_error.innerHTML = "";
    } else {
        lname.classList.add("text-danger");
        lname_error.innerHTML = "Invalid name";
    }
}
