<?php

session_start();


// Vérification des données du formulaire

if (isset($_POST['login']) && isset($_POST['password'])) {

    $login = $_POST['login'];

    $password = $_POST['password'];


    // Vérification des données (ici, nous utilisons des valeurs fixes pour l'exemple)

    if ($login == 'admin' && $password == 'admin') {

        $_SESSION['auth'] = 'ok';

        header('Location: protected_page.php');

        exit;

    } else {

        unset($_SESSION['auth']);

        header('Location: login_form.php');

        exit;

    }

}

?>