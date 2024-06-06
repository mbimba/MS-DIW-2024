<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> N CODE TEST: PHP - Les mots de passe </title>
</head>


<body>

 <!-- N CODE PHP - Les mots de passe -->
 <h1> N CODE TEST: PHP - LES MOTS DE PASSE </h1>
<p><strong> Fonction PHP password_hash() </strong></p>


<!-- *********************   -->  
<?php
 password_hash($chaine, $algorithme);
?>

<!-- *********************   -->  
<p><strong> Fonction PHP password_hash(): Exemple </strong></p>
<?php
   $password_hash = password_hash("vacances", PASSWORD_DEFAULT);
   echo $password_hash; // Affiche: $2y$10$BDr3D7phxhKH9G0NHYvKI.12.cizpsjz3/nIdyRkFqeD75iGtJbku 
   // C'est cette valeur qu’il faut stocker en base de données. 
?>

<!-- ************************   -->  
<p><strong>La fonction PHP password_verify()</strong></p>
<?php
password_verify($chaine_saisie_en_clair, $hash_stocke_en_bdd);
?>

<!-- ************************   -->  
<?php

?>






<!-- ****************************** -->

<h2></h2>
<p></p>





</body>
</html>