<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style contact_form.css">
    <title>Contact form</title>
</head>
    <nav>
        <div class="burger"></div>
        <div class="navtitle"> <h1>CONTACT</h1> </div>
        <div class="message"></div>
    </nav>
        <header>
            <div class="photo"></div>
            <h1>Geralt of Rivia</h1>
        </header>
<body>
    <main>
    <article>
    <h1>Toss a coin to your developer!</h1>
            <section>
                <img src="Geralt-gif.gif"></img>
            <form action ="/form/submit" method="post">
                <h2>Contactez-moi</h2>
                <label for="name">Nom</label>
</br>
                <input type="text" id="name" placeholder="Ecrivez votre nom ici">
</br>
                <label for="email">Email</label>
</br>
                <input type="email" id="email" placeholder="Ecrivez votre email ici">
</br>
                <label for="Location">Région</label>
                    <select id="kingdom" name="location">
                        <option value="cintra">Cintra</option>
                        <option value="novigrad">Novigrad</option>
                        <option value="skellige">Skellige</option>
                        <option value="temeria">Temeria</option>
                        <option value="toussaint">Toussaint</option>
                        <option value="velen">Velen</option>
                    </select>

                <label for="object"><Object>Objet</Object></label>
                    <select id="object" name="object">
                        <option value="relative">Rechercher une personne disparue</option>
                        <option value="ronster">Chasser / Tuer un monstre</option>
                        <option value="computer">C'est quoi un "développeur"? </option>
                        <option value="ciri">Vous avez vu Ciri?</option>
                        <option value="gwynt">Un petit Gwynt?</option>
                        <option value="other">Autres </option>
                    </select>

                <label for="message">Votre message</label>
                    <textarea id="message" name="message" placeholder="Ecrivez votre message ici..." style="height: 200px">Ecrivez votre message ici...</textarea>

                    <div class="submit">
                <input type="submit" value="Send">
                    </div>
            </form>
            </section>
</article>
</main>
</body>
</html>