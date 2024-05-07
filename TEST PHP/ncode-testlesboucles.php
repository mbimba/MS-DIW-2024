<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> N CODE TEST: Les boucles </title>
</head>
<body>
 <!-- N CODE LES INSTRUCTIONS CONDITIONNELLES ET LES BOUVLES: Les boucles -->
 <?php 
 echo "Exercice: Les boucles PHP";     //Pour le titre de l'exercice
 echo "<br>" . $a;                     // Pour faire un retour à la ligne
 ?>
         <!-- Instruction FOR   -->       
<?php 
for ($a = 1; $a < 10; $a++) { 
    echo $a;            // Il affiche à l'écran: " 123456789".
    
} 
?>

        <!-- Instruction FOREACH   --> 
<?php 
echo "<br>";   //echo"<br>" permet de faire un retour à la ligne
echo "plouf";
foreach ($tableau as $element) { 
    echo $element;               // Il affiche à l'écran:
    
} 
?>

<!--  Instruction WHILE  --> 
                    <!--  Exemple  --> 
<?php 
echo "<br>";    //echo"<br>" permet de faire un retour à la ligne
$a = 1; 
while ($a < 10) { 
    echo $a;                        
    $a++;                           // Il affiche à l'écran: "123456789"
} 
?>

<!--  Instruction DO..WHILE  --> 
<?php 
echo "<br>";      //echo"<br>" permet de faire un retour à la ligne
$a = 0; 

do { 
    echo $a; 
} while ($a > 0);            // Il affiche à l'écran: "0"
?>
                 <!--  Une autre façon d'utiliser cette boucle est de réaliser une boucle sans fin.  --> 
<?php 
echo "<br>";                     //echo"<br>" permet de faire un retour à la ligne
do { 
    if ($a < 5) { 
        echo "a inférieur à 5"; 
        break; 
    } 
   // if ( ) .......  
} while (1);             //Pour sortir de la boucle il faut qu'une des conditions soit remplie, ce qui aura pour effet d'exécuter l'instruction break; qui permet de sortir de la boucle. 
                //Il affiche "a inférieur à 5"
?>



<?php 




?>






  <!--             -->
<?php
echo "<br>";            //echo"<br>" permet de faire un retour à la ligne
for($i=1;$i<10;$i++)
{
    for($j=9;$j>0;$j--)
    //$i varie de 1 à 9 et $j de 9 à 1
    {
    echo "<span style=\"border-style:double;border-width:3;\"> $i + $j=10</span> <br />";           // Il affiche un tableau "1+9=10" n fois
    }
}
echo "<br>"
?>


    <!--    Utilisez une boucle simple :  while         OPENCLASSROOM            -->
<?php
$lines = 1;

while ($lines <= 10) {
    echo '1<br />';
    $lines++; // $lines = $lines + 1
}                           // Il affiche 10 fois le chiffre  1.
?>

<!--             -->



















</body>
</html>