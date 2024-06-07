<?php

session_start();


if (!isset($_SESSION['auth']) || $_SESSION['auth']!= 'ok') {

  header('Location: login_form.php');

  exit;

}


// Contenu de la page protégée

echo "Bienvenue, vous êtes connecté!";

?>