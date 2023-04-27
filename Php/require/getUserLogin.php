<?php
    require_once('connexion_db.php');
    $sql = "SELECT * FROM utilisateurs WHERE '$_SESSION[id]' = id";
    $result = mysqli_query($conn, $sql); // Compter le nombre de ligne ayant rapport a la requette SQL
    $row = mysqli_fetch_assoc($result);
    $password = "";
    for ($i=0; $i<strlen($row['password']); $i++) {
        $password .= "*";
    }
?>