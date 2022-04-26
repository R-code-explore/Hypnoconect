<?php

//Btn settings

//Btns names
$firstBtn = "Accueil";
$secondBtn = "Infos pratiques";
$thirdBtn = "Indications";
$fourthBtn = "Prendre rdv";
$fifthBtn = "Contact";
//Btns Links
$firstLink = "./index.php";
$secondLink = "./infos_pratiques.php";
$thirdLink = "#";
$fourthLink = "#";
$fifthLink = "#contact";
/////////////////////////

//Css, js settings & page's title
$generalCss = "./css/general.css";
$pageCss = "./css/blog.css";
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
<h5 class="page_title titles">Blog - Hypnoconect</h5>
<div class="sep_bar"></div>

<div class="blog_nav">
<h5 class="titles">Navigation</h5>

    <div>
        <button class="general_btn"><a href="#systemie">Systémie</a></button>
        <button class="general_btn"><a href="#hypnoseHumaniste">Hypnose Humaniste</a></button>
        <button class="general_btn"><a href="">Exemples</a></button>
    </div>

</div>

<div class="sep_bar"></div>

<section id="systemie" class="systemie">

    <h5 class="titles sectionTitle">Qu’est-ce que l’approche systémique ?</h5>

    <p class="def_text">L’approche systémique est issu de plusieurs travaux scientifiques (mathématiques,
cybernétique, linguistique). Dans les années 1960, L’Ecole Palo Alto, petite ville de Californie,
est née. Elle regroupe plusieurs chercheurs tels que G. Bateson, Von Foerster, Satir,
Weakland, Haley, Don Jackson, Watzlawick etc. Ils se sont appuyés sur ces différents travaux
pour développer de nouveaux concepts et de nouvelles pratiques dans les domaines des
relations humaines et de la thérapie. Cette approche s’intéresse à la manière dont le
problème se maintient dans le présent en prenant en compte la complexité du contexte et
les interactions des personnes concernées par le problème.</p>

<h5 class="comp_titles titles">I. Un système</h5>
<p>Un système est un ensemble d’éléments identifiables, cohérents et reliés les uns des autres
par des relations, de telle sorte que si l’une d’elles change, l’ensemble du système s’en trouve
modifié. Il répond à une finalité.
<br>
<br>
Exemple : le corps humain est un système complexe composé de sous-systèmes (nerveux,
circulatoire, squelettique, musculaire, digestif, endocrinien etc.) en interaction dans le but de
nous maintenir en vie. Il s’autorégule pour notre bon fonctionnement. C’est le principe de
l’homéostasie.</p>

<h5 class="comp_titles titles">II. L’importance des interactions, du contexte et de nos perceptions du monde</h5>
<p>Une interaction est le résultat d’un ensemble d’actions et / ou d’affluences réciproques qui
peuvent s’établir entre deux individus, objets, phénomènes, éléments ou corps et qui
peuvent en modifier la nature ou le comportement.
<br><br>
Le contexte dans lequel s’effectuent les interactions joue un rôle primordial puisqu’il permet
d’en comprendre le sens.
Par exemple, dans la rue, une personne, A, voit au loin une autre personne, B, avancer
comme un crabe, frôlant les murs. Dans un premier temps, cela lui parait bizarre. Puis, au fur
et à mesure qu’elle se rapproche d’elle, elle remarque que son pantalon est déchiré au
niveau de son fessier. Elle comprend alors le sens de son comportement.
<br><br>
Par ailleurs, l’approche systémique de l’école Palo Alto s’intéresse à ce qui se passe dans l’ici
et maintenant car elle considère que pour qu’un certain type de comportement perdure, il
faut que le produit des interactions et le contexte le maintiennent, comme dans le cas d’une
plante, il lui faut un terrain fertile et des conditions climatiques favorables pour qu’elle puisse
se développer.
Si on reprend l’exemple du dessus, B marchera comme un crabe tant qu’il y a des gens dans
la rue ou qu’il portera son pantalon craqué.
<br><br>
Nos perceptions jouent un rôle essentiel dans la communication. Selon nos expériences de
vie, l’environnement dans lequel nous avons évolué, nous avons, tous, un regard particulier
sur les choses qui nous entourent. Nous considérons cette vision comme vraie dans la
mesure où elle se vérifie au quotidien.
<br><br>
Un de mes proches a la conviction qu’il a toujours de la chance dans son malheur. Et devinez
quoi ? Cette croyance se vérifie chaque fois qu’une situation répond à cette croyance. Un
jour, alors qu’il conduisait pendant sa période de suspension de permis (la seule fois), pas de
chance, une dame lui est rentré dedans. La police n’était pas loin. Il risquait de se voir
prolonger sa période de suspension et bien il s’en est sorti avec une simple amende et
l’assurance de la dame a remboursé la voiture. Incroyable !!
</p>
<p class="citations"><i>« On ne voit que ce que l’on croit »</i> O. Lockert</p>
<div class="sep_bar"></div>
<p>
Petit test qui a pour but de rendre compte l’influence qu’ont nos perceptions sur nos
manières de comprendre les choses. Cette histoire est délibérément vague.
<br><br>
Monsieur THEATRE arrive à l’Olympia. Sur le boulevard, un homme hurle en portugais en
sautant et en faisant de grands gestes. Un autre individu se charge de garer les voitures. Près
d’une Mercedes, il échange avec Camille, une personne à l’allure élégante et raffinée.
<br><br>
Répondez aux propositions suivantes par vrai (V), faux (F) ou je ne sais pas ( ?) en vous
permettant de revenir sur le texte chaque fois que cela est nécessaire.
</p>
<br>
<img class="testImg" src="./assets/test_systemie.PNG">
<br>
<p><strong>Réponses :</strong> Ce texte manque d’informations pour répondre vrai ou faux à toutes les propositions sauf à la première</p>
<br>
<div class="sep_bar"></div>
<h5 class="comp_titles titles">III. Les principes de la communication</h5>

