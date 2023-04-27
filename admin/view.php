<?php
    require 'dbb.php';

    if(!empty($_GET['id'])) {
        $id = checkInput($_GET['id']);
    }
     
    $db = Database::connect();
    $statement = $db->prepare("SELECT item.id, item.name, item.description, item.prices, item.image, categorie.name AS category FROM item LEFT JOIN categorie ON item.category = categorie.id WHERE item.id = ?");
    $statement->execute(array($id));
    $items = $statement->fetch();
    Database::disconnect();

    function checkInput($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

?>

<!DOCTYPE html>
<html>
    <head>
      <title>Admin - Voir</title>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
      <link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
      <link rel="stylesheet" href="../css/styles.css">
    </head>
    
    <body>
      <h1 class="text-logo"><span class="bi-shop"></span> Admin <span class="bi-shop"></span></h1>
      <div class="container admin">
        <div class="row">
          <div class="col-md-6">
            <h1><strong>Voir un item</strong></h1>
            <br>
            <form>
              <div>
                <label>Nom:</label><?php echo '  '.$items['name'];?>
              </div>
              <br>
              <div>
                <label>Description:</label><?php echo '  '.$items['description'];?>
              </div>
              <br>
              <div>
                <label>Prix:</label><?php echo '  '.number_format((float)$items['prices'], 2, '.', ''). ' €';?>
              </div>
              <br>
              <div>
                <label>Catégorie:</label><?php echo '  '.$items['category'];?>
              </div>
              <br>
              <div>
                <label>Image:</label><?php echo '  '.$items['image'];?>
              </div>
            </form>
            <br>
            <div class="form-actions">
              <a class="btn btn-primary" href="index.php"><span class="bi-arrow-left"></span> Retour</a>
            </div>
          </div>
          <div class="col-md-6 site">
            <div class="img-thumbnail">
              <img src="<?php echo '../img/'.$items['image'];?>" alt="...">
              <div class="prices"><?php echo number_format((float)$items['prices'], 2, '.', ''). ' €';?></div>
              <div class="caption">
                <h4><?php echo $items['name'];?></h4>
                <p><?php echo $items['description'];?></p>
              </div>
            </div>
          </div>
        </div>
      </div>   
    </body>
</html>