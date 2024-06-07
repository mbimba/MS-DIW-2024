<?php


// Connexion à la base de données


$dsn = 'mysql:host=localhost;dbname=mydatabase';


$username = 'yusername';


$password = 'ypassword';



try {


  $pdo = new PDO($dsn, $username, $password);


} catch (PDOException $e) {


  die('Erreur de connexion à la base de données : '. $e->getMessage());


}



// Vérification des données du formulaire


if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm_password'])) {


  $nom = $_POST['nom'];


  $prenom = $_POST['prenom'];


  $email = $_POST['email'];


  $password = $_POST['password'];


  $confirm_password = $_POST['confirm_password'];

  // Vérification des données


  if ($password!= $confirm_password) {


    echo "Les mots de passe ne correspondent pas.";


    exit;


  }



  // Hashage du mot de passe


  $hashed_password = password_hash($password, PASSWORD_DEFAULT);



  // Insertion des données dans la table user


  $stmt = $pdo->prepare('INSERT INTO user (nom, prenom, email, password) VALUES (:nom, :prenom, :email, :password)');


  $stmt->bindParam(':nom', $nom);


  $stmt->bindParam(':prenom', $prenom);


  $stmt->bindParam(':email', $email);


  $stmt->bindParam(':password', $hashed_password);


  $stmt->execute();



  echo "Inscription réussie";

 
?>