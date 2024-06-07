<?php

session_start();


// Connexion à la base de données

$dsn = 'ysql:host=localhost;dbname=mydatabase';

$username = 'yusername';

$password = 'ypassword';


try {

  $pdo = new PDO($dsn, $username, $password);

} catch (PDOException $e) {

  die('Erreur de connexion à la base de données : '. $e->getMessage());

}


// Vérification des données du formulaire

if (isset($_POST['login']) && isset($_POST['password'])) {

  $login = $_POST['login'];

  $password = $_POST['password'];
  // Recherche de l'utilisateur dans la table user

  $stmt = $pdo->prepare('SELECT * FROM user WHERE email = :email');

  $stmt->bindParam(':email', $login);

  $stmt->execute();

  $user = $stmt->fetch();


  if ($user) {

    // Vérification du mot de passe

    if (password_verify($password, $user['password'])) {

      $_SESSION['auth'] = 'ok';

      header('Location: protected_page.php');

      exit;

    } else {

      unset($_SESSION['auth']);

      header('Location: login_form.php');

      exit;

    }

  } else {

    unset($_SESSION['auth']);

    header('Location: login_form.php');

    exit;

  }
}

?>