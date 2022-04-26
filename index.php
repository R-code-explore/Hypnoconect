<?php

//Btn settings

//Btns names
$firstBtn = "Infos pratiques";
$secondBtn = "Indications";
$thirdBtn = "Prendre rdv";
$fourthBtn = "Blog";
$fifthBtn = "Contact";
//Btns Links
$firstLink = "./infos_pratiques.php";
$secondLink = "#";
$thirdLink = "#";
$fourthLink = "./blog.php";
$fifthLink = "#contact";
/////////////////////////

//Css, js settings & page's title
$generalCss = "./css/general.css";
$pageCss = "./css/index.css";
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

<div class="banner">

<div class="banner_content">

    <img src="./assets/Logo_bannière.svg" class="banner_logo">

    <a href="#" class="banner_btn general_btn">Prendre rendez-vous</a>

</div>

</div>

<div class="intro_index">
<p><i class="intro_cit citations">« Un être humain est une partie d'un tout que nous appelons Univers , une partie limitée dans le temps et
l'espace. Il s'expérimente lui-même, ses pensées et ses émotions comme quelque chose qui est séparé du
reste, une sorte d'illusion d'optique de la conscience. Cette illusion est une sorte de prison pour nous, nous
restreignant à nos désirs personnels et à l'affection de quelques personnes proches de nous. Notre tâche
doit être de nous libérer nous-mêmes de cette prison en étendant notre cercle de compassion pour
embrasser toutes créatures vivantes et la nature entière dans sa beauté. » </i>A. Einstein</p>
<br>
<br>
    <p class="questions_index">Stressé(e) ? Fatigué(e) ? Submergé(e) ?
    <br>
    <br>
    Vous cherchez à prendre du recul sur une situation ? à avancer dans votre vie plus sereinement ? à
    (re)trouver une certaine qualité dans vos relations ? Un certain sens dans vos actions ?</p>

    <p>
    Offrez-vous le 1er rdv de 20 min <strong>gratuit</strong> sans engagement en Visio.
    <br>
    <br>
    </p>
    <p class="questions_index_2">
    Ce 1er rdv nous permet de faire connaissance et de comprendre les raisons qui vous ont amené à me
    solliciter. Ensuite, à vous de choisir, si vous souhaitez poursuivre ou non cet accompagnement.
    </p>

</div>

<div class="sep_bar"></div>

<div class="index_nav">
<h5 class="titles">Navigation</h5>

    <div>
        <button class="general_btn"><a href="#textSection1">Pourquoi ça fonctionne ?</a></button>
        <button class="general_btn"><a href="#approche">Mon approche</a></button>
        <button class="general_btn"><a href="#about">À propos de moi</a></button>
    </div>

</div>

<div class="sep_bar"></div>

<div class="bandeImage">
    <img class="indexImage" src="./assets/bande.jpg">

    <p class="indexImageText">Faites émerger vos propres solutions grâce à l'hypnose humaniste et un accompagnement systémique</p>
</div>

<div class="sep_bar"></div>

<div class="indexSection1">
    <div id="textSection1" class="textSection1">
    <h5 class="titles">Comment et pourquoi l’hypnose humaniste fonctionne ?</h5>
    <?php include './index_sections/first_section.php'; ?>
    <br>
    <br>
    <a href="">En savoir plus sur l’hypnose humaniste (lien hypertexte)</a>
    <br>
    <br>
    <a href="">Voir à quoi ça ressemble… (lien hypertexte)</a>
    </div>
    <button class="openSection1 general_btn">Lire la suite >></button>
</div>

<div class="sep_bar"></div>

<div id="approche" class="sectionApproche">
    <div class="approcheDiv1"><img src="./assets/220301_051.jpg"></div>
    <h5 class="approcheTitle titles">Mon approche</h5>
    <div class="approcheDiv2"><?php include './index_sections/sectionApproche.php'; ?></div>
</div>

<div class="sep_bar"></div>

<div id="about" class="aboutSection">
    <h5 class="aboutTitle titles">À propos de moi</h5>
    <div class="aboutDiv1"><img src="./assets/about.jpg"></div>
    <div class="aboutDiv2"><?php include './index_sections/about.php'; ?></div>
</div>

<div class="sep_bar"></div>

<?php
include './includes/footer.php';
?>