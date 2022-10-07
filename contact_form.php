<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {

    foreach ($_POST as $key => $value) {
        $contact[$key] = trim($value);
    }

    $wrongInputs = [];

    if (empty($contact['name'])) {
        $wrongInputs[] = 'Hmm. Le nom est obligatoire.';
    }

    if (empty($contact['email'])) {
        $wrongInputs[] = 'Hmm. L\'adresse mail est obligatoire.';
    }

    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $wrongInputs[] = 'Hmm. Si tu donnes un email, mets-le au bon format.';
    }

    if (empty($contact['location'])) {
        $wrongInputs[] = 'Hmm. La région est obligatoire.';
    }

    if (empty($contact['object'])) {
        $wrongInputs[] = 'Hmm. L\'objet est obligatoire.';
    }

    if (empty($contact['message'])) {
        $wrongInputs[] = 'Hmm. Le message est obligatoire.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_contact_form.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/burgercss.css">
    <title>Contact form</title>
</head>
<nav nav class="navbar dark-mode" role="navigation">
    <div></div>

    <h1 class="navtitle">CONTACT</h1>
    <?php include('navbar.php') ?>

</nav>
<header>
    <div class="photo"></div>
    <h1>Geralt de Riv</h1>
</header>

<?php
if (isset($wrongInputs) && count($wrongInputs) > 0) { ?>
    <div class="error-message">
        <ul>
            <?php foreach ($wrongInputs as $wrongInput) { ?>
                <li><?php echo $wrongInput; ?></li>
            <?php }; ?>
        </ul>
    </div>
<?php } else if ($_SERVER['REQUEST_METHOD'] === "POST") { ?>
    <div class="success-message">
        <?php echo 'Message bien reçu.' . PHP_EOL; ?>
    </div>
<?php }; ?>


<body>
    <h1 class="thunes">Toss a coin to your developer!</h1>
    <main>
        <section>
            <img src="images/Geralt-gifEnGrand.gif"></img>
            <form action='' method="POST">
                <h2>Contactez-moi</h2>
                <label for="name">Nom</label>
                </br>
                <input type="text" name="name" placeholder="Ecrivez votre nom ici" required>
                </br>
                <label for="email">Email</label>
                </br>
                <input type="email" name="email" placeholder="Ecrivez votre email ici" required>
                </br>
                <label for="Location">Région</label>
                <select name="location" required>
                    <option value="cintra">Cintra</option>
                    <option value="novigrad">Novigrad</option>
                    <option value="skellige">Skellige</option>
                    <option value="temeria">Temeria</option>
                    <option value="toussaint">Toussaint</option>
                    <option value="velen">Velen</option>
                </select>


                <label for="object"><Object>Objet</Object></label>
                <select name="object" required>
                    <option value="relative">Rechercher une personne disparue</option>
                    <option value="monster">Chasser / Tuer un monstre</option>
                    <option value="developer">Besoin d'un développeur web</option>
                    <option value="ciri">Vous avez vu Ciri?</option>
                    <option value="gwynt">Un petit Gwynt?</option>
                    <option value="other">Autres </option>
                </select>

                <label for="message">Votre message</label>
                <textarea name="message" value="message" placeholder="Ecrivez votre message ici..." style="height: 200px" required></textarea>

                <div class="submit">
                    <input type="submit" name="envoi" value="Envoyer">
                </div>
            </form>
        </section>
    </main>
</body>
<div class="btn"><i class="icon"></i>
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="btn" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
    </svg>
</div>

<footer>
    <?php include('footer.php') ?>
</footer>
<script type="text/javascript" src="js/arrow.js"></script>
<script type="text/javascript" src="js/burger.js"></script>

</html>