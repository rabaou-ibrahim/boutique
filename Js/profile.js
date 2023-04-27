var ShopLink = document.getElementById("shop-link")
var ProfileLink = document.getElementById("profile-link")
var LogOutLink = document.getElementById("logout-link")
var ShowProfileFormBtn = document.getElementById("show-profile-form-btn")
var ProfileForm = document.getElementById("profile-form")
var LoginForm = document.getElementById("login-form")
var EmailForm = document.getElementById("email-form")
var PasswordForm = document.getElementById("password-form")
var ConfirmedPasswordForm = document.getElementById("confirmed-password-form")
var SubmitBtnLogin = document.getElementById("submit-change-login")
var SubmitBtnEmail = document.getElementById("submit-change-email")
var SubmitBtnPassword = document.getElementById("submit-change-password")
var SubmitChangeLoginBtn = document.getElementById("submit-new-login")
var SubmitChangeEmailBtn = document.getElementById("submit-new-email")
var SubmitChangePasswordBtn = document.getElementById("submit-new-password")
var SubmitChangeConfirmedPasswordBtn = document.getElementById("submit-new-confirmed-password")
var Welcome2 = document.getElementById("welcome-2")
var LogCrossClose = document.getElementById("log-close")
var EmailCrossClose = document.getElementById("email-close")
var PasswordCrossClose = document.getElementById("password-close")
var ConfirmedPasswordCrossClose = document.getElementById("confirmed-password-close")
var LogMessage = document.getElementById("log-message")
var EmailMessage = document.getElementById("email-message")
var PasswordMessage = document.getElementById("password-message")
var ConfirmedPasswordMessage = document.getElementById("confirmed-password-message")

//* FONCTION AU CHARGEMENT DE LA PAGE POUR CACHER DES ELEMENTS *//

function init () {
    LoginForm.style.display = 'none'
    EmailForm.style.display = 'none'
    PasswordForm.style.display = 'none'
    ConfirmedPasswordForm.style.display = 'none'
}

window.onload = init

// * EVENEMENTS ONMOUSEOVER *//

ShopLink.addEventListener("mouseover", function () {
    ShopLink.style.color = 'red'
    ShopLink.style.textDecoration = 'underline';
})

ShopLink.addEventListener("mouseout", function () {
    ShopLink.style.color = '#088178'
    ShopLink.style.textDecoration = 'none';
})

ProfileLink.addEventListener("mouseover", function () {
    ProfileLink.style.color = 'red'
    ProfileLink.style.textDecoration = 'underline';
})

ProfileLink.addEventListener("mouseout", function () {
    ProfileLink.style.color = '#088178'
    ProfileLink.style.textDecoration = 'none';
})

LogOutLink.addEventListener("mouseover", function () {
    LogOutLink.style.color = 'red'
    LogOutLink.style.textDecoration = 'underline';
})

LogOutLink.addEventListener("mouseout", function () {
    LogOutLink.style.color = '#088178'
    LogOutLink.style.textDecoration = 'none';
})

SubmitBtnLogin.addEventListener("mouseover", function () {
    SubmitBtnLogin.style.backgroundColor = "#088178";
    SubmitBtnLogin.style.color = "white";
})

SubmitBtnLogin.addEventListener("mouseout", function () {
    SubmitBtnLogin.style.backgroundColor = "#e3e6f3";
    SubmitBtnLogin.style.color = "black";
})

SubmitBtnEmail.addEventListener("mouseover", function () {
    SubmitBtnEmail.style.backgroundColor = "#088178";
    SubmitBtnEmail.style.color = "white";
})

SubmitBtnEmail.addEventListener("mouseout", function () {
    SubmitBtnEmail.style.backgroundColor = "#e3e6f3";
    SubmitBtnEmail.style.color = "black";
})

SubmitBtnPassword.addEventListener("mouseover", function () {
    SubmitBtnPassword.style.backgroundColor = "#088178";
    SubmitBtnPassword.style.color = "white";
})

SubmitBtnPassword.addEventListener("mouseout", function () {
    SubmitBtnPassword.style.backgroundColor = "#e3e6f3";
    SubmitBtnPassword.style.color = "black";
})

SubmitChangeConfirmedPasswordBtn.addEventListener("mouseover", function () {
    SubmitChangeConfirmedPasswordBtn.style.backgroundColor = "#088178";
    SubmitChangeConfirmedPasswordBtn.style.color = "white";
})

SubmitChangeConfirmedPasswordBtn.addEventListener("mouseout", function () {
    SubmitChangeConfirmedPasswordBtn.style.backgroundColor = "#e3e6f3";
    SubmitChangeConfirmedPasswordBtn.style.color = "black";
})

SubmitChangeLoginBtn.addEventListener("mouseover", function () {
    SubmitChangeLoginBtn.style.backgroundColor = "#088178";
    SubmitChangeLoginBtn.style.color = "white";
})

