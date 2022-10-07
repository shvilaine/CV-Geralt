<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Website with an online resume of Geralt of Rivia, The Witcher">
    <link rel="stylesheet" href="css/skills.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/burgercss.css">
    <title>CV de Geralt - Compétences</title>
</head>

<body>
    <nav class="navbar dark-mode" role="navigation">
        <div></div>
        <h1 class="navtitle">COMPETENCES</h1> 

        <?php include('navbar.php') ?>
        
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

        <div class="picture">
            <img alt="Geralt doing math" src="images/geralt-math.gif">
            <h2>Mon premier face-à-face avec un cours sur les formulaires. Le chemin n'a pas été de tout repos...</h2>
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

        <div class="picture">
            <img alt="Geralt fighting bad guys" src="images/fight.gif">
            <h2>Certains m'appellent le Boucher de Blaviken, d'autres l'Assassin du PHP.</h2>.
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
        <div class="bar2">
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

    </section>
    <div class="btn"><i class="icon"></i>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="btn" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
</svg>
    </div>

    <footer>
        <?php include('footer.php') ?>
    </footer>

    <script type="text/javascript" src="js/arrow.js"></script>
    <script type="text/javascript" src="js/burger.js"></script>
</body>

</html>