<?php
    session_start();
    if (empty($_SESSION)){
        header("location:Php/require/warning.php");
    }
?>
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
        <link rel="stylesheet" href="css/shop.css">
    </head>
    <body>
        <!-- buy div (cachée dès le chargement de la page) -->
        <section id="buy-div" class="buy-div">
                <h2> Votre achat :</h2>
                <div id="cart-content-final" class="cart-content-final">
    
                </div>             
                <div class="buttons">
                    <a href="pay.php"><button type="button" class="btn-buy-confirmed">Confirmer achat</button></a>
                    <button type="button" class="btn-buy-cancelled">Annuler</button>
                </div>
        </section>
    <?php
        require 'admin/dbb.php';

        echo '<header>';
        echo '<nav class="container">';
        echo '<a href="Php/require/logout.php" class="logo">Me déconnecter</a>';
        echo '<a href="profil.php" class="logo">Mon profil</a>';
        echo '<i class="fa-solid fa-bag-shopping" id="cart-icon"></i>';
        echo '</header>';

        $db = Database::connect();
        $statement = $db->prepare("SELECT * FROM categorie");
        $statement->execute();
        $categorie = $statement->fetchAll();
        foreach ($categorie as $category)
        {
            echo '<div class="cart">';
            echo '<h2 class="cart-title">Votre panier</h2>';
            echo '<div class="cart-content">
                    <div class="cart-box">
                        <img src="img/n1.jpg" class="cart-img">
                        <div class="detail-box">
                            <div class="cart-product-title">Shirt</div>
                            <div class="cart-price">35.04€</div>
                            <input type="number" value="1" class="cart-quantity"> 
                        </div>
                        <i class="fa-sharp fa-solid fa-trash cart-remove"></i>
                    </div>
                </div>';  
                        
            echo '<div class="total">
                    <div class="total-title">Total</div>
                    <div class="total-price">0€</div>
                </div>';

            echo '<button type="button" class="btn-buy">Acheter maintenant</button>';
            echo '<i class="fa-solid fa-x" id="close-cart"></i>';
            echo '</div>';
        }
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

    </body>

    
        
        

<script defer src="Js/script.js"></script>    
    </body>
 </html>



