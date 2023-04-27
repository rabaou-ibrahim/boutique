<?php
    session_start();
    session_destroy();
    header("location:/boutique-en-ligne/authentification.php");
?>

