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
            <form action ="/form/submit">
                <h2>Contact form</h2>
                <label for="Name">Name</label>
</br>
                <input type="text" id="name" placeholder="Type your name here">
</br>
                <label for="Email">Email</label>
</br>
                <input type="text" id="email" placeholder="Type your mail here">
</br>
                <label for="Location">Location</label>
                    <select id="Kingdom" name="location">
                        <option value="Novigrad">Novigrad</option>
                        <option value="Skellige">Skellige</option>
                        <option value="Cintra">Cintra</option>
                    </select>

                <label for="Object"><Object>Object</Object></label>
                    <select id="Object" name="object">
                        <option value="Relative">Search for a missing relative</option>
                        <option value="Monster">Hunt down a monster</option>
                        <option value="Computer">What is this "developer" thing?</option>
                        <option value="Ciri">Have you seen Ciri?</option>
                        <option value="Gwynt">Let's play Gwynt!</option>
                        <option value="Other">Other... </option>
                    </select>

                <label for="Message">Write your message</label>
                    <textarea id="message" name="message" placeholder="Ecrivez votre message ici..." style="height: 200px">Write your message here... </textarea>

                    <div class="submit">
                <input type="submit" value="Send">
                    </div>
            </form>
            </section>
</article>
</main>
</body>
</html>