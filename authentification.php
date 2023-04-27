<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Authentification</title>
  <link href='Css/authentification.css' rel='stylesheet'>
  <style type="text/css">a:link{text-decoration:none}</style>
</head>
<body>
    <header>
        <ul class="navbar" id="navbar">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="#footer">Contact</a></li>
        </ul>
    </header>

    <div id="authentification" class="authentification">
        <div id="reg-title" class="reg-title">
            <h2>Inscription</h2>
        </div>
        <div class="line"></div>
        <div id="connexion-title" class="connexion-title">
            <h2>Connexion</h2>
        </div>
    </div>

    <div class="reg-div" id="reg-div">
        <form id="registration" class="registration" method="post">
            <input type="text" id="registration-login" placeholder="Pseudo" name="pseudo" autocomplete="off"><br>
            <input type="email" id="registration-email" placeholder="Email" name="email" autocomplete="off"><br>
            <input type="password" id="registration-password" placeholder="Mot de passe" name="mdp" autocomplete="off"><br>
            <input type="password" id="registration-confirmed-password" placeholder="Confirmation de mot de passe" name="confirmed-mdp" autocomplete="off"><br>
            <input type="submit" id="registration-reg-submit-btn" value="Inscription">
            <div id="reg-message" class="reg-message">
            
            </div>
        </form>
    </div>

    
    
    <div class="log-div" id="log-div">
        <form id="connexion" class="connexion" method="post">
            <input type="text" id="connexion-login" placeholder="Pseudo" name="log-pseudo" autocomplete="off"><br>
            <input type="password" id="connexion-password" placeholder="Mot de passe" name="log-mdp" autocomplete="off"><br>
            <input type="submit" id="connexion-log-submit-btn" value="Connexion">
            <div id="log-message" class="log-message">
                
            </div>
        </form>
    </div>

    <div class="empty-div" id="empty-div">
        <form id="empty-form" class="empty-form" method="post">
          <h4 id="empty-div-message">Identifiez-vous !</h4>
        </form> 
    </div>

    <div id="footer" class="footer">
      <div class="footer-content">
  
        <div class="footer-section about">
          <h2>Adresses mail</h2>
          <p>

          </p>
          <div class="contact">
            <span><i class="fas fa-envelope"></i> &nbsp; rabaou.ibrahim@laplateforme.io</span>
            <span><i class="fas fa-envelope"></i> &nbsp; adam-abdallah.abakar@laplateforme.io</span>
          </div>
        </div>
  
        <div class="footer-section links">
          <h2>Liens utiles</h2>
          <br>
          <ul>
            <a href="https://linkedin.com/in/rabaou-ibrahim-92897124b/" target="_blank">
              <li>LinkedIn de Rabaou</li>
            </a>
            <a href="https://github.com/rabaou-ibrahim" target="_blank">
              <li>GitHub de Rabaou</li>
            </a>
            <a href="https://www.linkedin.com/in/adam-abdallah-abakar-9585a8259/" target="_blank">
              <li>LinkedIn d'Adam</li>
            </a>
            <a href="https://github.com/abakar-adam-abdallah" target="_blank">
              <li>GitHub d'Adam</li>
            </a>
          </ul>
        </div>
  
        <div class="footer-section contact-form">
          <h2>Nos sites persos</h2>
          <br>
            <li><span><i class="fas fa-envelope"></i> &nbsp; <a href="https://rabaou-ibrahim.students-laplateforme.io/" target="_blank">https://rabaou-ibrahim.students-laplateforme.io/</a></span></li>
            <br>
            <li><span><i class="fas fa-envelope"></i> &nbsp; <a href="https://adam-abdallah-abakar.students-laplateforme.io/" target="_blank">https://adam-abdallah-abakar.students-laplateforme.io/</a></span></li>
        </div>
  
      </div>
    </div>

    <script src="Js/authentification.js"></script>
</body>