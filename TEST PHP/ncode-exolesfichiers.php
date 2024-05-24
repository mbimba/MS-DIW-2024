<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> N CODE EXERCICE: Les fichiers </title>
</head>
<body>
 <!-- N CODE LES FICHIERS -->
 <h1> N CODE EXERCICE: LES FICHIERS PHP </h1>
 <h2>Lecture d'un fichier</h2>
<p> - Téléchargez le fichier "lien.txt", il contient une liste de sites indispensables à la compréhension du monde moderne.<br>

- Écrire un programme qui lit ce fichier et qui construit une page web contenant une liste de liens hypertextes.<br>
- Utilisez la fonction file() qui permet de lire directement un fichier et renvoie son contenu sous forme de tableau.
</p>
<p><strong>Proposition 1:</strong></p>
<?php

$fichier = file("liens.txt");
    // Nombre total de ligne du fichier
    $total = count($fichier);

    for($i = 0; $i < $total; $i++) {
    // On affiche ligne par ligne le contenu du fichier
    // avec la fonction nl2br pour ajouter les sauts de lignes
    echo nl2br($fichier[$i]);
    }


?>

<!-- ************************************* -->
<h2></h2>
<p><strong>Proposition 2:</strong></p>
<?php

$fichier = file("liens.txt");
$total = count($fichier);
   
    foreach ($fichier as $line_num => $line) {
        echo "Ligne #<b>{$line_num}</b> : " . htmlspecialchars($line) . 
"<br />\n";
}
?>





<!-- ************************************* -->

<h2></h2>
<p><strong>Proposition 3: Lit le fichier et renvoie dans un tableau</strong></p>
<?php
 // Lit le fichier et renvoie le résultat dans un tableau
$lines = file("liens.txt");

// Affiche toutes les lignes du tableau comme code HTML, avec les numéros de ligne
foreach ($lines as $line_num => $line) {
echo "Lien #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";
}

// Utilisation de drapeau
$trimmed = file('liens.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

 ?>

<!-- ****************************** -->
<h2>Récupération d'un fichier distant</h2>
<p>

1. Utilisez la fonction file() pour récupérer le contenu de ce fichier.<br>

2. Découpez chaque ligne en utilisant une des fonctions suivantes: explode() ou preg_split()<br>

3. Affichez le résultat dans un tableau HTML (avec Bootstrap si possible) en prenant bien soin de nommer les colonnes du tableau.
</p>
<p><strong>Question 1: Première proposition </strong></p>
<?php

$lines = file('https://ncode.amorce.org/customers.csv');

foreach($lines as $line)
{
    echo($line);
}

?>

<!-- ****************************** -->
<p><strong>Question 1: Deuxième proposition </strong></p>

<?php

// Lit une page web dans un tableau.
$lines = file('https://ncode.amorce.org/customers.csv');

// Affiche toutes les lignes du tableau comme code HTML, avec les numéros de ligne
foreach ($lines as $line_num => $line) {
    echo "Line #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";
}
 
?>

<!-- ****************************** -->
<h2></h2>
<p><strong>Compter le nombre de lignes dans un tableau </strong></p>

<?php

$names=file('https://ncode.amorce.org/customers.csv');
// To check the number of lines 
echo count($names).'<br>';
foreach($names as $name)
{
   echo $name.'<br>';
}           // Il y a 100 lignes

?>

<!-- ****************************** -->
<h2></h2>

<?php

?>

<!-- ****************************** -->
<h2>test</h2>
<?php


?>

























<!-- ****************************** -->

<h2></h2>
<?php

?>



</body>
</html>