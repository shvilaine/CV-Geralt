<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_contact_form.css">
    <link rel="stylesheet" href="base.css">
    <link rel="stylesheet" href="burgercss.css">
    <title>Contact form</title>
</head>
<nav nav class="navbar dark-mode" role="navigation">
    <div></div>
    
        <h1 class="navtitle">CONTACT</h1>
    
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

<body>
    <h1 class="thunes">Toss a coin to your developer!</h1>
    <main>
        <section>
            <img src="Geralt-gifEnGrand.gif"></img>
            <form action="/form/submit" method="POST">
                <h2>Contactez-moi</h2>
                <label for="name">Nom</label>
                </br>
                <input type="text" name="name" value="name" placeholder="Ecrivez votre nom ici">
                </br>
                <label for="email">Email</label>
                </br>
                <input type="email" name="email" value="email" placeholder="Ecrivez votre email ici">
                </br>
                <label for="Location">Région</label>
                <select name="location">
                    <option value="cintra">Cintra</option>
                    <option value="novigrad">Novigrad</option>
                    <option value="skellige">Skellige</option>
                    <option value="temeria">Temeria</option>
                    <option value="toussaint">Toussaint</option>
                    <option value="velen">Velen</option>
                </select>

                <label for="object"><Object>Objet</Object></label>
                <select name="object">
                    <option value="relative">Rechercher une personne disparue</option>
                    <option value="monster">Chasser / Tuer un monstre</option>
                    <option value="developer">C'est quoi un "développeur"? </option>
                    <option value="ciri">Vous avez vu Ciri?</option>
                    <option value="gwynt">Un petit Gwynt?</option>
                    <option value="other">Autres </option>
                </select>

                <label for="message">Votre message</label>
                <textarea name="message" value="message" placeholder="Ecrivez votre message ici..." style="height: 200px">Ecrivez votre message ici...</textarea>

                <div class="submit">
                    <input type="submit" name="envoi" value="Envoyer">
                </div>
            </form>
        </section>
    </main>
    <div class="btn"><i class="icon"></i>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="btn" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
</svg>
    </div>
    <script type="text/javascript" src="arrow.js"></script>
    <script type="text/javascript" src="burger.js"></script>
</body>

</html>