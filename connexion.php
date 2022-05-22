<?php
session_start();
if(isset($_SESSION["user"])){
    header('Location: ./session/account.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <title>Connexion admin - messages</title>
</head>
<body>
    
<form action="./session/connectConfirm.php" method="post">
    <input type="email" name="email" id="email" placeholder="votre email" required>
    <input type="password" name="password" id="password" placeholder="mot de passe" required>

    <button type="submit">Se connecter</button>
</form>

<style>
    body{
        background: black;
    }

    form{
        width: 80%;
        max-width: 650px;
        margin: 80px auto;
    }form label{
        color: white;
    }
</style>

</body>
</html>