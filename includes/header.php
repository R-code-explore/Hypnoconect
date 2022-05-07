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

<a href="#header" id="scrollUp"><img src="./assets/to_top.png"></a>

<div id="header" class="header">

    <img class="logo_header" src="<?=$logoHeaderLink?>">

    <div class="icons">
        <div class="icon_action icon1"><a href=""><img src=""><img src="./assets/calendar_icone.png"></a></div>
        <div class="icon_action icon2"><a href="tel:+336-03-51-90-45"><img src="./assets/phone_icone.png"></a></div>
        <div class="icon_action icon3"><a href="#localisation"><img src="./assets/localisation_icone.png"></a></div>
    </div>

    <button class="nav_btn"><img src="./assets/menu_btn.svg"></button>
    <div class="nav_menu_phone">
        <a class="navlink_phone" href="">Infos pratiques</a>
        <a class="navlink_phone" href="">Indications</a>
        <a class="navlink_phone" href="">Prendre RDV</a>
        <a class="navlink_phone" href="">Blog</a>
        <a class="navlink_phone" href="">Contact</a>
    </div>

    <div class="nav_menu_desktop">
        <a class="navlink_desktop" href="">Infos pratiques</a>
        <a class="navlink_desktop" href="">Indications</a>
        <a class="navlink_desktop" href="">Prendre RDV</a>
        <a class="navlink_desktop" href="">Blog</a>
        <a class="navlink_desktop" href="">Contact</a>
    </div>

</div>

<style>

#scrollUp
{
position: fixed;
bottom : 30px;
right: -100px;
opacity: 0.5;
z-index: 100;
}

#scrollUp img{width: 40px;}

/**Navbar header**/
.header{
    height: 100px;
    background: #121C47;
    display: flex;
    justify-content: space-between;
    padding: 30px 5%;
}
/*****************/

/**Logo header**/
.logo_header{
    display: block;
    width: 175px;
    padding: 0;
    height: 100%;
    object-fit: cover;
}

@media (min-width: 750px){
    .logo_header{width:250px;}
}
/**************/

/**Icons sets*/
.icons{
    display: flex;
    width: 80px;
    height: 30px;
    justify-content: space-between;
    margin: 5px 0px;
}
.icon_action a{margin-right: 10px; margin-left: -20px;}
.icon1 a img{width: 15px;}
.icon2 a img{width: 13px;}
.icon3 a img{width: 10px;}

@media (min-width: 750px){
    .icons{
        width:200px;
    }
    .icon1 a img{width:30px;}
    .icon2 a img{width: 27px;}
    .icon3 a img{width: 20px;}
}

/***********/

/**Phone menu**/
.nav_btn{
    background: white;
    height: 30px;
    border: none;
    border-radius: 5px;
    margin-top: 5px;
}.nav_btn img{margin-top:-5px;}

.nav_menu_phone{
    display: block;
    width: 150px;
    background: #121C47;

    position: absolute;
    top:110px;
    right: 15px;
}.nav_menu_phone a{
    display: block;
    margin: 10px;
}

@media (min-width: 950px){
    .nav_btn{display:none;}
    .nav_menu_phone{display: none;}
}

/************/

</style>

<script type="text/javascript">

    //To the top BTN

jQuery(function(){
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 200 ) {
                $('#scrollUp').css('right','30px');
            } else { 
                $('#scrollUp').removeAttr( 'style' );
            }
        });
    });
});

////

</script>