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
            <h2>Contact form</h2>
            <form action ="/form/submit">
                <label for="Name">Nom</label>
                    <input type="text" id="name" placeholder="Type your name here">
</br>
                <label for="Email">Mail</label>
                    <input type="text" id="email" placeholder="Type your mail here">
</br>
                <label for="Location">Location</label>
                    <select id="Kingdom" name="location">
                        <option value="Novigrad">Novigrad</option>
                        <option value="Skellige">Skellige</option>
                        <option value="Cintra">Cintra</option>
                    </select>

                <label for="Object">Objet</label>
                    <select id="Object" name="object">
                        <option value="Relative">Retrouver une personne disparue</option>
                        <option value="Monster">Chasser un monstre</option>
                        <option value="Computer">C'est quoi Internet? C'est quoi un "développeur"?</option>
                        <option value="Ciri">Vous avez vu Ciri? Où était-elle? Que faisait-elle?</option>
                        <option value="Gwynt">Un petit Gwynt?</option>
                        <option value="Other">Autre raison</option>
                    </select>

                <label for="Message">Ecrivez votre message</label>
                    <textarea id="message" name="message" placeholder="Ecrivez votre message ici..." style="height: 200px">Ecrivez votre message ici...</textarea>

                <input type="submit" value="Send">
            </form>
            </section>
</article>
</main>
</body>
</html>