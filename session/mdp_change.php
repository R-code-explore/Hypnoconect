<?php

//Verification de l'envois du form

if(!empty($_POST)){
    //Verification du remplissage des champs
    if(isset($_POST["password"]) && !empty($_POST["password"])
    ){
        //Formulaire complet

        //Hash du mdp
        $pass = password_hash($_POST["password"], PASSWORD_ARGON2ID);

        //Enregistrement de BD

        require_once '../connect.php';

        $sql = "UPDATE `users` SET mdp = '$pass' WHERE `id` = 1";

        $query = $db->prepare($sql);

        $query->execute();

        header('Location: ./account.php');

    }else{
        die("formulaire incomplet");
    }
}

?>