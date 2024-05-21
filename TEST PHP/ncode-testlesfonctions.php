<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> N CODE TEST: Les fonctions </title>
</head>
<body>
 <!-- N CODE LES FONCTIONS -->
 <h1> N CODE TEST: LES FONCTIONS PHP </h1>
<h2> Définition</h2>

 <?php
$texte = ucfirst("Bonjour le monde");
?>
<!-- ****************************** -->
<h2>Définir une fonction</h2>
<?php
function bonjour() 
{
    echo "Bonjour";
}
?>
<!-- ***************************** -->
<?php
bonjour("Dave","LOPER");            // Affiche: bonjour   (Cette formule fonctionne grâce à la fonction précédente)

?>

<!-- ***************************** -->
<h2>La portée d'une variable</h2>
<?php
$a = $b = 2;

function somme() { 
   $c = $a + $b; 
   echo "$c"; 
} 

somme();                    // Affiche: 0
?>

<!-- ***************************** -->
<p> <Strong>L'instruction "static"</Strong></p>
<?php
 function Test() { 
    $a=0; 
    echo $a."<br>"; 
    $a++; 
 } 
 
 // Appel de la fonction (2 fois)
 Test(); 
 Test();                //Affiche 0 et 0 à la ligne. Dans cet exemple nous faisons appel à une fonction qui initialise la variable $a à 0, puis incrémente celle-ci après un affichage. Le problème est qu'à chaque appel de la fonction celle-ci repasse à 0, car la variable n'est pas stockée et s'initialise à chaque rappel de la fonction 
?>

<!-- ***************************** -->
<?php
function Test1 () 
{ 
   static $a=0; 
   echo "$a<br />"; 
   $a++;                            // Affiche 0, 1 à la ligne et 2 à la ligne. Cette fois la variable reste stockée et affiche 0 puis 1,2,3... 
} 

// Appel de la fonction (3 fois)
Test1(); 
Test1(); 
Test1(); 
echo "<br>";                  // Pour faire un retour à la ligne
?>

<!-- ***************************** -->
<h2>Les librairies de fonctions</h2>
<?php
  require('mesfonctions.php');

  //...suite de l'application...
  echo "<br>";                  // Pour faire un retour à la ligne
?>

<!-- ***************************** -->
<h2>Les librairies de fonctions</h2>
<?php
echo "<br>";                  // Pour faire un retour à la ligne

?>
<!-- ***************************** -->
<?php

?>






<!--  -->
 <?php

?>

<!--  -->

<?php

?>

<!--  -->
<?php

?>
<!--  -->
<?php

?>


<!--  -->
 <?php 

 ?>


</body>
</html>