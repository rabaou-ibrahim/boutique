<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil</title>
  <link href='/boutique-en-ligne/Css/warning.css' rel='stylesheet'>
  <style type="text/css">a:link{text-decoration:none}</style>
</head>
<body>
    <header>
      <ul>
        <?php session_start();?>
        <a href="/boutique-en-ligne/authentification.php"><h2><li>Retour</li></h2></a>
      </ul>
    </header>
    <h3> Aïe, il semblerait qu'aucune session est ouverte, veuillez vous connecter </h3>
    <footer>
      <?php var_dump($_SESSION); ?>
    </footer>
</body>