<?php

//Btn settings

//Nav Btns names

/////////////////////////

//Css, js settings & page's title
$generalCss = "./css/general.css";
$pageCss = "./css/blog.css";

$logoHeaderLink = "./assets/logo_header.png";
$pageTitle = "Infos pratiques - Hypnoconect";

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
$secondBtn = "Indications";
$thirdBtn = "Blog";
$fourthBtn = "Prendre RDV";
$fifthBtn = "Contact";

$firstBtnLink = "./index.php";
$secondBtnLink = "./indi.php";
$thirdBtnLink = "./blog.php";
$fourthBtnLink = "https://raimond-code.com/rdv_test/";
$fifthBtnLink = "#contact";
/////////////////

//inluce header
include './includes/header.php';
///////

?>

<section>
<div class="img_text">
        <img src="./assets/infoImg1.jpg" class="img_imgtext">
        <p class="title_imgText">Infos pratiques</p>
    </div>
    


    <p class="para title_blog title_info">Tarifs</p>
    <div class="sep_bar"></div>
    
    <p class="para title_blog">Premier rdv (20min) :</p>
    <li>Uniquement en visio</li>
    <li>Gratuit</li>
    <button class="general_btn rdv_infoBtn"><a href="https://raimond-code.com/rdv_test/">Prendre RDV</a></button>

    <p class="para title_blog">Séance de suivi individuel (1h) :</p>
    <li>Au cabinet ou en Visio*</li>
    <li>75 €</li>

    <p class="para title_blog">Tarif réduit pour les adolescents et étudiants :</p>
    <li>Justificatif obligatoire</li>
    <li>50 €</li>

    <p class="para title_blog">Accompagnement couple & famille (1h30) :</p>
    <li>Au cabinet ou en Visio*</li>
    <li>90 €</li>

    <p class="para">*Paiement préalable</p>
    <p class="para">Moyens de paiement : espèces, CB, virement</p>
    <p class="para"><strong>NB :</strong> Cette prestation n’est pas remboursée par la Sécurité Sociale mais certaines mutuelles la prennent en charge : renseignez-vous auprès de la vôtre.</p>

    <div class="sep_bar"></div>

    <p class="para title_blog title_info">Déroulement et nombre de séances</p>

    <div class="sep_bar"></div>

    <div class="infoImgDeroulDiv">
        <div>
            <img src="./assets/infoImg2.jpg">
            
            <div class="textContain">
                <p class="para"><u>Au cabinet</u></p>
            <li>La séance débute par un entretien déterminant vos objectifs.</li>
            <li>Elle se poursuit par la pratique de l’hypnose et/ou des outils de l’approche systémique afin d’atteindre vos objectifs.</li>
            <li>Elle se termine par une discussion pour envisager la suite ou la fin de l’accompagnement.</li>
            </div>
            
        </div>

        <div>
            <img src="./assets/infoImg3.jpg">
            
            <div class="textContain">
                <p class="para"><u>En visio</u></p>
                <p class="para">Même déroulement qu’au cabinet</p>
                <ul>
                    <p><strong>Prérequis :</strong></p>
                    <li>PC ou tablette avec webcam</li>
                    <li>Une bonne connexion internet</li>
                    <li>Application Zoom <a href="https://zoom.us/">à télécharger ici</a></li>
                    <li>Des écouteurs pour la pratique de l’hypnose</li>
                    <li>Un espace calme où vous ne risquez pas être dérangé(e)</li>
                </ul>
            </div>
            
        </div>

    </div>

    <p class="para">L’hypnose humaniste et l’approche systémique sont des thérapies brèves. Le nombre de séances varie en fonction de vos objectifs et de vos attentes.</p>

    <p class="para">Les médecines douces ne se substituent pas à un avis médical. Seul un médecin est habilité à poser des diagnostics, à prescrire, à modifier ou à supprimer tout traitement médical.</p>

</section>

<div class="sep_bar"></div>

<?php

include './includes/footer.php';

?>