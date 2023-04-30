<!DOCTYPE html>
<html>
    <head>
        <title>Boutique</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"  />
        <!-- <link rel="stylesheet" href="style.css"> -->
        <link rel="stylesheet" href="css/index.css">
    </head>
    <body>
        <section class="welcome">
            <h4> Bienvenue dans notre site de boutique en ligne ! </h4>
            Nous vendons des chaussures, pantalons, vestes et pulls.
            Découvrez nos articles ci-dessous. Pour pouvoir les acheter inscrivez-vous !
        </section>

<?php
        require 'admin/dbb.php';

        echo '<header>';
        echo '<nav class="container">';
        echo '<a href="authentification.php" class="logo">Connexion/Inscription</a>';
        echo '<a href="#footer" class="logo">Contact</a>';
        echo '</header>';

        $db = Database::connect();
        $statement = $db->prepare("SELECT * FROM categorie");
        $statement->execute();
        $categorie = $statement->fetchAll();
        
        echo '</nav>';
        echo '</header>';

        echo '<div class="tab-content">';
        foreach ($categorie as $category){
            echo '<section class="shop container">';
            // echo '<h2 class="section-title">produits de la boutique</h2>';
            echo '<div class="shop-content">';
            $statement = $db->prepare("SELECT * FROM item WHERE category = ?");
            $statement->execute(array($category['id']));
            while ($items = $statement->fetch()){
                echo '<div class="product-box">
                        <img src="img/'.$items['image'].'" class="product-img">
                        <h2 class="product-title">'.$items['description'].'</h2>
                        <span class="price">'.number_format($items['prices'], 2, '.', '').' €</span>
                        <i class="fa-solid fa-bag-shopping add-cart"></i>
                    </div>';
            }
            echo '</div>';
            echo '</section>';
        }
        Database::disconnect();
        echo '</div>';

        ?>

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
</body>

    
        
        

<script defer src="Js/index.js"></script>    
    </body>
 </html>