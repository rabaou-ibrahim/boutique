var LogTitle = document.getElementById("connexion-title"); 
var RegTitle = document.getElementById("reg-title");
var RegForm = document.getElementById("registration");
var LogForm = document.getElementById("connexion");
var RegDiv = document.getElementById("reg-div");
var RegMessage = document.getElementById("reg-message");
var LogDiv = document.getElementById("log-div");
var LogMessage = document.getElementById("log-message");
var EmptyDiv = document.getElementById("empty-div");
var EmptyDivMessage = document.getElementById("empty-div-message")
var EmptyForm = document.getElementById("empty-form");
const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navbar');

function init(){                
    LogDiv.style.display = 'none';
    LogMessage.style.display = 'none';
    RegDiv.style.display = 'none';
    RegMessage.style.display = 'none';
    EmptyDivMessage.style.display = 'none'      
}

window.onload = init;

if(bar){
    bar.addEventListener('click', () => {
        nav.classList.add('active');
    })
}


if(close){
    close.addEventListener('click', () => {
        nav.classList.remove('active');
    })
}

//* Quelques évènements JS *//

EmptyDiv.addEventListener("mouseover", function (){
    EmptyDivMessage.style.display = 'block';
    EmptyForm.style.backgroundColor = 'rgba(255, 255, 255, 0.2)'
})

EmptyDiv.addEventListener("mouseout", function (){
    EmptyDivMessage.style.display = 'none';
    EmptyForm.style.backgroundColor = 'white'
})

// BOUTON INSCRIPTION //

RegTitle.addEventListener("mouseover", function (){
    RegTitle.style.backgroundColor = '#08817981';
    RegTitle.style.color = 'black';
})

RegTitle.addEventListener("mouseout", function (){
    RegTitle.style.backgroundColor = 'rgba(0, 0, 0, 0.1)';
    RegTitle.style.color = 'black';
})

RegTitle.addEventListener("click", function (){
    LogMessage.innerHTML = "";
    EmptyDiv.style.display = 'none'
    RegDiv.style.display = 'block';
    RegMessage.style.display = 'block';
    LogDiv.style.display = 'none';
    LogMessage.style.display = 'none';
    LogTitle.style.backgroundColor = 'rgba(0, 0, 0, 0.1)';
    LogTitle.style.color = 'black';
    LogTitle.addEventListener("mouseover", function (){
        LogTitle.style.backgroundColor = '#08817981';
        LogTitle.style.color = 'black';
    })
    // Afficher le bon formulaire //

    //  //
    LogTitle.addEventListener("mouseout", function (){
        LogTitle.style.backgroundColor = 'rgba(0, 0, 0, 0.1)';
        LogTitle.style.color = 'black';
    })
    RegTitle.style.backgroundColor = '#088178';
    RegTitle.style.color = 'white';
    RegTitle.addEventListener("mouseover", function (){
        RegTitle.style.backgroundColor = '#088178';
        RegTitle.style.color = 'white';
    })
    RegTitle.addEventListener("mouseout", function (){
        RegTitle.style.backgroundColor = '#088178';
        RegTitle.style.color = 'white';
    })
})

// BOUTON CONNEXION //

LogTitle.addEventListener("mouseover", function (){
    LogTitle.style.backgroundColor = '#08817981';
    LogTitle.style.color = 'black';
})

LogTitle.addEventListener("mouseout", function (){
    LogTitle.style.backgroundColor = 'rgba(0, 0, 0, 0.1)';
    LogTitle.style.color = 'black';
})

