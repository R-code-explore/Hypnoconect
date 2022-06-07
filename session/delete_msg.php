<?php
//session_start();
//if(!isset($_SESSION["user"]["id"]) == 1){
//    header('Location: ../index.php');
//    exit;
//}

if(isset($_POST)){

    require '../connect.php';

    $sql = "TRUNCATE TABLE `messages`";

    $query = $db->prepare($sql);

    $query->execute();

    if(!$query->execute()){
        die("Il semble qu'une erreur s'est produite");
    }

    header("Location: account.php");

}

?>