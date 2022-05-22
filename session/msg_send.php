<?php

if(isset($_POST)){
    if(empty($_FILES["file"])){

        $name = strip_tags($_POST["name"]);
        $email = strip_tags($_POST["email"]);
        $tel = strip_tags($_POST["tel"]);
        $msg = $_POST["mess"];

        $sql = "INSERT INTO `messages` (`id`, `name`, `email`, `tel`, `msg`) VALUES (NULL, '$name', '$email', '$tel', '$msg')";

        require_once '../connect.php';

        $query = $db->prepare($sql);

        $query->bindValue($name, PDO::PARAM_STR);
        $query->bindValue($email, PDO::PARAM_STR);
        $query->bindValue($tel, PDO::PARAM_STR);
        $query->bindValue($msg, PDO::PARAM_STR);

        if(!$query->execute()){
            die("formulaire non envoyé");
        }else{
            header('Location: merci_msg.php');
            die();
        }

    }else{
        die("Il semble que votre message n'a pas était envoyer");
    }
}

?>