LogTitle.addEventListener("click", function (){
    RegMessage.innerHTML = "";
    EmptyDiv.style.display = 'none'
    RegDiv.style.display = 'none';
    RegMessage.style.display = 'none';
    LogDiv.style.display = 'block';
    LogMessage.style.display = 'block';
    RegTitle.style.backgroundColor = 'rgba(0, 0, 0, 0.1)';
    RegTitle.style.color = 'black'; 
    RegTitle.addEventListener("mouseover", function (){
        RegTitle.style.backgroundColor = '#08817981';
        RegTitle.style.color = 'black';
    })   
    RegTitle.addEventListener("mouseout", function (){
        RegTitle.style.backgroundColor = 'rgba(0, 0, 0, 0.1)';
        RegTitle.style.color = 'black';
    })

    LogTitle.style.backgroundColor = '#088178';
    LogTitle.style.color = 'white';
    LogTitle.addEventListener("mouseover", function (){
        LogTitle.style.backgroundColor = '#088178';
        LogTitle.style.color = 'white';
    })
    LogTitle.addEventListener("mouseout", function (){
        LogTitle.style.backgroundColor = '#088178';
        LogTitle.style.color = 'white';
    })
})


// EVENTS SUBMIT BUTTONS //

RegSubmitBtn = document.getElementById("registration-reg-submit-btn");
LogSubmitBtn = document.getElementById("connexion-log-submit-btn");

RegSubmitBtn.addEventListener("mouseover", function () {
    RegSubmitBtn.style.backgroundColor = "#088178";
    RegSubmitBtn.style.color = "white";
    RegSubmitBtn.style.cursor = "pointer";
})

RegSubmitBtn.addEventListener("mouseout", function () {
    RegSubmitBtn.style.backgroundColor = "white";
    RegSubmitBtn.style.color = "black";
})

LogSubmitBtn.addEventListener("mouseover", function () {
    LogSubmitBtn.style.backgroundColor = "#088178";
    LogSubmitBtn.style.color = "white";
    LogSubmitBtn.style.cursor = "pointer";
})

LogSubmitBtn.addEventListener("mouseout", function () {
    LogSubmitBtn.style.backgroundColor = "white";
    LogSubmitBtn.style.color = "black";
})

// INPUT/INVALID EVENTS //

// //

// TRAITEMENT DU FORMULAIRE QUAND ON SUBMIT //

document.getElementById("registration").addEventListener("submit", function(e) {
    e.preventDefault(); // empêcher le comportement par défaut d'un formulaire

    var data = new FormData(this); // FormData est une classe JS qui sert  récupérer automatiquement les données du formulaire

    var xhr = new XMLHttpRequest(); // Objet créé à partir de la classe JS XMLHttpRequest qui ser à faire un appel asynchrone

    // on fait nos traitements

    xhr.onreadystatechange = function () { // vérifier le changement d'état de notre requête
        if (this.readyState == 4 && this.status == 200) { // readystate == 4 signifie que le formulaire a bien été envoyé
            console.log(this.response);
            var res = this.response;
            if (res == null) {
                RegMessage.innerHTML = "<p style='color:green'> Inscription réussie </p>";
                RegForm.appendChild(RegMessage);
            } else {
                RegMessage.innerHTML = res.msg;
                RegForm.appendChild(RegMessage);
            }
        } else if (this.readyState == 4) {
            alert("Une erreur est survenue")
        }                            
    }


    xhr.open("POST", "./PHP/regScript.php", true); // true spécifie que l'on veut faire une requête asynchrone
    xhr.responseType = "json";
    xhr.send(data); // Envoi de la requête (data ayant les données du formulaire) 

    return false;
})

document.getElementById("connexion").addEventListener("submit", function(e) {
    e.preventDefault();

    var data = new FormData(this); // FormData est une classe JS qui sert  récupérer automatiquement les données du formulaire

    var xhr = new XMLHttpRequest();

    var LogMessage = document.getElementById("log-message");


    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.response);
            var res = this.response;
            if (res == null) { 
                window.location="/boutique-en-ligne/profile.php"; 
            } else {
                LogMessage.innerHTML = res.msg;
                LogForm.appendChild(LogMessage);
            }
        } else if (this.readyState == 4) {
            alert("Une erreur est survenue")
        }
    };

    xhr.open("POST", "./PHP/logScript.php", true);
    xhr.responseType = "json";
    // xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send(data);

    return false;
})