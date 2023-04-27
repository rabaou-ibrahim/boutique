<?php
session_start();
$success = 0;
$msg = "Une erreur est survenue (script.php)";

if (!empty($_POST['new-password']))
    {
        $newPassword = htmlspecialchars((strip_tags($_POST['new-password'])));         
        if (strlen($newPassword) < 25) 
        {   
            include('require/connexion_db.php');
            $sql = "SELECT password FROM utilisateurs WHERE password = '$newPassword'";
            $result = $conn->query($sql);
            if (mysqli_num_rows($result) == 0) {
                    $success = 1;
                    $msg = "";
                    $_SESSION['temporary-password'] = $newPassword;
                }
                else {
                    $msg = "<p style='color:red'> Mot de passe déjà pris </p>";
                }
        }  
        else {
            $msg = "<p style='color:red'> Votre mot de passe ne peut pas dépasser 25 caractères </p>";
        }
    }
    else {
        $msg = "<p style='color:red'> Veuillez renseigner ce champ </p>";
    }

$res = ["success" => $success, "msg" => $msg];
echo json_encode($res);
?>