<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Website with an online resume of Geralt of Rivia, The Witcher">
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="base.css">
    <link rel="stylesheet" href="burgercss.css">
    <title>CV de Geralt - A Propos</title>
    </head>

<body>
<nav class="navbar dark-mode" role="navigation">
        <div></div>
        <h1 class="navtitle">A PROPOS</h1> 
        
        <ul class="navbar__links">
        <li class="navbar__link first"><a href="home.php">Accueil</a></li>
      <li class="navbar__link second"><a href="about.php">A propos</a></li>
      <li class="navbar__link third"><a href="experience.php">Experience</a></li>
      <li class="navbar__link four"><a href="skills.php">Competences</a></li>
      <li class="navbar__link fifth"><a href="contact_form.php">Contact</a></li>
    </ul>   
    <button class="burger">
      <span class="bar"></span>  
     </button> 
    </nav>

    <header>
        <div class="photo"></div>
        <h1>Geralt de Riv</h1>
    </header>

    <section class="presentation">
        <h1>Qui suis-je ?</h1>
       
    <p>Je suis Geralt de Riv, un sorceleur de l'école du Loup. J'ai été entraîné pour chasser et tuer de gros monstres terrifiants, moyennant finances.</p>
    <p>J'ai démarré une reconversion professionnelle car je voulais voir d'autres horizons, commencer une nouvelle aventure dans un tout nouveau domaine, me confronter avec l'inconnu... (je plaisante, chasser des monstres n'est juste plus aussi lucratif en ce moment).</p>
    <p>C'est tout ce que vous devez savoir sur moi. Si vous voulez plus d'informations, contactez Jaskier. Il sera ravi de vous raconter tous mes aventures et mes succès, à quel point je suis une merveilleuse personne, pendant de longues heures si vous ne l'arrêtez pas avant.</p>
    <p>Si vous avez contacté Yennefer, je ne sais pas ce qu'elle vous a dit sur moi mais c'est faux, je vous assure. Yennefer, si tu vois ça, Triss est juste mon amie, je te promets... Amie proche, certes, mais juste une amie.
        
    <div class="gif">
            <img alt="Gif of Geralt smiling" src="geralt-smile.gif">
            <p>(Rare) image de moi, souriant. Profitez, vous ne verrez pas ça souvent.</p>
    </div>
    <hr>

    <h1>Hobbies</h1>
    <p>Je suis un homme très passionné dans la vie de tous les jours, vraiment ! Voici une liste de ce que j'aime faire au quotidien :</p>
    <ul>
        <li>Massacrer des monstres</li>
        <li>Jouer au Gwynt (le meilleur jeu de cartes du monde)</li>
        <li>Défoncer des péquenauds qui ont trop bu</li>
        <li>Prendre soin d'Ablette, ma fidèle jument</li> 
        <li>Rechercher ma fille Ciri. L'avez-vous vue ? Si oui, vous pouvez me contacter ici.</li>
    </ul>
         <div class="roach">
            <img alt="Geralt and its horse Roach" src="ablette.jpg">
            <p>Voici Ablette, mon amie la plus fidèle. Touchez-la seulement avec vos yeux, ou je devrai vous tabasser à mort...</p>
            </div>
        <hr>

    <h1>Objectifs & Projets</h1>
    <p>Comme vous avez pu deviner en lisant ces quelques lignes, ou en parlant à Jaskier, je suis un homme très altruiste.
        Je suis vraiment soucieux des autres (sorceleurs). C'est l'une des raisons pour lesquelles je cherche à améliorer mes compétences en développement web :
        aider mes pairs sorceleurs. </p>

    <p>L'un de mes projets est de concevoir un réseau social destiné aux sorceleurs.
        Ce projet a pour but de faciliter la communication, partager de précieux conseils pour la chasse,
        aider à localiser des cibles, des plantes pour les potions... ou des tavernes pour organiser des super tournois de gwynt.</p>
        <p>Ou trouver Ciri et Yennefer peut-être, sur un coup de chance. </p>
        

    <div class="gwent">
        <img alt="Geralt angry" src="geralt-angry.gif">
        <p>Ne venez pas me déranger si vous n'avez pas de jeu de gwynt sur vous. Bien aimablement.</p>
    </div>
    <div class="btn"><i class="icon"></i>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="btn" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
</svg>
    </div>

    <footer>
        <?php include('footer.php') ?>
    </footer>
    <script type="text/javascript" src="arrow.js"></script>
    <script type="text/javascript" src="burger.js"></script>
</body>
</html>