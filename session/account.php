<?php
session_start();
if(!isset($_SESSION["user"]["id"]) == 1){
    header('Location: ../index.php');
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

    <title>Mon compte</title>
</head>
<body>
    
<button class="general_btn" id="mdp_btn">Définir un nouveau mot de passe</button>

<div id="nouveau_mdp">
<form method="post" action="./mdp_change.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Entre ton nouveau mot de passe</label>
    <input type="password" class="form-control" name="password" id="exampleInputEmail1" aria-describedby="passwordHelp">
  </div>
  <button type="submit" class="btn btn-primary">Définir</button>
</form>

</div>

<a class="general_btn" href="#msg">Voir les messages</a>
<a class="general_btn" href="">Voir les justificatifs</a>
<a class="general_btn" href="">Gérer mon blog</a>
<a class="general_btn" href="./singout.php">Déconnexion</a>

<div class="msg" id="msg">
    <h5>Section messages</h5>
    <?php
        require_once '../connect.php';

        $pdoMessages = $db->prepare("SELECT * FROM `messages`");

        $executeMessages = $pdoMessages->execute();

        $messages = $pdoMessages->fetchAll();
        
        foreach($messages as $message):
    ?>

        <div class="message">
            <div class="message_form"><strong>Nom et prénom : </strong><?=$message["name"]?></div>

            <div class="message_form"><strong>Email : </strong><?=$message["email"]?></div>
            
            <div class="message_form"><strong>Numéro de téléphone : </strong><?=$message["tel"]?></div>
            
            <div class="message_form"><strong>Message : </strong><br><?=$message["msg"]?></div>
        </div>

    <?php endforeach; ?>    
</div>

<div class="justificatif">

    

</div>

<div class="blog"></div>

<style>

    .general_btn{
        display: block;
        padding: 10px;
        border: 1px solid black;
        border-radius: 5px;
        width: 80%;
        max-width: 350px;
        margin: 20px auto;
        text-decoration: none;
        text-align: center;
    }

    .msg{
        display: block;
        width: 80%;
        max-width: 850px;
        margin: 40px auto;
    }
    .message{
        display: block;
        padding: 15px;
        border: 1px solid black;
        border-radius: 10px;
    }
    .message_form{
        margin-top:15px;
    }

    #nouveau_mdp{
        display: none;
        width: 80%;
        max-width: 650px;
        margin: 10px auto;
    }

</style>

<script type="text/javascript">

    const btnDef = document.getElementById('mdp_btn')
    const formDef = document.getElementById('nouveau_mdp')

    btnDef.addEventListener('click', () => {
        if(formDef.style.display == "block"){
            formDef.style.display = "none"
        }else{
            formDef.style.display = "block"
        }
    })

</script>
</body>
</html>