<?php
session_start();
$success = 0;
$msg = "Une erreur est survenue (Fichier script)";

if (!empty($_POST['new-email']))
    {
        $newLogEmail = htmlspecialchars((strip_tags($_POST['new-email'])));
                
        if (strlen($newLogEmail) < 50) 
        {   
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
            {
                include('require/connexion_db.php');
                $sql = "SELECT email FROM utilisateurs WHERE email = '$newLogEmail'";
                $result = $conn->query($sql);
                if (mysqli_num_rows($result) == 0) {
                    $sql = "UPDATE utilisateurs SET email = '$newLogEmail' WHERE id = '$_SESSION[id]'"; 
                    $result = $conn->query($sql);
                    if ($conn->query($sql) === TRUE) {
                        $success = 1;
                        $msg = "<p style='color:green'> Modification prise en compte :) ! </p>";
                    }
                    else {
                        $msg = "<p style='color:red'> Echec de la requête </p>";
                    }
                }
                else {
                    $msg = "<p style='color:red'> Email déjà pris </p>";
                }
            } 
            else {
                $msg = "<p style='color:red'> Adresse email invalide </p>";
            }
        }
        else {
            $msg = "<p style='color:red'> Votre email ne peut pas dépasser 50 caractères </p>";
        }
    }
    else {
        $msg = "<p style='color:red'> Veuillez renseigner ce champ </p>";
    }

$res = ["success" => $success, "msg" => $msg];
echo json_encode($res);
?>