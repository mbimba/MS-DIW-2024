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
<!-- ****************************** -->
<p><strong>Proposition 3:Écrire un programme qui lit ce fichier et qui construit une page web contenant une liste de liens hypertextes.</strong></p>
<?php

// Nom du fichier à lire

$file = 'liens.txt';


// Lecture du fichier

$fp = fopen($file, 'r');

$liens = array();

while (($line = fgets($fp))!== false) {

    $liens[] = trim($line);

}

fclose($fp);


// Construction de la page web

echo '<html><head><title>Liens hypertextes</title></head><body>';

echo '<h5>Liens hypertextes</h5>';

echo '<ul>';

foreach ($liens as $lien) {

    echo "<li><a href='$lien'>$lien</a></li>";

}

echo '</ul>';

echo '</body></html>';

?>


<!-- ************************************* -->

<h2></h2>
<p><strong>Proposition 4: Lit le fichier et renvoie dans un tableau</strong></p>
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


<!-- ************************************* -->

<h2></h2>
<p><strong>Proposition 5: - Utilisez la fonction file() qui permet de lire directement un fichier et renvoie son contenu sous forme de tableau.</strong></p>
<?php

// Nom du fichier à lire

$fichier = 'liens.txt';


// Lecture du fichier avec file()

$liens = file($fichier, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);


// Construction de la page web

echo '<html><head><title>Liens hypertextes</title></head><body>';

echo '<h5>Liens hypertextes</h5>';

echo '<ul>';

foreach ($liens as $lien) {

    echo "<li><a href='$lien'>$lien</a></li>";

}

echo '</ul>';

echo '</body></html>';

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
<p><strong>Question 1: Troisième proposition. Question2: Découpez chaque ligne en utilisant une des fonctions suivantes: explode() ou preg_split()<br> </strong></p>
<?php

$url = 'https://ncode.amorce.org/customers.csv';

$fichier = file($url, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);


// Affichage du contenu du fichier

foreach ($fichier as $ligne) {

    $champs = explode(',', $ligne);

    echo "Nom : $champs[0], Prénom : $champs[1], Email : $champs[2], Téléphone : $champs[3], Ville : $champs[4], État : $champs[5]<br>";

}

?>
<!-- ****************************** -->
<h2></h2>
<p><strong>1. Utilisez la fonction file() pour récupérer le contenu de ce fichier.<br>

2. Découpez chaque ligne en utilisant une des fonctions suivantes: explode() ou preg_split()<br>

3. Affichez le résultat dans un tableau HTML (avec Bootstrap si possible) en prenant bien soin de nommer les colonnes du tableau. </strong></p>

<?php

$url = 'https://ncode.amorce.org/customers.csv';

$fichier = file($url, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);


// Définition des noms de colonnes

$colonnes = ['Nom ou surname', 'Prénom ou firstname', 'Email', 'Téléphone ou phone', 'Ville ou city', 'État ou state'];


// Affichage du tableau HTML

echo '<table class="table table-striped">';

echo '<thead><tr>';

foreach ($colonnes as $colonne) {

    echo "<th>$colonne</th>";

}

echo '</tr></thead>';

echo '<tbody>';


foreach ($fichier as $ligne) {

    $champs = explode(',', $ligne);         // "Explode" permet de découper chaque ligne

    echo '<tr>';

    foreach ($champs as $champ) {

        echo "<td>$champ</td>";

    }

    echo '</tr>';

}
echo '</tbody>';

echo '</table>';

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


























<!-- ****************************** -->

<h2></h2>
<?php

?>



</body>
</html>