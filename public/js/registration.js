const btn_submit = document.getElementById("btn_submit");
const firstnameInput = document.getElementById("firstname");
const usernameInput = document.getElementById("username");
const emailInput = document.getElementById("email");
const passwordInput = document.getElementById("password");
const verifPasswordInput = document.getElementById("verifPassword");
let check = document.getElementById("checkFirstname");

document.addEventListener("DOMContentLoaded", () => {
    formVerification();
});


function formVerification() {
    firstnameInput.value = "";
    usernameInput.value = "";
    emailInput.value = "";

    firstnameInput.onblur = function () {
        if (firstnameInput.value) {
            if (validateName(firstnameInput.value)) {
                firstnameInput.nextElementSibling.classList.remove("check");
                firstnameInput.nextElementSibling.nextElementSibling.classList.add("error");
            }
        } else {
            /*  console.log('Nope !'); */
            firstnameInput.nextElementSibling.classList.add("check");
            firstnameInput.nextElementSibling.nextElementSibling.classList.remove("error");
        }
    };

    usernameInput.onblur = function () {
        if (usernameInput.value) {
            if (validateName(usernameInput.value)) {
                usernameInput.nextElementSibling.classList.remove("check");
                usernameInput.nextElementSibling.nextElementSibling.classList.add("error");
            }
        } else {
            /*  console.log('Nope !'); */
            usernameInput.nextElementSibling.classList.add("check");
            usernameInput.nextElementSibling.nextElementSibling.classList.remove("error");
        }
    };
    /* usernameInput.onblur =() => {validation("username")} */
    emailInput.onblur = function () {
        if (emailInput.value && validateEmail(emailInput.value)) {
            emailInput.nextElementSibling.classList.remove("check");
            emailInput.nextElementSibling.nextElementSibling.classList.add("error");
            console.log('Ouep !')
        } else {
            emailInput.nextElementSibling.classList.add("check");
            emailInput.nextElementSibling.nextElementSibling.classList.remove("error");
            console.log('Nope !');
        }
    };

}

function validateName(name) {
    const regexpName = /^\w+$/;
    return regexpName.test(name);
}

function validateEmail(email) {
    const regexpEmail = /^\w+(.\w+)?@\w+.\w{1,3}$/;
    return regexpEmail.test(email);
}

function deleteNode(node) {
}

/* function validation(id){

    let element = document.getElementById(id);
    id[0].toUpperCase() + id.slice(1);
    if (element.value) {
        console.log(element.value);
        if (validateName(element.value)) {
            document.getElementById("check" + id[0].toUpperCase() + id.slice(1) ).style.display = "block";
            console.log(document.getElementById("check" + id[0].toUpperCase() + id.slice(1)));
        } else {
            document.getElementById("error" + id[0].toUpperCase() + id.slice(1)).style.display = "block";
            console.log('Nope !');
        }

    }
    console.log(document.getElementById("error" + id[0].toUpperCase() + id.slice(1)));

} */
