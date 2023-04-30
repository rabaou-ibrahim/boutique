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
        <title>Paiement</title>
        <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"  />
        <link rel="stylesheet" href="Css/pay.css">
        
    </head>

    <body>
        <div class="container">
            <form action="">
        
                <div class="row">
                    <div class="col">
                        <h3 class="title">Adresse de facturation</h3>
                        <div class="inputBox">
                            <label for="nom">Nom complet :</label>
                            <input type="text" id="nom" placeholder="John Doe">
                        </div>
                        <div class="inputBox">
                            <span>Email:</span>
                            <input type="text" placeholder="exemple@exemple.com">

                        </div>
                        <div class="inputBox">
                            <span>Adresse: </span>
                            <input type="text" placeholder="rue-localité">
                        </div>
                        <div class="inputBox">
                            <span>Ville: </span>
                            <input type="text" placeholder="marseille">
                        </div>
                        <div class="flex">
                            <div class="inputBox">
                                <span>État: </span>
                                <input type="text" placeholder="france">
                            </div>
                            <div class="inputBox">
                                <span>Code postal: </span>
                                <input type="text" placeholder="13000">
                            </div>
                        </div>
                    </div>
                  
                    <div class="col">
                        <h3 class="title">Payement</h3>
                        <div class="inputBox">
                            <span>Cartes acceptées: </span>
                            <img src="img/pay.png">
               

                        </div>
                        <div class="inputBox">
                            <label for="nom">Nom de la carte:</label>
                            <input type="text" id="nom" placeholder="mr.John Doe">
                        </div>
                        <div class="inputBox">
                            <span>Numéro de carte de crédit: </span>
                            <input type="number" placeholder="5555 3333 0000 9988">
                        </div>
                        <div class="inputBox">
                            <span>Mois d'expiration: </span>
                            <input type="text" placeholder="Janvier">
                        </div>
                        <div class="flex">
                            <div class="inputBox">
                                <span>Année d'expiration </span>
                                <input type="number" placeholder="2023">
                            </div>
                            <div class="inputBox">
                                <span>Cvv </span>
                                <input type="text" placeholder="1234">
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                <input type="submit" value="Passer à la caisse" class="submit-btn">
                <input type="submit" value="Annuler" class="submit-btn" id="cancel-btn">
                
            </form>
        </div>
        
        
    </body>
    <script src="Js/pay.js"></script>
</html>