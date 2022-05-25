<?php

require 'connect.php';

if (isset($_POST["name"], $_POST["email"], $_POST["tel"], $_POST["mess"]) && !empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["tel"]) && !empty($_POST["mess"])) {

        $NomPrenomForm = strip_tags($_POST["name"]);
        $EmailForm = strip_tags($_POST["email"]);
        $TelForm = strip_tags($_POST["tel"]);
        $TextArea = ($_POST["mess"]);

        $sql = "INSERT INTO `messages`(`id`, `name`, `email`, `tel`, `msg`) VALUES (NULL, :name, :email, :tel, :msg)";

        $query = $db->prepare($sql);

        $query->bindValue(":name", $NomPrenomForm, PDO::PARAM_STR);
        $query->bindValue(":email", $EmailForm, PDO::PARAM_STR);
        $query->bindValue(":tel", $TelForm, PDO::PARAM_STR);
        $query->bindValue(":msg", $TextArea, PDO::PARAM_STR);

        if(!$query->execute()){
            die("Il semble que vos infos n'ont pas été enregistrés");
        }

        header("Location: index.php");

    }else{
        die("Il semble que votre message n'a pas était envoyer");
    }


?>