<p>
D’après une logique de la communication Paul Watzlawick - J.Helmick Beavin - Don D.Jackson
<br>
<br>
<i><strong>1) L’impossibilité de ne pas communiquer</i></strong>
<br>
Toute communication influe sur le comportement.
<br>
Exemple : 2 individus , A et B, sont assis l’un côté de l’autre à bord d’un train. A souhaite
entamer une discussion alors que B non.
<br>
Importance du contexte : le train est bondé, A et B ne peuvent pas quitter leur place.
Lorsque A entreprend l’échange, B n’a que peu de réactions possibles :
<br>
<ul>
<li> Il évite l’échange (il feint de ne pas l’entendre, met ses écouteurs, ferme les yeux…)
pour lui communiquer qu’il ne souhaite pas communiquer ; </li>
<li> Il lui dit directement qu’il ne souhaite pas converser. Ce comportement demande un
certain courage puisqu’elle est contraire aux règles de savoir-vivre fixées par la
société. Une certaine tension s’installera entre les 2 interlocuteurs.</li>
<li> Il décide d’accepter l’échange par politesse.</li>
</ul>
<br>
<p>
Dans tous les cas, il communique un message qui influencera la réaction de A, qui en retour
aura un impact sur B etc.
</p>
<br>
<i><strong>2) Niveaux de la communication : contenu et relation</i></strong>
<br>
<p>
Tout message comporte deux sens : d’une part, il communique une information sur des
évènements, des opinions, des ressentis, des expériences… D’autre part, il manifeste
directement ou indirectement quelque chose sur la relation entre les interlocuteurs.
<br>
<br>
Exemple :
<br>
Dans un couple, l’un des deux partenaire décide d’inviter une connaissance, qu’il a croisé en
faisant ses courses, sans en informer l’autre.</p>
<br>Partenaire 1 : Devine qui j’ai croisé en allant au supermarché ?
<br>Partenaire 2 : Qui ?
<br>Partenaire 1 : Kévin !
<br>Partenaire 2 : Ça fait longtemps qu’on n’avait pas eu de ses nouvelles ! Il devient quoi ?
<br>Partenaire 1 : Tu pourras lui poser la question ce soir, il vient diner !
<br>Partenaire 2 (agacé) : Tu plaisantes, j’espère !
<br>Partenaire 1 : Ça ne te fait pas plaisir ?
<br>Partenaire 2 (énervé) : Ce n’est pas la question ! Tu aurais pu me consulter avant ! C’est
toujours pareil avec toi : tu me mets toujours sur le fait accompli…<br>
<br>
<p>
Nous pouvons remarquer dans ce bref dialogue que deux niveaux de communication se
jouent :<br>
L’un sur le contenu, l’invitation de l’ami ; et l’autre sur la relation entre les deux, avoir le droit
de prendre une initiative sans consulter l’autre.
</p>
<br>
<i><strong>3) Ponctuation des séquences de communication</i></strong>
<br>
<p>
La communication est un système circulaire d'échanges. Le comportement de l'un des
interlocuteurs induit le comportement de l'autre, qui lui-même influence le comportement
du premier etc. Parfois nous faisons face à des situations qui amènent à des
incompréhensions car nous n’avons pas à disposition tous les éléments nécessaires pour
réagir de manière adéquate.
<br>
Exemple : Soit dans un café, une femme drague le barman. Plus le barman évite la dame,
plus elle insiste. Plus elle insiste, plus le barman l’évite…
Ce qui donne le schéma suivant :
</p>
<br>
<img class="firstCourbeImg" src="./assets/systemie_courbe_1.PNG">
<br>
<i><strong>4) Deux modes de communication : digital et analogique</strong></i>
<br>
<p>
La communication digitale, qui représente 7% de la communication, transmet les
informations au travers du langage verbal. <br>
La communication analogique, qui représente 93% de la communication, comprend tout le
coté paraverbal et non-verbal. <br>
Exemples de communications analogiques : <br>
Dans une relation de couple, un des deux partenaires offre un cadeau à l’autre. La
signification digitale se construit en fonction de la manière dont l’autre perçoit ce cadeau de
la part du partenaire : gage d’affection, un aveu d’une trahison, un pardon…
<br>
<br>
Quelle signification digitale ont la rougeur, la transpiration, les hésitations lors d’un examen
oral ? On peut y voir une preuve que la personne ne maitrise pas son sujet mais on peut y
voir aussi une personne stressée par l’investissement qu’elle a mis pour pouvoir réussir cet
examen…
<br><br>
La communication analogique offre plusieurs interprétations digitales en fonction de notre
manière de percevoir les choses et du contexte.
</p><br>
<i><strong>5) Deux types d’interactions : symétrique ou complémentaire</strong></i>
<p>
L’interaction symétrique repose sur l’égalité entre les interlocuteurs. Elle se caractérise par
des comportements semblables. Cette égalité s’installe par des messages en miroir : tout
comportement de l’un amène un comportement similaire chez l’autre.
<br>
L’interaction complémentaire s’appuie sur la reconnaissance et l’acceptation de la différence.
Les interlocuteurs s’adapte en fonction des comportements de l’un et de l’autre. Chaque
message répond à celui du partenaire en obéissant aux règles qu’elles impliquent (position
haute et basse).
</p>
<br>
<h5 class="comp_titles titles">IV. L’outil indispensable en systémie : la modélisation</h5>
<p>
Lors d’un accompagnement, l’intervenant modélise le système pour mettre en évidence son
fonctionnement (avec le(s) « client(s) » éventuellement). Cet outil permet de prendre du
recul sur la situation en répondant aux questions suivantes : Qui fait quoi qui pose
problème ? A qui ? En quoi est-ce un problème ? Qu’empêche-t-il ? Que génère-t-il ? Et de
prendre conscience de notre mode de fonctionnement pour pouvoir agir différemment.
<br>
Exemple : dans une famille, le mari se plaint que sa femme ne lui laisse pas assez de place
dans son rôle de père. Celle-ci l’entend et essaie tant bien que mal de s’effacer sauf qu’à
chaque fois qu’il n’arrive pas à se faire écouter par ses 2 enfants, il l’appelle à l’aide et elle
intervient. Du coup, il est frustré et en colère et n’arrive pas à trouver sa place. Sa femme en
a marre des reproches de son mari, de faire l’arbitre entre ses enfants et lui…et prend donc
contact avec un praticien de l’approche systémique pour dénouer la situation.
<br>
Au fil de l’entretien, l’intervenant recueille suffisamment d’informations pour modéliser la
situation :
<br>
Qui a un problème ? La femme. <br>
Quel est le problème ? Elle en a marre que son conjoint lui dise qu’elle prend trop de place et
de faire l’arbitre entre ses enfants et lui. <br>
En quoi est-ce un problème ? Cela engendre des tensions dans le couple. <br>
Que met-elle en place pour résoudre son problème ? Elle le critique. Elle part faire un tour au
moment où c’est lui qui « doit gérer ». Elle intervient quand son mari échoue…
<br>
</p>
<h5 class="comp_titles titles">Modélisation</h5>
<img class="modelSysImage" src="./assets/modelisation_systemie.PNG">
<br>
<p>La modélisation est un schéma qui montre les interactions entre les différents acteurs du
système de manière simplifiée et qui a pour but de mettre en lumière le message à
remplacer. Ici : Vas-y, gère ! Et en cas d’échec, j’interviendrai.
<br>
En systémie, l’intervenant ne vise pas un grand changement. Il cherche avec le « client » un
objectif minimal car il considère qu’un changement même minime modifiera l’ensemble du
système. Cela permet également de respecter l’écologie de la personne.
<br>
Revenons à la situation, après discussion, la « cliente » a décidé de remplacé son message
par « faisons ensemble » et ainsi de discuter avec son mari des règles négociable et non
négociable concernant ses enfants. Pour cela, elle s’est fixé un objectif minimal qui est
« échouons ensemble ».
</p>

</section>

<div class="sep_bar"></div>

<h5 id="hypnoseHumaniste" class="titles sectionTitle">Hypnose humaniste</h5>

<?php
include './includes/footer.php';
?>