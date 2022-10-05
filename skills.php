<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Website with an online resume of Geralt of Rivia, The Witcher">
    <link rel="stylesheet" href="skills.css">
    <link rel="stylesheet" href="base.css">
    <link rel="stylesheet" href="burgercss.css">
    <title>CV de Geralt - Compétences</title>
    </head>

<body>
    <nav class="navbar dark-mode" role="navigation">
        <div></div>
        <h1 class="navtitle">COMPETENCES</h1> 

        <ul class="navbar__links">
      <li class="navbar__link first"><a href="#">Accueil</a></li>
      <li class="navbar__link second"><a href="#section2">Services</a></li>
      <li class="navbar__link third"><a href="#">Missions</a></li>
      <li class="navbar__link four"><a href="#">Portfolio</a></li>
      <li class="navbar__link fifth"><a href="#">Contact</a></li>
    </ul>   
    <button class="burger">
      <span class="bar"></span>  
     </button> 
        
    </nav>

    <header>
        <div class="photo"></div>
        <h1>Geralt de Riv</h1>
    </header>

    <section class="skills">

    <h1>Competences de developpeur</h1>
    <div class="skills-bar">
        <div class="bar2">
            <div class="info">
                <span>PHP</span>
            </div>
            <div class="progress-line php"><span></span></div>
        </div>
        <div class="bar2">
            <div class="info">
                <span>HTML</span>
            </div>
            <div class="progress-line html"><span></span></div>
        </div>
        <div class="bar2">
            <div class="info">
                <span>MySQL</span>
            </div>
            <div class="progress-line mysql"><span></span></div>
        </div>
        <div class="bar2">
            <div class="info">
                <span>CSS</span>
            </div>
            <div class="progress-line css"><span></span></div>
        </div>
        <div class="bar2">
            <div class="info">
                <span>JavaScript</span>
            </div>
            <div class="progress-line js"><span></span></div>
        </div>
    </div>

    <!--<h2>PHP</h2>
    <h2>Javascript</h2>
    <h2>C++</h2>
    <h2>HTML</h2>
    <h2>CSS</h2> -->

    <div class="math">
    <img alt="Geralt doing math" src="geralt-math.gif">
    <p>Mon premier face-à-face avec un cours de formulaire en PHP. Le chemin n'a pas été de tout repos...</p>
    </div>
    <hr>

    <h1>Competences de sorceleur</h1>
    <div class="skills-bar">
        <div class="bar2">
            <div class="info">
                <span>Chasse aux monstres</span>
            </div>
            <div class="progress-line hunt"><span></span></div>
        </div>
        <div class="bar2">
            <div class="info">
                <span>Alchimie</span>
            </div>
            <div class="progress-line alchimie"><span></span></div>
        </div>
        <div class="bar2">
            <div class="info">
                <span>Combat à l'épée</span>
            </div>
            <div class="progress-line epee"><span></span></div>
        </div>
        <div class="bar2">
            <div class="info">
                <span>Équitation</span>
            </div>
            <div class="progress-line equitation"><span></span></div>
        </div>
        <div class="bar2">
            <div class="info">
                <span>Combat à mains nues</span>
            </div>
            <div class="progress-line bagarre"><span></span></div>
        </div>
    </div>

<!-- 
    <h2>Combat à l'épée</h2>
    <h2>Chasse aux monstres</h2>
    <h2>Combat à mains nues</h2>
    <h2>Équitation</h2>
    <h2>Alchimie</h2>  -->

    <div class="fight">
    <img alt="Geralt fighting bad guys" src="fight.gif">
    <p>Le Boucher de Blaviken pour les uns, le Tueur du Dev pour les autres.
    </div>
    <hr>

    <h1>Soft Skills</h1>

       <div class="skills-bar">
        <div class="bar2">
            <div class="info">
                <span>Rigueur et fiabilité</span>
            </div>
            <div class="progress-line rigor"><span></span></div>
        </div>
        <div class="bar2">
            <div class="info">
                <span>Créativité</span>
            </div>
            <div class="progress-line creativity"><span></span></div>
        </div>
        <div class="bar2">
            <div class="info">
                <span>Résistance au stress</span>
            </div>
            <div class="progress-line stress"><span></span></div>
        </div>
        <div class="bar2>
            <div class="info">
                <span>Maîtrise de soi</span>
            </div>
            <div class="progress-line maitrise"><span></span></div>
        </div>
        <div class="bar2">
            <div class="info">
                <span>Amabilité</span>
            </div>
            <div class="progress-line communication"><span></span></div>
        </div>
    </div>

    </section>

    <footer>
        <?php include('footer.php') ?>
    </footer>
    <script type="text/javascript" src="burger.js"></script>
</body>
</html>