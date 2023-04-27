<?php
    session_start();
    if (empty($_SESSION)){
        header("location:Php/require/warning.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil</title>
  <link href='Css/profile.css' rel='stylesheet'>
  <style type="text/css">a:link{text-decoration:none}</style>
</head>
<body>
    <header>
      <ul>
        <a href="#welcome-2"><li id="profile-link">Mon profil</li></a>
        <a href="shop.php"><li id="shop-link">Boutique</li></a>
        <a href="Php/require/logout.php"><li id="logout-link">Déconnexion</li></a>
      </ul>
    </header>

    <section class="shop">
        <section class="shop-img" id="shop-img">
        <p> Voici un de nos articles. </p>
          <div class="img">
            <?php 
              require('Php/require/getRandomImg.php'); 
              echo getRandomImage("Img/shop");      
            ?>
          </div>
        </section>
        <section class="shop-message">
          <?php require_once('Php/require/getUserLogin.php'); echo "<h2> $row[login] </h2>"; ?> pour profiter de nos nouveaux articles, rdv ici : 
          <a href="shop.php"> <button> Boutique </button> </a>
        </section>
    </section>

    <section class="profile-1">

        <div id="welcome">
            <h2>
              <?php 
                  require_once('Php/require/getUserLogin.php');
                  echo "Hey <h1> $row[login] </h1>";
              ?>
            </h2>
            <p>Si vous souhaitez modifier vos coordonnées c'est par ici !</p>
            <section id="disclaimer">ATTENTION : les changements s'affichent en actualisant la page</section>
        </div>

        <div id="welcome-2" class="welcome-2">

            <h3>Numéro utilisateur : 
              <?php require_once('Php/require/getUserLogin.php');
                echo "<h3> $row[id] </h3>"; 
              ?>
            </h3>

            <div class="profile-pic">
              <img src="Img/profile-pic.webp" width="100px" height="100px">
            </div>

            <div class="profile-form" id="profile-form">
              <h3>Mes coordonnées</h3>
              <label for="new-login">Login : <?php echo $row['login'] ?></label>
              <input id="submit-change-login" class="submit-change-login" type="submit" value="Changer">
              <label for="new-email">Email : <?php echo $row['email'] ?></label>
              <input id="submit-change-email" class="submit-change-email" type="submit" value="Changer">
              <label for="new-password">Mot de passe : <?php echo $password ?></label>
              <input id="submit-change-password" class="submit-change-password" type="submit" value="Changer">
            </div> 

            <form class="login-form" id="login-form">
              <div id="log-close" class="log-close"><img src="Img/red-cross.png" width="25px" height="25px"></div>
                <div class="new-login-field">
                  <label for="new-login">Nouveau login :</label>
                  <input type="text" name="new-login" autocomplete="off">
                  <input type="submit" id="submit-new-login" class="submit-new-login" value="Confirmer">
                </div>
                <div class="log-message" id="log-message"></div>
            </form>  

            <form class="email-form" id="email-form">
              <div id="email-close" class="email-close"><img src="Img/red-cross.png" width="25px" height="25px"></div>
                <div class="new-email-field">
                  <label for="new-email">Nouvel email :</label>
                  <input type="email" name="new-email" autocomplete="off">
                  <input type="submit" id="submit-new-email" class="submit-new-emails" value="Confirmer">
                </div>
                <div class="email-message" id="email-message"></div>
            </form> 

            <form class="password-form" id="password-form">
              <div id="password-close" close="password-close"><img src="Img/red-cross.png" width="25px" height="25px"></div>
              <div class="new-password-field">
                <label for="new-password-change">Nouveau mot de passe :</label>
                <input type="password" name="new-password" autocomplete="off">
                <input type="submit" id="submit-new-password" class="submit-new-password" value="Confirmer">
                <div class="password-message" id="password-message"></div>
              </div>
            </form>            

            <form class="confirmed-password-form" id="confirmed-password-form">
              <div id="confirmed-password-close" class="confirmed-password-close"><img src="Img/red-cross.png" width="25px" height="25px"></div>
              <div class="new-confirmed-password-field">
                <label for="new-password">Confirmation du nouveau mot de passe :</label>
                <input type="password" name="new-confirmed-password">
                <input type="submit" id="submit-new-confirmed-password" submit="submit-new-confirmed-password" value="Confirmer">
                <div class="confirmed-password-message" id="confirmed-password-message"></div>
              </div>
            </form>             
        </div>
      </section>

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
    <script src="Js/profile.js"></script>
</body>