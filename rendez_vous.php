<?php

//Btn settings

//Nav Btns names

/////////////////////////

//Css, js settings & page's title
$generalCss = "./css/general.css";
$pageCss = "./css/index.css";

$logoHeaderLink = "./assets/logo_header.png";
$pageTitle = "Prendre rendez-vous - Hypnoconect";

$footerLogo = "./assets/logo_footer.png";
///////////////
//To the top btn
$upToPage = "./assets/to_top.png";
///////

//Header Icons

$icon1 = "./assets/calendar_icone.png";
$icon2 = "./assets/phone_icone.png";
$icon3 = "./assets/localisation_icone.png";

//////////////////////

//Settings concernant la nav bar (header)
$firstBtn = "Accueil";
$secondBtn = "Infos pratiques";
$thirdBtn = "Indications";
$fourthBtn = "Blog";
$fifthBtn = "Contact";

$firstBtnLink = "./index.php";
$secondBtnLink = "./info.php";
$thirdBtnLink = "./indi.php";
$fourthBtnLink = "./blog.php";
$fifthBtnLink = "#contact";
/////////////////

//inluce header
include './includes/header.php';
///////

?>

<section>
    <a href="tel:+336-03-51-90-45" class="general_btn rdv_links">Appeler Hypnoconect au : +33 6 03 51 90 45</a>
    <a href="mailto:hypnoconect@gmail.com" class="general_btn rdv_links">Ou par mail: contact@hypnoconect.com</a>
</section>

<style>
    section{
        margin: 80px auto;
    }

    .rdv_links{
        display: block;
        width: 80%;
        max-width: 450px;
        margin: 40px auto;
        background-color: #121C47;
        color: white;
        text-align: center;
        font-weight: 500;
    }
</style>

<?php 

include './includes/footer.php';

?>