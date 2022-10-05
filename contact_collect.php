<?php

if (isset($_POST["envoi"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $location = $_POST["location"];
    $object = $_POST["object"];
    $message = $_POST["message"];


} else {
    header("Location: ../contact_form.php?message=error");
}

/* Hmm.
[champ] requiert [critère].
Recommence maintenant.

Hmm. 
[champ] est obligatoire.
Recommence.
*/