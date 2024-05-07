<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> N CODE TEST: les bases du langage et les instructions conditionnelles </title>
</head>
<body>
 <!-- N CODE LES BASES DU LANGAGE:  -->
<?php 
  
    // ... 
    // Script à exécuter 
    // ... 
    $bonjour = "Plouf vous dit bonjour ! ";
    echo ($bonjour); 
  

// Les fonctions de base et les pièges à éviter: l'instruction
echo "<br>";     //echo"<br>" permet de faire un retour à la ligne
  $bonjour = "Bonjour le monde"; 
    echo "<b>$bonjour</b>";

    echo "J'habite en Chine."; // Cette ligne indique où j'habite

    // La ligne suivante indique mon âge
    echo "J'ai 92 ans.";
   



// Les fonctions de base et les pièges à éviter: Les opérateurs
echo "<br>";     //echo"<br>" permet de faire un retour à la ligne
$a = 12 ;       // un entier
$b = "Bonjour"; // une chaîne de caractères
// Les fonctions de base et les pièges à éviter: Les opérateurs chaînes de caractères
$a = "Winter"; 
echo $a . " is coming !";    //Le point . réalise une concaténation de deux chaînes de caractères 





// Les fonctions de base et les pièges à éviter: Les opérateurs d'affectation
echo "<br>";     //echo"<br>" permet de faire un retour à la ligne
$variable = "Afpa";
echo $variable;
// Les fonctions de base et les pièges à éviter: Les variables numériques
$var1 = 123;
$var2 = 14.35;
echo "<br>";     //echo"<br>" permet de faire un retour à la ligne

// Les fonctions de base et les pièges à éviter: Les tableaux
echo "<br>";     //echo"<br>" permet de faire un retour à la ligne
$couleur[0] = "red";
$couleur[1] = "blue";
$couleur[2] = "white";
$couleur[3] = "black";
echo $couleur[2] ;       // pour afficher la valeur "white", on écrit cette formule.
echo "<br>";     //echo"<br>" permet de faire un retour à la ligne

// Les fonctions de base et les pièges à éviter: Les variables superglobales
echo "<br>";     //echo"<br>" permet de faire un retour à la ligne
$_GET["societe"] = "Afpa";
echo $_GET['societe']; // Affiche 'Afpa' 


// Les fonctions de base et les pièges à éviter: Forcer le type d'une variable
echo "<br>";     //echo"<br>" permet de faire un retour à la ligne
$a = 15.125863;
settype($a, "integer"); 
echo $a;                // $a vaut désormais 15, car la valeur décimale initiale a été convertie en un entier (perte des décimales). 

// Les fonctions de base et les pièges à éviter: Forcer le type d'une variable (convertir une chaîne sans l'affecter  par les expressions strval, intval et doubleval )
echo "<br>";     //echo"<br>" permet de faire un retour à la ligne
$a = 6.32172; 
$b = intval($a); 
$c = doubleval($a); 
echo $a - $b - $c;      //Ce qui donne : 6.32172 - 6 - 6.32172 = -6
?> 

<!--   Les fonctions de base et les pièges à éviter: Les constantes  --> 


<?php
echo "<br>";     //echo"<br>" permet de faire un retour à la ligne 
define("EURO", 6.55957);
echo EURO; // affiche 6.55957
?> 

<!--   Les métaconstantes et les fonctions de débogage: La fonction error_log() --> 

<?php 
echo "<br>";     //echo"<br>" permet de faire un retour à la ligne
$myVar = "KO";

if ($myVar == "OK") 
{   
   echo"C'est bon<br>";
} 
else 
{
    echo"Ouh la la pas bien !<br>"; // Message affiché dans la page web
    error_log("Ouh la la pas bien"); // Message enregistré dans le fichier 'C:/wamp/logs/php_error.log' 
} 

?> 
<!--    --> 
<?php
   echo"Ouh la la pas bien !<br>"; // Message affiché dans la page web
   $message = "Ouh la la pas bien ".__FILE__." ".__LINE__;        
   error_log($message); 
   echo "<br>";     //echo"<br>" permet de faire un retour à la ligne
?> 

<!--  EXERCICE:  Ecrivez un script qui affiche l'adresse IP du serveur et celle du client.  --> 
<?php
echo $_SERVER['SERVER_NAME'];               // IL affiche "localhost" comme nom du serveur hôte qui exécute mon script.
echo "<br>";     //echo"<br>" permet de faire un retour à la ligne
?>


<?php

echo $_SERVER['REMOTE_ADDR'];               // Pour l'adresse IP du client qui demande la page courante. Il affiche: 127.0.0.1 
echo "<br>";     //echo"<br>" permet de faire un retour à la ligne
?>

<?php
echo $_SERVER['SERVER_ADDR'];               // Pour l'adresse IP du serveur sous lequel le script courant est en train d'être exécuté. 
?>



 <!-- N CODE LES INSTRUCTIONS CONDITIONNELLES:  -->

 <?php
if ($a > $b) 
{ 
    echo "$a est plus grand que $b"; // Il affiche "6.32172 est plus grand que 6 ".
}
echo "<br>";     //echo"<br>" permet de faire un retour à la ligne
?>

<?php
if ($a > $b) { 
    echo "$a est plus grand que $b"; 
    $b = $a; 
} 
else            // Il affiche "6.32172 est plus grand que 6 ".
echo "<br>";     //echo"<br>" permet de faire un retour à la ligne
?>


 <!-- N CODE LES INSTRUCTIONS CONDITIONNELLES: Opérateur ternaire   -->
<?php
echo "<br>";     //echo"<br>" permet de faire un retour à la ligne
if ($age>=18)
    {
       $reponse="majeur" ;
    }
    else
    {
       $reponse=" mineur " ;
    }     // Affiche: vous êtes majeur
    echo "<br>";     //echo"<br>" permet de faire un retour à la ligne
?>
            <!-- La formule précédente peut être remplacée par :  -->
<?php          
$message = ($age >= 18) ? "majeur" : "mineur";    // qui se lit est-ce que $age >= 18 , si oui, $reponse="majeur", si non, $reponse=" mineur"
?>
            <!-- Mise en pratique de la formule formule précédente :  -->
<?php          
$age = 25; 

$reponse = ($age >= 18) ? "majeur" : "mineur"; 

echo "Vous êtes $reponse .";    // Dans cet exemple, $reponse vaut "majeur" car $age est supérieur à 18. Il affiche à l'écran " Vous êtes majeur . "
echo "<br>";     //echo"<br>" permet de faire un retour à la ligne
?>

<?php    
$age = 25;

echo "Vous êtes ". ($age >= 18) ? "majeur" : "mineur" . ".";  //  Il affiche à l'écran "majeur".
echo "<br>";     //echo"<br>" permet de faire un retour à la ligne
?>

 <!-- N CODE LES INSTRUCTIONS CONDITIONNELLES: L'instruction "switch"  -->
 <?php 
 echo "<br>";     //echo"<br>" permet de faire un retour à la ligne
$a = 2; 

switch ($a) { 
  case 0 : 
    echo"$a = 0"; 
  break; 

  case 1 : 
    echo "$a = 1"; 
  break; 

  case 2 : 
     echo "$a = 2"; 
  break; 
}                   // Il affiche "2 = 2 ".
echo "<br>";     //echo"<br>" permet de faire un retour à la ligne
?>



</body>
</html>