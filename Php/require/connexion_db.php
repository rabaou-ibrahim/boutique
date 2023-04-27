<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "boutique";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Echec de connexion " . $conn->connect_error);
}

?>