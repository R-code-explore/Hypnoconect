<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Authors & description -->

    <meta name="author" content="Developper: Raimond Eduard C. Content author: Gaëlle/aka: Hypnoconect">
    
    <meta name="description" content="Qu'est-ce que l'hypnothérapie ? Prendre rendez-vous avec une hypnothérapeute. Comment prendre rendez-vous ? Pourquoi choisir l'hypnothérapie ? Prendre rendez-vous hypnothérapie">

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

<div id="scrollUp">
    <a href="#top"><img src="<?=$upToPage;?>"/></a>
</div>

<div class="header">
    <img src="<?=$logoHeaderLink?>" class="logo_header">

    <button class="menu_btn general_btn" onclick="openHeaderMenu()">Menu</button>

    <div class="header_menu_phone">
        <a class="header_links" href="<?=$firstLink?>"><?=$firstBtn?></a>
        <a class="header_links" href="<?=$secondLink?>"><?=$secondBtn?></a>
        <a class="header_links" href="<?=$thirdLink?>"><?=$thirdBtn?></a>
        <a class="header_links" href="<?=$fourthLink?>"><?=$fourthBtn?></a>
        <a class="header_links" href="<?=$fifthLink?>"><?=$fifthBtn?></a>
    </div>

    <div class="header_menu_desktop">
    <a href="<?=$firstLink?>"><?=$firstBtn?></a>
        <a class="header_links" href="<?=$secondLink?>"><?=$secondBtn?></a>
        <a class="header_links" href="<?=$thirdLink?>"><?=$thirdBtn?></a>
        <a class="header_links" href="<?=$fourthLink?>"><?=$fourthBtn?></a>
        <a class="header_links" href="<?=$fifthLink?>"><?=$fifthBtn?></a>
    </div>

</div>

<style>

#scrollUp
{
position: fixed;
bottom : 10px;
right: -100px;
opacity: 0.5;
z-index: 100;
}
    
    .header{
        width: 90%;
        max-width: 950px;
        display: flex;
        height: 100px;
        align-items: center;
        margin: 0 auto;
        justify-content: space-between;
    }

    .logo_header{
        display: block;
        width: 80px;
        margin: 0 20px;
    }

    .menu_btn{
        display: block;
        margin: 0 20px;

        box-shadow: -9px 11px 20px -9px rgba(0,0,0,0.75);
        -webkit-box-shadow: -9px 11px 20px -9px rgba(0,0,0,0.75);
        -moz-box-shadow: -9px 11px 20px -9px rgba(0,0,0,0.75);
    }.menu_btn:hover{
        color: skyblue;
    }

    .header_menu_desktop{display: none;}
    .header_menu_phone{
        display: none;
        width: 160px;
        font-size: 1.2em;
        padding: 15px;

        position: absolute;
        top: 100px;
        right: 5%;
        z-index: 100;

        background: #480075;

        box-shadow: -9px 11px 20px -9px rgba(0,0,0,0.75);
        -webkit-box-shadow: -9px 11px 20px -9px rgba(0,0,0,0.75);
        -moz-box-shadow: -9px 11px 20px -9px rgba(0,0,0,0.75);
    }
    .header_menu_phone a{display: block; line-height: 2em; margin: auto; color: white; transition: 0.2s ease-in-out;}
    .header_menu_phone a:hover{color: skyblue; transition: 0.2s ease-in-out;}

    @media (min-width: 950px){
        .menu_btn{display: none;}
        .header_menu_phone{display: none;}
        .header_menu_desktop{
            display: flex;
            margin: 0 20px;
        }
        .header_menu_desktop a{
            display: block;
            margin: 0 20px;
            font-size: 1.2em;
            color: #480075;
        }.header_menu_desktop a:hover{color: skyblue; transition: 0.2s ease-in-out;}
    }

</style>

<script type="text/javascript">

    function openHeaderMenu(){
        let menuBtn = document.querySelector('.menu_btn')
        let menuContent = document.querySelector('.header_menu_phone')

        if(menuContent.style.display == "block"){
            menuContent.style.display = "none"
        }else{
            menuContent.style.display = "block"
        }
    }

    //To the top BTN

jQuery(function(){
    $(function () {
        $(window).scroll(function () { //Fonction appelée quand on descend la page
            if ($(this).scrollTop() > 200 ) {  // Quand on est à 200pixels du haut de page,
                $('#scrollUp').css('right','10px'); // Replace à 10pixels de la droite l'image
            } else { 
                $('#scrollUp').removeAttr( 'style' ); // Enlève les attributs CSS affectés par javascript
            }
        });
    });
});

////

</script>