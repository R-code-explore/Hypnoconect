<?php

//Btn settings

//Btns names
$firstBtn = "Accueil";
$secondBtn = "Prendre rdv";
$thirdBtn = "Indications";
$fourthBtn = "blog";
$fifthBtn = "Contact";
//Btns Links
$firstLink = "./index.php";
$secondLink = "#";
$thirdLink = "#";
$fourthLink = "./blog.php";
$fifthLink = "#contact";
/////////////////////////

//Css, js settings & page's title
$generalCss = "./css/general.css";
$pageCss = "./css/infos_pratiques.css";
$pageJs = "./js/index.js";

$logoHeaderLink = "assets/logo.svg";
$pageTitle = "Accueil - Hypnoconect";
///////////////
//To the top btn
$upToPage = "./assets/to_top.png";
///////

//Connect DB
//require './db/connect.php';
////////////

//inluce header
include './includes/header.php';
///////

?>

<h5 class="page_title titles">Infos pratiques</h5>

<div class="sep_bar"></div>

<section class="intro">

    <div class="info_intro">
    <ul>
        <li>Parce que demander de l’aide n’est pas chose facile ;</li>
        <li>Parce que choisir, c’est mieux ;</li>
        <li>Parce que vous avez déjà été déçu(e) par le passé…</li>
    </ul>
    <p>Offrez-vous le 1er rdv de 20 min <strong>gratuit</strong> sans engagement en visio.
    <br>
    <br>
    Ce 1er rdv nous permet de faire connaissance et de comprendre les raisons qui vous ont amené à me solliciter.
    Ensuite, à vous de choisir, si vous souhaitez poursuivre ou non cet accompagnement.
    </p>
    </div>

    <div class="sep_bar"></div>

    <h5 class="sectionTitle titles">Tarifs</h5>

    <div class="tarifs">
        <div class="first20">
            <strong>Premier rdv:</strong>
            <ul>
                <li>Se fait en visio uniquement</li>
                <li>Tarif: Offert</li>
            </ul>
        </div>
        <br>
        <div class="fullTarif">
            <strong>Séance de suivi individuel (1h):</strong>
            <ul>
                <li>Au cabinet ou en visio</li>
                <li>Tarif: 75. 00€</li>
            </ul>
            <strong>Tarif réduit pour les adolescents, étudiants sur justificatif</strong>
            <ul>
                <li>justificatif obligatoire</li>
                <li>Tarif: 50. 00€</li>
            </ul>
        </div>
        <br>
        <div class="tarifFamille">
            <strong>Accompagnement couple & famille (1h30)</strong>
            <ul>
                <li>Au cabinet ou en visio</li>
                <li>Tarif: 90. 00€</li>
            </ul>
        </div>
        <br>
        <p>
        Paiement préalable en visio.
        <br>
        Moyen de paiements : espèces, CB, virement.
        <br>
        <strong>NB :</strong> Cette prestation n’est pas remboursée par la Sécurité Sociale mais certaines mutuelles la prennent en charge : renseignez-vous auprès de la vôtre.
        </p>
    </div>

    <h5 class="sectionTitle titles">Déroulement séance</h5>

    <div class="deroul_seance">
        <div class="cabinet">
            <img src="./assets/au_cabinet.jpg">
            <h5 class="titles">Au cabinet</h5>
            <ul>
                <li>Les séances débutent par un entretien et
                détermine vos objectifs.</li>
                <li>Elle se poursuit par la pratique de l’hypnose
                et/ou des outils de l’approche systémique afin
                d’atteindre vos objectifs.</li>
                <li>Elle se termine par une discussion pour
                envisager la suite ou la fin de
                l’accompagnement.</li>
            </ul>
        </div>
        <div class="visio">
            <img src="./assets/en_visio.jpg">
            <h5 class="titles">En visio</h5>
            <p>Même déroulement qu'au cabinet</p>
            <strong>Pré-requis:</strong>
            <ul>
                <li>PC ou tablette avec webcam</li>
                <li>Une bonne connexion internet</li>
                <li>Des écouteurs pour la pratique de
                l’hypnose.</li>
                <li>Un espace calme où vous ne risquez
                pas être dérangé(e)</li>
            </ul>
        </div>
    </div>

    <h5 class="sectionTitle titles">informations</h5>

    <p class="infos_sup">
    L’hypnose humaniste et l’approche systémique sont des thérapies brèves.
    <br>
    Le nombre de séance varie en fonction de vos objectifs et de vos attentes.
    <br>
    <br>
    Les médecines douces ne se substituent pas à un avis médical. Seul un médecin est habilité à poser des
    diagnostics, à prescrire, à modifier ou à supprimer tout traitement médical.
    <br><br>
    <strong>Contre-indications</strong> : toute personne présentant des pathologies dissociatives : troubles psychotiques,
    schizophrénie, délire paranoïaques, troubles maniaco-dépressifs ou bipolaires, certaines personnalités
    borderline…
    <br>
    ⇨ L’hypnose présente un risque d’accentuer l’état dissociatif.
    <br><br>
    <strong>Réservation en ligne</strong>
    <br>
    (Agenda)
    Si vous ne trouvez pas de créneaux horaires qui correspondent à votre emploi du temps, vous pouvez me
    contacter via le formulaire de contact, par mail ou sms.
    En cas d’annulation, merci de me prévenir 48h à l’avance, auquel cas la consultation est due (sauf cas
    d'urgence).
    </p>

</section>



<?php
include './includes/footer.php';
?>