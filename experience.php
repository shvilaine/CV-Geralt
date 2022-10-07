<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Website with an online resume of Geralt of Rivia, The Witcher">
    <link rel="stylesheet" href="base.css">
    <link rel="stylesheet" href="burgercss.css">
    <link rel="stylesheet" href="experience.css">
    <title>CV de Geralt - Expérience</title>
</head>

<body>
    <nav class="navbar dark-mode" role="navigation">
    <div></div>
        
        <h1 class="navtitle">Experience</h1> 
        
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

    <section>
        <h1>Experiences professionnelles</h1>
        <div class="card">
            <img src="geralt-app.png" alt="Geralt's app picture">
            <div class="description">
                <h1>Developpeur Web</h1>
                <h2>- Pont Vanis, Kovir</h2>
                <p>Suite à l'obtention de mon diplôme de développeur, j'ai eu la chance de travailler
                    pour le compte du roi du Kovir, qui m'a chargé de développer une carte interactive
                    des royaumes du Nord. Mon travail a permis d'augmenter le trafic du site du royaume du Kovir de 30%.</p>
            </div>
        </div>

        <div class="card">
            <img src="geralt-monster.gif">
            <div class="description">
                <h1>Maitre Sorceleur</h1>
                <h2>- Monde entier</h2>
                <p>A l'issue de ma formation, j'ai parcouru le monde entier pendant des années au fil des contrats, et aussi des (més)aventures de Ciri,
                    ma fille adoptive, et Yennefer, ma... je ne sais pas trop, demandez-lui.</p>
            </div>
        </div>
    </section>

    <hr>


<div class="btn"><i class="icon"></i>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="btn" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
</svg>
    </div>
    <script type="text/javascript" src="arrow.js"></script>
<script type="text/javascript" src="burger.js"></script>
    <section>
        <h1>Formations & Ecoles</h1>

        <div class="card">
            <img src="aretuza.png">
            <div class="description">
                <h1>Apprenti Developpeur</h1>
                <h2>- Wild Code School, Oxenfurt, Redania</h2>
                <p>Après en avoir fini avec mes pérégrinations de sorceleur, j'ai obtenu une bourse à la célèbre
                    Wild Code School de l'université d'Oxenfurt, dans laquelle j'ai suivi une formation de développeur
                    web en PHP et JavaScript.</p>
            </div>
        </div>

        <div class="card">
            <img src="kaer-2.png">
            <div class="description">
                <h1>Apprenti Sorceleur</h1>
                <h2>- Kaer Morhen, Kaedwen</h2>
                <p>Arrivé enfant dans cette magnifique (horrible) forteresse de Kaer Morhen,
                    j'y ai appris le combat, l'alchimie, et tous les rudiments du métier de sorceleur
                    auprès de Vesemir, mon mentor de toujours.
            </div>
        </div>
    </section>


    <footer>
        <?php include('footer.php') ?>
    </footer>

</body>

</html>