SubmitChangeLoginBtn.addEventListener("mouseout", function () {
    SubmitChangeLoginBtn.style.backgroundColor = "#e3e6f3";
    SubmitChangeLoginBtn.style.color = "black";
})

SubmitChangeEmailBtn.addEventListener("mouseover", function () {
    SubmitChangeEmailBtn.style.cursor = 'pointer'
})

SubmitChangeEmailBtn.addEventListener("mouseover", function () {
    SubmitChangeEmailBtn.style.backgroundColor = "#088178";
    SubmitChangeEmailBtn.style.color = "white";
})

SubmitChangeEmailBtn.addEventListener("mouseout", function () {
    SubmitChangeEmailBtn.style.backgroundColor = "#e3e6f3";
    SubmitChangeEmailBtn.style.color = "black";
})

SubmitChangePasswordBtn.addEventListener("mouseover", function () {
    SubmitChangePasswordBtn.style.cursor = 'pointer'
})

SubmitChangePasswordBtn.addEventListener("mouseover", function () {
    SubmitChangePasswordBtn.style.backgroundColor = "#088178";
    SubmitChangePasswordBtn.style.color = "white";
})

SubmitChangePasswordBtn.addEventListener("mouseout", function () {
    SubmitChangePasswordBtn.style.backgroundColor = "#e3e6f3";
    SubmitChangePasswordBtn.style.color = "black";
})

SubmitChangeConfirmedPasswordBtn.addEventListener("mouseover", function () {
    SubmitChangeConfirmedPasswordBtn.style.cursor = 'pointer'
})

SubmitChangeConfirmedPasswordBtn.addEventListener("mouseover", function () {
    SubmitChangeConfirmedPasswordBtn.style.backgroundColor = "#088178";
    SubmitChangeConfirmedPasswordBtn.style.color = "white";
})

SubmitChangeConfirmedPasswordBtn.addEventListener("mouseout", function () {
    SubmitChangeConfirmedPasswordBtn.style.backgroundColor = "#e3e6f3";
    SubmitChangeConfirmedPasswordBtn.style.color = "black";
})

//* EVENEMENTS CLICK *//

SubmitBtnLogin.addEventListener("click", function () {
    LoginForm.style.display = 'block'
    EmailForm.style.display = 'none'
    PasswordForm.style.display = 'none'
    ConfirmedPasswordForm.style.display = 'none'
})

SubmitBtnEmail.addEventListener("click", function () {
    LoginForm.style.display = 'none'
    EmailForm.style.display = 'block'
    PasswordForm.style.display = 'none'
    ConfirmedPasswordForm.style.display = 'none'
})

SubmitBtnPassword.addEventListener("click", function () {
    LoginForm.style.display = 'none'
    EmailForm.style.display = 'none'
    ConfirmedPasswordForm.style.display = 'none'
    PasswordForm.style.display = 'block'
})

LogCrossClose.addEventListener("mouseover", function () {
    LogCrossClose.style.cursor = 'pointer'
})

EmailCrossClose.addEventListener("mouseover", function () {
    EmailCrossClose.style.cursor = 'pointer'
})

PasswordCrossClose.addEventListener("mouseover", function () {
    PasswordCrossClose.style.cursor = 'pointer'
})


LogCrossClose.addEventListener("click", function () {
    LoginForm.style.display = 'none'
    EmailForm.style.display = 'none'
    PasswordForm.style.display = 'none'
    ConfirmedPasswordForm.style.display = 'none'
})

EmailCrossClose.addEventListener("click", function () {
    LoginForm.style.display = 'none'
    EmailForm.style.display = 'none'
    PasswordForm.style.display = 'none'
    ConfirmedPasswordForm.style.display = 'none'
})

PasswordCrossClose.addEventListener("click", function () {
    PasswordForm.style.display = 'none'
    LoginForm.style.display = 'none'
    EmailForm.style.display = 'none'
    ConfirmedPasswordForm.style.display = 'none'
})

ConfirmedPasswordCrossClose.addEventListener("click", function () {
    PasswordForm.style.display = 'none'
    LoginForm.style.display = 'none'
    EmailForm.style.display = 'none'
    ConfirmedPasswordForm.style.display = 'none'
})

// TRAITEMENT DES FORMULAIRES QUAND ON SUBMIT //

