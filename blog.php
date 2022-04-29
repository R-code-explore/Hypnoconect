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

<section id="article" class="articles">

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
<img class="blog_imgs" src="./assets/test_systemie.PNG">
<br>
<p><strong>Réponses :</strong> Ce texte manque d’informations pour répondre vrai ou faux à toutes les propositions sauf à la première</p>
<br>
<div class="sep_bar"></div>
<h5 class="comp_titles titles">III. Les principes de la communication</h5>

<p>
D’après une logique de la communication Paul Watzlawick - J.Helmick Beavin - Don D.Jackson
</p>
<br>
<br>
<i><strong>1) L’impossibilité de ne pas communiquer</i></strong>
<br><br>
<p>
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
<br><br>
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
<br><br>
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
<img class="blog_imgs" src="./assets/systemie_courbe_1.PNG">
<br>
<i><strong>4) Deux modes de communication : digital et analogique</strong></i>
<br><br>
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
<br><br>
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
<img class="blog_imgs" src="./assets/modelisation_systemie.PNG">
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

<div class="sep_bar"></div>

<h5 id="hypnoseHumaniste" class="titles sectionTitle">Hypnose humaniste</h5>

<i><strong>1. Définition</strong></i>
<p><br>
Contrairement aux autres formes d’Hypnoses qui dissocient, l’Hypnose Humaniste, fondée par
Olivier Lockert, en 2000, associe la personne avec elle-même et le monde autour d’elle pour qu’elle
puisse agir sur ses troubles et blessures d’ordre psychologique. Elle peut ainsi établir un véritable
changement.
<br>
L’Hypnose Humaniste, utilise, pour cela, des inductions dites « en ouverture » pour atteindre un
Etat de Conscience Augmentée et implique une vision globale de la Vie.
<br>
Elle permet donc de réunifier la personne avec le meilleur d’elle-même. Ceci va lui permettre de
prendre les commandes de sa vie grâce aux symboles, aux sensations et à son intuition qu’elle
capte lorsqu’elle est en Etat de Conscience Augmentée. Le thérapeute ou elle-même cherche alors
à réduire la frontière naturelle entre l’Inconscient et le Conscient pour fusionner avec sa plus
grande Conscience et se sentir un avec tout, connectée à la Vie.</p>
<br>
<i><strong>2. Particularités</strong></i>
<br>
<br>
<div class="hu_firstSection">
    <div>
        <h5 class="titles">Hypnoses dissociantes</h5>
        <p>
        - Augmente la cassure naturelle entre le
        Conscient et l’Inconscient ;
        <br>
        - Etat Modifié de Conscience ;
        <br>
        - S’adresse à l’Inconscient ;
        <br>
        - Approche individuelle.
        </p>
    </div>
    <div>
    <h5 class="titles">Hypnose Humaniste</h5>
        <p>
        - Réduit cette frontière pour aider la
        personne à se réunifier ;
        <br>
        - Etat de Conscience Augmentée ;
        <br>
        - Accompagne la personne pour gagner
        en conscience. Elle garde le contrôle
        puisque c’est elle qui intervient sur
        elle-même ;
        <br>
        - Approche globale
        <br>
        - Travaille avec les symboles que la
        personne choisit de supprimer ou de
        transformer jusqu’à se sentir mieux ;
        <br>
        - Se pratique aussi bien en thérapie
        qu’en coaching.
        </p>
    </div>
</div>

