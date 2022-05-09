<?php

//Btn settings

//Nav Btns names

/////////////////////////

//Css, js settings & page's title
$generalCss = "./css/general.css";
$pageCss = "./css/blog.css";

$logoHeaderLink = "./assets/logo_header.png";
$pageTitle = "Indications - Hypnoconect";

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
$thirdBtn = "Blog";
$fourthBtn = "Prendre RDV";
$fifthBtn = "Contact";

$firstBtnLink = "./index.php";
$secondBtnLink = "./info.php";
$thirdBtnLink = "./blog.php";
$fourthBtnLink;
$fifthBtnLink = "#contact";
/////////////////

//inluce header
include './includes/header.php';
///////

?>

<section>

    <div class="img_text">
        <img src="./assets/indi.jpg" class="img_imgtext">
        <p class="title_imgText">Indications</p>
    </div>

    <p class="ombre_cadre"><i class="citations">"
La folie, c’est se comporter de la même manière et s’attendre à un résultat différent " A. Einstein</i></p>


    <div class="humanPoints">
        
        <div>

            <div class="blueImgDiv">
                <img src="./assets/blog_img5.PNG" class="blueImgIndi"> 
            </div>

            <p class="para indi_paraBlue">
            Notre identité se construit dans les relations avec soi-même et les autres. Ces relations évoluent en fonction d’un contexte particulier et des règles de communication, instaurées de manière implicites pour la majeure partie d’entre elles. Elles nous permettent de nous adapter sans cesse aux diverses situations. Cependant, quand ces règles créent certaines problématiques et génèrent des conflits intérieurs entre les attentes des autres et les nôtres, un accompagnement peut alors être bénéfique pour réinstaurer une harmonie avec vous-même et votre entourage.
            </p>
        </div>
        <div>
        
        <div class="blueImgDiv">
        <img src="./assets/blog_img6.PNG" class="blueImgIndi">
        </div>    
        
        <p class="para indi_paraBlue">
            Dans les couples et les familles, il n’est pas facile de composer avec les besoins et les attentes des uns et des autres. La vie est faite d’étapes et de changements auxquels nous devons nous adapter.
            <br>
            Lorsque ces désirs et ces changements génèrent des crises et des incompréhensions, les relations peuvent alors se dégrader et certaines problématiques peuvent alors se manifester.
            <br>
            L’accueil et l’écoute de chacun des membres, dans un espace bienveillant et sécurisant, permettent de prendre conscience des modes de fonctionnement et des enjeux qui s’y cachent. L’accompagnement permet de stimuler vos compétences pour faire émerger vos propres solutions et retrouver un équilibre au sein de votre couple ou famille.
            </p>
        </div>
    </div>

    <p class="ombre_cadre"><i class="citations">"
Un problème sans solution est un problème mal posé " A. Einstein</i></p>

<p class="para">L’accompagnement par <strong>l’hypnose humaniste</strong> et <strong>l’approche systémique</strong> peut alors vous être utile :</p>
    <li>Pour gérer et régler les problématiques suivantes :</li>

</section>

<div class="indiImgDiv">
        
        <div>
            <img src="./assets/indiImg1.jpg">
            <p class="para"><strong>Gestion émotionnelle :</strong> peur,
            colère, tristesse, stress, anxiété,
            manque de confiance et d’estime de
            soi, timidité, jalousie excessive,
            manque affectif, sentiments de
            rejet, d’abandon, d’injustice,
            d’humiliation, de trahison, de
            culpabilité, de mal-être…</p>
        </div>

        <div>
            <img src="./assets/indiImg2.jpg">
            <p class="para"><strong>Liées au comportement :</strong>addictions, compulsions, troubles
alimentaires, troubles du sommeil,
troubles de concentration, troubles
sexuels…</p>
        </div>

        <div>
            <img src="./assets/indiImg3.jpg">
            <p class="para">
                <strong>Deuils et étapes de vie :</strong>
                perte
                d’un être cher, rupture
                amoureuse, perte d’emploi,
                déménagement, naissance,
                adolescence, départ du foyer,
                entrée dans la vie active, départ à
                la retraite, maladie, accident…
            </p>
        </div>

        <div>
            <img src="./assets/indiImg4.jpg">
            <p class="para">
            Ou simplement pour votre
            <strong>développement personnel…</strong>
            </p>
        </div>

    </div>

    <section>
    <p class="ombre_cadre"><i class="citations">
    " Un voyage de mille lieues commence toujours par un premier pas. " Lao-Tseu
    </i></p>

    <div class="sep_bar"></div>

    <p class="para">Les médecines douces ne se substituent pas à un avis médical. Seul un médecin est habilité à poser des
diagnostics, à prescrire, à modifier ou à supprimer tout traitement médical.</p>

    <div class="sep_bar"></div>

    </section>

    <div class="lastSectionIndi">
        <div>
            <img src="./assets/iconeIndi1.PNG">
            <p class="para">
                <strong>Prendre rdv et comprendre</strong> ce qui
vous a amené à me solliciter, vos
attentes et vos motivations
            </p>
        </div>

        <div>
            <img src="./assets/iconeIndi2.PNG">
            <p class="para"><strong>Transformer</strong> vos émotions, vos
pensées et vos comportements en
vecteurs d’évolution</p>
        </div>

        <div>
            <img src="./assets/iconeIndi3.PNG">
            <p class="para"><strong>Expérimenter</strong> dans votre vie
quotidienne, les changements
obtenus grâce à l’hypnose
humaniste l’approche et
systémique</p>
        </div>
    </div>
    <button class="general_btn rdv_indiBtn"><a href="">Prendre RDV</a></button>
    <br><br>

<style>
    .indi_paraBlue{color: white;}

    .underImageTexte{text-align: center;}

    .lastSectionIndi{
        background: #F5E5FF;
        display: block;
        width: 80%;
        max-width: 950px;
        padding: 15px;
        margin: auto;
    }
    .lastSectionIndi div{
        width: 100%;
    }
    .lastSectionIndi div img{
        display: block;
        width: 30px;
        margin: 20px auto;
    }
    .lastSectionIndi div p{
        width: 100%;
    }

    @media (min-width:1050px){
        .lastSectionIndi{
        background: #F5E5FF;
        display: flex;
        width: 80%;
        max-width: 950px;
        padding: 15px;
        margin: auto;
    }
    .lastSectionIndi div{
        width: 100%;
        margin: 0 20px;
    }
    .lastSectionIndi div img{
        display: block;
        width: 30px;
        margin: 20px auto;
    }
    .lastSectionIndi div p{
        width: 100%;
    }
    }

</style>

<?php

include './includes/footer.php';

?>