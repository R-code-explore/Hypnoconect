<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Authors & description -->

    <meta name="author" content="Developper: Raimond Eduard C. Content author: Gaëlle/aka: Hypnoconect">
    
    <meta name="description" content="Qu'est-ce que l'hypnothérapie ? Prendre rendez-vous avec une hypnothérapeute. Comment prendre rendez-vous ? Pourquoi choisir l'hypnothérapie ? Prendre rendez-vous hypnothérapie. Qu'est-ce que l'hypnose humaniste ? Qu'est-ce que la systémie ?">

    <!-------------------------->

    <!--Css's-->

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!--General css-->
    <link rel="stylesheet" href="<?=$generalCss?>">
    <!--Page's css-->
    <link rel="stylesheet" href="<?=$pageCss?>">

    <!--------->

    <!--Appel de JQuery-->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
    <!--------->

    <title><?=$pageTitle;?></title>
</head>
<body>

<div class="header">

    <div class="logo_header">
    <img src="">
    </div>

    <div class="icons">
        <div class="icon1_action"><a href=""><img src=""></a></div>
        <div class="icon1_action"><a href="tel:+336-03-51-90-45">Appeler</a></div>
    </div>

    <div class="nav_menu_desktop"></div>
    <div class="nav_menu_phone"></div>

</div>

<style>

#scrollUp
{
position: fixed;
bottom : 20px;
right: -100px;
opacity: 0.5;
z-index: 100;
}

</style>

<script type="text/javascript">

    //To the top BTN

jQuery(function(){
    $(function () {
        $(window).scroll(function () { //Fonction appelée quand on descend la page
            if ($(this).scrollTop() > 200 ) {  // Quand on est à 200pixels du haut de page,
                $('#scrollUp').css('right','30px'); // Replace à 10pixels de la droite l'image
            } else { 
                $('#scrollUp').removeAttr( 'style' ); // Enlève les attributs CSS affectés par javascript
            }
        });
    });
});

////

</script>