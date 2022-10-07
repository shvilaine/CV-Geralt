<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Website with an online resume of Geralt of Rivia, The Witcher">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/burgercss.css">
    <title>Geralt's Resume - Home</title>
    <script src="https://kit.fontawesome.com/50a5351433.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar dark-mode" role="navigation">

        <div></div>
        <h1 class="navtitle">Accueil</h1>
        <?php include('navbar.php') ?>

    </nav>

    <header>
        <div class="photo"></div>
        <h1>Geralt de Riv</h1>
        <h2 class="home">Sorceleur et Developpeur</h2>
    </header>

    <section class="networks">
        <h1>Mes reseaux sociaux</h1>
        <div class="icons">
            <a target="_blank" href="https://tr.linkedin.com/in/geralt-rivia-858950216/fr?trk=people-guest_people_search-card">
                <p><i class="fa-brands fa-linkedin"></i></p>
            </a>
            <a target="_blank" href="https://fr-fr.facebook.com/people/Geralt-Riv/100072174681862/">
                <p><i class="fa-brands fa-square-facebook"></i></p>
            </a>
            <a target="_blank" href="https://twitter.com/geraltde_riv">
                <p><i class="fa-brands fa-square-twitter"></i></p>
            </a>
            <a target="_blank" href="https://www.instagram.com/geralt_off_rivia/">
                <p><i class="fa-brands fa-instagram"></i></p>
            </a>
            <a target="_blank" href="https://github.com/topics/geralt-from-rivia">
                <p><i class="fa-brands fa-square-github"></i></p>
            </a>
            <i class="arrow"></i>
        </div>
    </section>

    <footer>
        <?php include('footer.php') ?>
    </footer>

    <script type="text/javascript" src="js/burger.js"></script>
</body>

</html>