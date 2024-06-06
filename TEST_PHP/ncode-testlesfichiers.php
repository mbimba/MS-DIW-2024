<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> N CODE TEST: LES FICHIERS </title>
</head>
<body>

 <h1> N CODE TEST: LES FICHIERS </h1>

 <h2>Les instructions principales: </h2>
 <p><strong>  Lecture dans un fichier </strong></p>

<?php
// Ouverture en lecture seule  
$fp = fopen("essai.txt", "r"); 

// Boucle jusqu'à la fin du fichier
while (!feof($fp)) 
{ 
    // Lecture d'une ligne, le contenu de la ligne est affecté à la variable $ligne  
    $ligne = fgets($fp, 4096); 
    echo $ligne."<br>";                         // Il affiche: "Bonjour le monde" qui se trouve dans le fichier essai.txt
} 
// 4096: Par sécurité il est préférable de lui indiquer de lire 4096 caractères pour qu'elle puisse lire une ligne entière. Pour lire l'ensemble d'un fichier, vous pouvez aussi utilisez la fonction file().

?>

<!-- ****************************** -->
<h2>Les autres fonctions de gestion de fichiers: </h2>
<p><strong> La fonction basename() </strong></p>

<?php
$path = "/home/httpd/html/index.php"; 
$file = basename($path); // $file retourne "index.php"  
?>

<p><strong> La fonction copy() </strong></p>
<?php
$fichier ="toto.txt"; 
/* création d'un fichier toto.txt.bak */
copy($fichier, $fichier.'.bak');

?>

<!-- ................... -->

<p><strong> La fonction dirname() </strong></p>
<?php
$path = "/etc/passwd"; 
$file = dirname($path); /* $file retourne "/etc" */ 
?>

<!-- ****************************** -->

<h2>Un compteur texte en PHP</h2>

<?php
    // On ouvre le fichier moncompteur.txt
    $fichier = fopen("ncodetestlesfichiers-moncompteur.txt","r+");

    // on lit la première ligne du fichier, le résultat est stocké dans la variable $visiteurs
    $visiteurs = fgets($fichier);

    // on ajoute 1 au nombre de visiteurs
    $visiteurs++;

    // on se positionne au début du fichier
    fseek($fichier,0);

    // on écrit le nouveau nombre dans le fichier
    fputs($fichier,$visiteurs);

    // on referme le fichier moncompteur.txt
    fclose($fichier);

    // on indique sur la page le nombre de visiteurs
    echo "$visiteurs personne(s) sont passées par ici";
                                        // Il affiche: 13 personnes sont passées par ici 
?>

<!-- .............. -->

<p><strong> Voici une autre version plus concise. </strong></p>

<?php
$visiteurs = file_get_contents("ncodetestlesfichiers-moncompteur.txt");

$visiteurs++;

file_put_contents("ncodetestlesfichiers-moncompteur.txt", $visiteurs);

print("$visiteurs personnes sont passées par ici");
                                            // Il affiche: 12 personnes sont passées par ici 
?>



<!-- ****************************** -->
<h2></h2>

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