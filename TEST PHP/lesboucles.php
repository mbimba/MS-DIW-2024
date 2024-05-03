<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> N CODE TEST: Les boucles </title>
</head>
<body>
 <!-- N CODE LES BASES DU LANGAGE: Les boucles -->
         <!-- Instruction FOR   -->       
<?php 
for ($a = 1; $a < 10; $a++) { 
    echo $a;            // Il affiche à l'écran: " 123456789".
} 
?>

        <!-- Instruction FOREACH   --> 
<?php  
echo "plouf";
foreach ($tableau as $element) { 
    echo $element;               // Il affiche à l'écran:
    
} 
?>

<!--  Instruction WHILE  --> 
                    <!--  Exemple  --> 
<?php 
$a = 1; 
while ($a < 10) { 
    echo $a;                        
    $a++;                           // Il affiche à l'écran: "123456789"
} 
?>

<!--  Instruction DO..WHILE  --> 
<?php 
$a = 0; 

do { 
    echo $a; 
} while ($a > 0);            // Il affiche à l'écran: "0"
?>
                 <!--  Une autre façon d'utiliser cette boucle est de réaliser une boucle sans fin.  --> 
<?php 
do { 
    if ($a < 5) { 
        echo "a inférieur à 5"; 
        break; 
    } 
   // if ( ) .......  
} while (1);                                    //Pour sortir de la boucle il faut qu'une des conditions soit remplie, ce qui aura pour effet d'exécuter l'instruction break; qui permet de sortir de la boucle. 
?>

<!-- EXERCICES: 
1.Ecrire un script PHP qui affiche tous les nombres impairs entre 0 et 150, par ordre croissant : 1 3 5 7...
2.Écrire un programme qui écrit 500 fois la phrase Je dois faire des sauvegardes régulières de mes fichiers
3.Ecrire un script qui affiche la table de multiplication pour les nombres de 1 à 9 dans un tableau HTML, le résultat ressembler à ceci :--> 

<?php 




?>

  <!--    U         -->
<?php
for($i=1;$i<10;$i++)
{
    for($j=9;$j>0;$j--)
    //$i varie de 1 à 9 et $j de 9 à 1
    {
    echo "<span style=\"border-style:double;border-width:3;\"> $i + $j=10</span> <br />";           // Il affiche un tableau "1+9=10"
    }
}
?>


    <!--    Utilisez une boucle simple :  while         OPENCLASSROOM            -->
                        <?php
$lines = 1;

while ($lines <= 100) {
    echo '1.<br />';
    $lines++; // $lines = $lines + 1
}                           // IL affiche une longue addition qui donne à chaque fois un résultat de 10
?>












<!--    --> 
<?php 

?>

<!--    --> 
<?php 

?>

<!--    --> 
<?php 

?>

<!--    --> 








<!--    --> 
<!--    --> 
<!--    --> 
<!--    --> 
<!--    --> 
<!--    --> 
<!--    --> 
<!--    --> 
<!--    --> 
<!--    --> 











</body>
</html>