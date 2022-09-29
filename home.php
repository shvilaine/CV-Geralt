<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Website with an online resume of Geralt of Rivia, The Witcher">
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="burger.css">
    <title>Geralt's Resume - Home</title>
</head>
<body>
    <nav class="navbar dark-mode" role="navigation">
        <div class="navtitle"> <h1>Home</h1></div>
        
        <ul class="navbar__links">
      <li class="navbar__link first"><a href="#">Home</a></li>
      <li class="navbar__link second"><a href="#section2">Experiences</a></li>
      <li class="navbar__link third"><a href="#">Missions</a></li>
      <li class="navbar__link four"><a href="#">Portfolio</a></li>
      <li class="navbar__link fifth"><a href="#">Contact</a></li>
    </ul>   
    <button class="burger">
      <span class="bar"></span>  
    </button>   
    </nav>
   
    <header class="background-image">
        <div class="photo">
            <h1>Geralt of Rivia</h1>
        </div>
</header>

    
    <div class="networks">
        <h1>My social networks</h1>
    </div>
    
 

<footer>
    <?php include('footer.php') ?>
</footer>
<script type="text/javascript" src="burger.js"></script>
</body>
</html>