document.getElementById("login-form").addEventListener("submit", function(e) {
    e.preventDefault(); // empêcher le comportement par défaut d'un formulaire

    var data = new FormData(this); // FormData est une classe JS qui sert  récupérer automatiquement les données du formulaire

    var xhr = new XMLHttpRequest(); // Objet créé à partir de la classe JS XMLHttpRequest qui ser à faire un appel asynchrone

    // on fait nos traitements

    xhr.onreadystatechange = function () { // vérifier le changement d'état de notre requête
        if (this.readyState == 4 && this.status == 200) { // readystate == 4 signifie que le formulaire a bien été envoyé
            console.log(this.response);
            var res = this.response;
            if (res.msg) {
                LogMessage.innerHTML = res.msg;
                LoginForm.appendChild(LogMessage);
            } else {
                LogMessage.innerHTML = res.msg;
                LoginForm.appendChild(LogMessage);
            }
        } else if (this.readyState == 4) {
            alert("Une erreur est survenue")
        }                            
    }


    xhr.open("POST", "./PHP/profileLogScript.php", true); // true spécifie que l'on veut faire une requête asynchrone
    xhr.responseType = "json";
    xhr.send(data); // Envoi de la requête (data ayant les données du formulaire) 

    return false;
})

document.getElementById("email-form").addEventListener("submit", function(e) {
    e.preventDefault(); // empêcher le comportement par défaut d'un formulaire!

    var data = new FormData(this); // FormData est une classe JS qui sert  récupérer automatiquement les données du formulaire

    var xhr = new XMLHttpRequest(); // Objet créé à partir de la classe JS XMLHttpRequest qui ser à faire un appel asynchrone

    // on fait nos traitements

    xhr.onreadystatechange = function () { // vérifier le changement d'état de notre requête
        if (this.readyState == 4 && this.status == 200) { // readystate == 4 signifie que le formulaire a bien été envoyé
            console.log(this.response);
            var res = this.response;
            if (res == null) {
                EmailForm.appendChild(EmailMessage);
            } else {
                EmailMessage.innerHTML = res.msg;
                EmailForm.appendChild(EmailMessage);
            }
        } else if (this.readyState == 4) {
            alert("Une erreur est survenue")
        }                            
    }


    xhr.open("POST", "./PHP/profileEmailScript.php", true); // true spécifie que l'on veut faire une requête asynchrone
    xhr.responseType = "json";
    xhr.send(data); // Envoi de la requête (data ayant les données du formulaire) 

    return false;
})

document.getElementById("password-form").addEventListener("submit", function(e) {
    e.preventDefault(); // empêcher le comportement par défaut d'un formulaire!

    var data = new FormData(this); // FormData est une classe JS qui sert  récupérer automatiquement les données du formulaire

    var xhr = new XMLHttpRequest(); // Objet créé à partir de la classe JS XMLHttpRequest qui ser à faire un appel asynchrone

    // on fait nos traitements

    xhr.onreadystatechange = function () { // vérifier le changement d'état de notre requête
        if (this.readyState == 4 && this.status == 200) { // readystate == 4 signifie que le formulaire a bien été envoyé
            console.log(this.response);
            var res = this.response;
            if (res.success) {
                LoginForm.style.display = 'none'
                EmailForm.style.display = 'none'
                PasswordForm.style.display = 'none'
                ConfirmedPasswordForm.style.display = 'block' 
            } else {
                PasswordMessage.innerHTML = res.msg;
                PasswordForm.appendChild(PasswordMessage);
            }
        } else if (this.readyState == 4) {
            alert("Une erreur est survenue")
        }                            
    }


    xhr.open("POST", "./PHP/profilePasswordScript.php", true); // true spécifie que l'on veut faire une requête asynchrone
    xhr.responseType = "json";
    xhr.send(data); // Envoi de la requête (data ayant les données du formulaire) 

    return false;
})

document.getElementById("confirmed-password-form").addEventListener("submit", function(e) {
    e.preventDefault(); // empêcher le comportement par défaut d'un formulaire!

    var data = new FormData(this); // FormData est une classe JS qui sert  récupérer automatiquement les données du formulaire

    var xhr = new XMLHttpRequest(); // Objet créé à partir de la classe JS XMLHttpRequest qui ser à faire un appel asynchrone

    // on fait nos traitements

    xhr.onreadystatechange = function () { // vérifier le changement d'état de notre requête
        if (this.readyState == 4 && this.status == 200) { // readystate == 4 signifie que le formulaire a bien été envoyé
            console.log(this.response);
            var res = this.response;
            if (res.success) {
                ConfirmedPasswordMessage.innerHTML = res.msg;
                ConfirmedPasswordForm.appendChild(ConfirmedPasswordMessage);
            } else {
                ConfirmedPasswordMessage.innerHTML = res.msg;
                ConfirmedPasswordForm.appendChild(ConfirmedPasswordMessage);
            }
        } else if (this.readyState == 4) {
            alert("Une erreur est survenue")
        }                            
    }


    xhr.open("POST", "./PHP/profileConfirmedPasswordScript.php", true); // true spécifie que l'on veut faire une requête asynchrone
    xhr.responseType = "json";
    xhr.send(data); // Envoi de la requête (data ayant les données du formulaire) 

    return false;
})
