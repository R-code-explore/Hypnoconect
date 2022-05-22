<?php

//Verif si envoi fichier
if(isset($_FILES["image"]) || isset($_FILES["file"])){
    
    //Vérification de l'extension via Type MIME

    $allowed = [
        "jpg" => "image/jpeg",
        "jpeg" => "image/jpeg",
        "png" => "image/png",
        "pdf" => "application/pdf"
    ];

    $filename = $_FILES["file"]["name"];
    $filetype = $_FILES["file"]["type"];
    $filesize = $_FILES["file"]["size"];

    $filetype = strval(strtolower($filetype));

    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    //Vérification de l'extension fichier

    if(!array_key_exists($extension, $allowed) || !in_array($filetype, $allowed)){
        die("erreur format de fichier incorrect");
    }

}elseif($_FILES["image"] != 0 || $_FILES["file"] != 0){
    
    var_dump($_FILES["error"]);

}

?>