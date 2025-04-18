<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexionbdd</title>
</head>
<body>
<?php
    $host = "localhost";
    $user = "root";
    $bdd = "projet_ifall";
    $passwd = "";
    $connect = mysqli_connect($host, $user,$passwd);
    // Connexion au serveur
    if (!$connect) { 
        die('Erreur de connexion');
    }
    mysqli_select_db($connect, $bdd) or die("erreur de connexion a la base de donnees");
?>
</body>
</html>