<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> N CODE EXERCICE: Les fichiers </title>
</head>
<body>
 <!-- N CODE LES FONCTIONS -->
 <h1> N CODE EXERCICE: LES FICHIERS PHP </h1>
<h2> - Téléchargez le fichier "lien.txt", il contient une liste de sites indispensables à la compréhension du monde moderne.<br>

- Écrire un programme qui lit ce fichier et qui construit une page web contenant une liste de liens hypertextes.<br>
- Utilisez la fonction file() qui permet de lire directement un fichier et renvoie son contenu sous forme de tableau.
 </h2>

<?php
$liens = file("liens.txt");

$liens++;

file("liens.txt", $liens);

print("$liens ");

?>

<!-- ************************************* -->

<h2></h2>

<?php
   // On ouvre le fichier moncompteur.txt
   $fichier = file("liens.txt","r+");

   // on lit la première ligne du fichier, le résultat est stocké dans la variable $visiteurs
   $visiteurs = fgets($fichier);


   // on se positionne au début du fichier
   fseek($fichier,0);


   // on referme le fichier moncompteur.txt
   fclose($fichier);

   // on indique sur la page le nombre de visiteurs
   echo "$visiteurs personnes sont passées par ici";
 ?>












<!-- ****************************** -->
<h2>bjr</h2>

<?php


?>

<!-- ****************************** -->

<?php

?>

<!-- ****************************** -->
<h2></h2>

<?php

?>

<!-- ****************************** -->
<h2></h2>

<?php

?>

<!-- ****************************** -->



























<!-- ****************************** -->

<h2></h2>
<?php

?>



</body>
</html>