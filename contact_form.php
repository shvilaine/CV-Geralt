<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_contact_form.css">
    <link rel="stylesheet" href="base.css">
    <title>Contact form</title>
</head>
<nav>
    <div class="burger"></div>
    <div class="navtitle">
        <h1>CONTACT</h1>
    </div>
    <div class="message"></div>
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
</body>

</html>