<br>
<i><strong>3. Les niveaux qui nous constituent</strong></i>
<br>
<br>
<p>Nous sommes des êtres multidimensionnels :</p>
<br>
<img class="blog_imgs" src="./assets/hu_blog1.PNG">
<br>
<h5 class="titles sectionTitle">La Conscience</h5>
<br>
<i><strong>1. Présentation</strong></i>
<br><br>
<p>
La « Conscience » majuscule, aussi appelée « Imagination », est un champs infini d’informations à
l’origine de tout ce qui existe. L’étymologie du mot « information » vient du verbe « informare »
qui signifie « qui donne forme à… »
<br><br>
On peut la comparer à un soleil dont nous sommes les divers rayons. En effet, elle est tout ce que
nous sommes, reliés les uns des autres puisqu’elle donne forme à toutes choses.
<br>
<br>
Grâce à l’imagination, notre esprit puise dans cette source infinie de tous les possibles. Elle nous
permet d’explorer tous les univers possibles afin d’en ramener les graines dans notre vie
quotidienne.
</p>
<p class="citations"><i>« Toute réalisation a d’abord été un rêve dans la tête de quelqu’un. »</i> A. Einstein</p>
<br>
<i><strong>2. Caractéristiques</strong></i>
<br><br>
<p>
- La Conscience est omniprésente. Nous la ressentons toujours. Par exemple, c’est grâce à elle
qu’on sait que l’on rêve. C’est par elle que nous voyons, ressentons et pensons.
<br>
- Elle est intemporelle. L’espace-temps n’existe pas.
<br>
- Elle se densifie en plusieurs strates des plus subtiles aux plus matérielles : la Conscience active
l’Âme constituée d’Objets Informationnels (symboles ou archétypes) en passant par le Soi Idéal
et cela forme nous, conscient.
Elle est créatrice c’est-à-dire qu’elle peut créer à partir de rien.
<br>
- Elle utilise un langage symbolique, holistique et intuitif.
<br>
- Elle est l’Information pure qui n’a ni énergie, ni masse.
<br>
- Elle nous a produit et nous maintient en vie puisqu’elle ordonne tous les systèmes du corps et
de l’esprit. C’est notre inné.
<br>
- C’est la plus grande partie de notre esprit : elle est « nous » et plus que « nous » dans la
mesure où elle est à la fois individuelle et collective.
<br>
- Elle est l’origine de nos pensées et notre mémoire comme l’océan dont nous sommes les
gouttes d’eau. Elle est donc notre source. Elle est à la fois en nous et hors de nous.
<br>
- Elle mêle simplicité et extrême complexité, par la justesse de ses conseils, de ses décisions.
</p>
<h5 class="titles sectionTitle">L’Inconscient</h5>
<p>
En Hypnose Humaniste, l’Inconscient est tout ce que l’on n’est pas encore conscient. Il s’agit d’un
ensemble d’automatismes dont on peut prendre conscience. Une fois conscientisé, on peut le
considérer comme notre Automate.
<br><br>
Il porte la mémoire de notre histoire de vie et ainsi nos blessures intérieures. Il déclenche chacun
de nos ressentis et forge notre caractère. C’est par le biais de la Conscience qu’en Hypnose
Humaniste, nous le soignons.
</p>
<br>
<i><strong>1. Fonctions</strong></i>
<br><br>
<p>
Il existe trois fonctions qui déterminent les trois strates citées ci-dessous respectivement :
<br><br>
- L’inconscient régule et coordonne nos fonctions biologiques. Ce niveau de fonctionnement se
situe dans le cerveau reptilien où siège notre instinct de survie. Il gère le corps et ses
automatismes et assure ainsi le bon fonctionnement des systèmes. Etant le premier niveau, il
domine nos pensées, nos émotions et nos actions.
<br>
- Il encode nos apprentissages et nos émotions. Ce deuxième niveau se situe dans le cerveau
limbique où circulent nos mémoires, où se font nos émotions, où se développe la créativité. Il
est responsable de notre confort émotionnel.
<br>
- Il développe notre intellect. Ce troisième niveau se situe dans le néocortex. Il conçoit notre
perception du monde, le temps, la logique, les notions de distance, le mental, les règles et les
catégories, et toutes nos convictions et croyances. Il nous permet de prendre conscience de la
Conscience.
</p>
<br>
<i><strong>2. Strates</strong></i>
<br><br>
<p>
Strate 1 : Corporelle
<br><br>
Le ventre est le domaine symbolique de cette strate : quand les problèmes nous empêchent de
dormir, nous coupent l’appétit, quand la peur tord le ventre…
<br><br>
Strate 2 : Emotionnelle
<br><br>
La poitrine est le symbole de cette strate, là où nous ressentons nos émotions : gorge nouée,
coeur qui bat la chamade, oppression…
<br><br>
Strate 3 : Intellectuelle
<br><br>
La tête est le siège symbolique de cette strate : quand quelque chose vous casse la tête,
impression que la tête va exploser, que l’on en a par-dessus la tête…
</p>
<br>
<h5 class="titles">La Matrice</h5>
<br>
<p>La Matrice (notre « Âme ») est notre « Grand Inconscient ». Elle est constituée d’une masse
d’informations densifiées qui forment les programmes de tout ce qui existe : les différents êtres
vivants, les formes, les émotions, les pensées… Elle est ainsi notre « nous » concret, celle qui nous
donne la forme humaine. Elle est éternelle puisqu’elle n’est pas liée à la personne. Son langage est
symbolique.</p>
<br>
<h5 class="titles">Les Objets Informationnels</h5>
<br>
<p>
La Matrice (L’Âme) est constituée de nombreux blocs d’Informations cristallisées que l’on appelle
les Objets Informationnels. Quand ils sont propres à une seule personne, on les appelle des
« symboles ». Et quand on les retrouve partout sur la planète, peu importe l’époque ou la culture,
on les dénomme des « archétypes ». <br><br>
En thérapie ou en coaching, ce sont ces objets informationnels que nous allons saisir. En agissant
sur eux, nous pouvons changer leur conséquence en nous au niveau de l’Inconscient.
</p>
<br>
<h5 class="titles">Le Soi Idéal</h5>
<br>
<p>
Le Soi Idéal est la frontière perméable entre la Conscience et la Matrice. Cette strate supérieure
comporte l’Information du « meilleur nous possible ». C’est ce qui nous incite à toujours améliorer
notre vie. Il est donc la strate qui détermine notre existence (au niveau physique, notre scénario de
vie, notre psyché…). <br><br>
Nous pouvons atteindre notre Soi Idéal grâce aux inductions humanistes. Se placer à ce niveau
nous permet de créer de nouvelles possibilités, ouvrir vers d’autres possibles.
</p>
<br>
<h5 class="titles">Le Conscient et son rôle</h5>
<br>
<p>
Le conscient est le lien entre l’Inconscient et la Conscience. Habituellement, c’est cette partie que
le thérapeute cherche à mettre de côté. Pourtant, c’est le seul « nous » dont nous sommes
conscient. Le seul qui prend conscience. C’est donc la solution à tout : de notre bonheur, de notre
développement personnel… <br><br>
Le conscient est fait de perceptions. Il reconnait l’espace-temps grâce à notre néocortex. C’est
l’expression de la Conscience. <br><br>
Le thérapeute, en Hypnose Humaniste, lorsqu’il met la personne en Etat de Conscience
Augmentée, cherche à faire grandir le conscient pour qu’il gagne en conscience. <br><br>
Il s’agit de s’éveiller, de se rendre compte de nos automatismes pour traiter nos blessures
profondes et de vivre avec davantage de lucidité.
</p>
<br>
<h5 class="titles">Utilisation thérapeutique</h5>
<br>
<i><strong>1. Exemples</strong></i>
<br><br>
<p>
Manque de confiance et d’estime de soi, stress, anxiété, gestion des émotions, changement de vie
difficile à vivre (adolescence, perte d’un être cher, accident, maladie, rupture, déménagement,
retraite), addictions, compulsions…
</p>
<br>
<i><strong>2. Outils</strong></i>
<br><br>
<p>
Pour mettre une personne en Etat de Conscience Augmentée, le thérapeute ou la personne
elle-même peuvent utiliser huit formes d’induction : les élévations matérielle et subtile qui vont
donner l’impression d’être plus grand ; les expansions matérielle et subtile qui vont donner
l’impression d’être plus vaste ; l’identification Consciente va permettre de se reconnecter avec
nous-même et avec notre environnement ; l’expansion temporelle est surtout utilisée pour
voyager à travers le temps ; l’intériorisation consciente est beaucoup utilisée en Thérapie
Symbolique Avancée ; et l’expansion globale qui est la somme des sept précédentes inductions. <br><br>
L’hypnose humaniste utilise deux techniques phares : la Thérapie Symbolique Simple et la Thérapie
Symbolique Avancée.
</p>
<br>
<i><strong>3. Philosophie</strong></i>
<br><br>
<p>
L’Hypnose Humaniste s’inspire du courant humaniste Européen dont Pic de la Mirandole, Erasme
et Montaigne faisaient partie. Ce courant met en avant des idées telles que : toute personne ayant
accès au savoir facilite la compréhension et la vulgarisation de celui-ci. L’individu peut alors utiliser
pleinement son libre arbitre et devenir ainsi responsable de ses actes et de ses croyances. Il gagne
ainsi en autonomie et en curiosité par rapport au Monde. Il acquiert ainsi une plus grande
ouverture d’esprit et de tolérance envers les personnes et les événements du quotidien. Le respect
et l’action pour le mieux-être de toute l’humanité sont mis en valeur. « Qui sauve l’homme sauve
l’humanité » devient le leitmotiv des humanistes.
<br><br>
En Hypnose Humaniste, la personne, étant en Etat de Conscience Augmentée, prend conscience de
ses propres mécanismes, au travers des symboles. Ceci lui permettent d’évoluer et de vivre plus
heureuse. Elle trouve elle-même les solutions qui lui permettent d’agir au niveau de son moral ou
de son évolution. Elle peut également avoir un nouveau regard sur elle et sur le monde qui
l’entoure.
<br><br>
On dit que si on nettoie un grain de sable, c’est toute la plage qui en bénéficie car elle est devenue
plus propre.
</p>

</section>

<?php
include './includes/footer.php';
?>