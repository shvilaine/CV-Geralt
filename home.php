<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Website with an online resume of Geralt of Rivia, The Witcher">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="burgercss.css">
    <title>Geralt's Resume - Home</title>
    <script src="https://kit.fontawesome.com/50a5351433.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar dark-mode" role="navigation">
    
        
        <h1 class="navtitle">HOME</h1> 
       
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
        <h1>Geralt of Rivia</h1>
        <h2>Witcher and Web Developer</h2>
    </header>

     <section class="networks">
        <h1>My social networks</h1>
            <div class="icons">
                <a href="#"><p><i class="fa-brands fa-linkedin"></i></p></a>
                <a href="#"><p><i class="fa-brands fa-square-facebook"></i></p></a>
                <a href="#"><p><i class="fa-brands fa-square-twitter"></i></p></a>
                <a href="#"><p><i class="fa-brands fa-instagram"></i></p></a>
                <a href="#"><p><i class="fa-brands fa-square-github"></i></p></a>
            </div>
    </section>

    <footer>
        <?php include('footer.php') ?>
    </footer>
    
    <script type="text/javascript" src="burger.js"></script>
</body>
</html>