<!DOCTYPE html>
<html>
    <head>
        <title>Admin - Index</title>
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
                <h1><strong>Liste des items   </strong><a href="insert.php" class="btn btn-success btn-lg"><span class="bi-plus"></span> Ajouter</a></h1>
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Nom</th>
                      <th>Description</th>
                      <th>Prix</th>
                      <th>Catégorie</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                      require 'dbb.php';
                      $db = Database::connect();
                      $statement = $db->query('SELECT item.id, item.name, item.description, item.prices, categorie.name AS category FROM item LEFT JOIN categorie ON item.category = categorie.id ORDER BY item.id DESC');
                      while($items = $statement->fetch()) {
                          echo '<tr>';
                          echo '<td>'. $items['name'] . '</td>';
                          echo '<td>'. $items['description'] . '</td>';
                          echo '<td>'. number_format($items['prices'], 2, '.', '') . '</td>';
                          echo '<td>'. $items['category'] . '</td>';
                          echo '<td width=340>';
                          echo '<a class="btn btn-secondary" href="view.php?id='.$items['id'].'"><span class="bi-eye"></span> Voir</a>';
                          echo ' ';
                          echo '<a class="btn btn-primary" href="update.php?id='.$items['id'].'"><span class="bi-pencil"></span> Modifier</a>';
                          echo ' ';
                          echo '<a class="btn btn-danger" href="delete.php?id='.$items['id'].'"><span class="bi-x"></span> Supprimer</a>';
                          echo '</td>';
                          echo '</tr>';
                      }
                      Database::disconnect();
                  ?>
                                          
                      
                  </tbody>
                </table>
            </div>
        </div>
        
    </body>
</html>