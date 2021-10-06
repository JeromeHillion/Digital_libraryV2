const btn_submit = document.getElementById("btn_submit");
const firstnameInput = document.getElementById("firstname");
const usernameInput = document.getElementById("username");
const emailInput = document.getElementById("email");

document.addEventListener("DOMContentLoaded", () => {

    formVerification();


});

/*
function focus() {

    for (let field of fields) {
        field.value = "";
        field.onfocus = function () {
            enableFocus(field)
        }
    }
}

function enableFocus(field) {
    field.style.backgroundColor = "#BBDEFB";

    field.onblur = function () {
        disableFocus(field)



        /!*validateEmail(mail.value);*!/
        console.log(field);
    };

}

function disableFocus(field) {
    if (field.value) {

        console.log(field);
        field.style.backgroundColor = "#ffffff";
        field.nextElementSibling.style.display = "block";


    } else {
        console.log('nope !');
        field.style.backgroundColor = "#FFCDD2";
        field.nextElementSibling.style.display = "none";

    }
    if (validateEmail(mail.value)){
        field.style.backgroundColor = "#ffffff";
        field.nextElementSibling.style.display = "block";
    }
    else {
        console.log('nope !');
        field.style.backgroundColor = "#FFCDD2";
        field.nextElementSibling.style.display = "none";
    }

}


console.log(validateEmail("anystring@anystring.fr"));
*/


function formVerification() {
    firstnameInput.value = "";
    usernameInput.value = "";
    emailInput.value = "";

    firstnameInput.onblur = () => {validation("Firstname")}
    usernameInput.onblur =() => {validation("Username")}
    emailInput.onblur = function () {
        if (emailInput.value) {
            if (validateEmail(emailInput.value)) {
                emailInput.nextElementSibling.style.display = "block";
            } else {
                console.log('Nope !');
            }

        }
    }

}

function validateName(name) {
    const regexpName = /^\w+$/;
    return regexpName.test(name);
}

function validateEmail(email) {

    const regexpEmail = /^\w+(.\w+)?@\w+.\w{1,3}$/;
    return regexpEmail.test(email)

}

function validation(id){

    let element = document.getElementById(id);
    if (element.value) {
        console.log(element.value);
        if (validateName(element.value)) {
            document.getElementById("check" + id ).style.display = "block";
        } else {
            document.getElementById("error" + id).style.display = "block";
            console.log('Nope !');
        }

    }
}

