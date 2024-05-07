<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> N CODE TEST: Les tableaux </title>
</head>
<body>
 <!-- N CODE LES TABLEAUX: Les tableaux -->
 <?php 
 echo "Exercice: Les tableaux PHP";     //Pour le titre de l'exercice
 echo "<br>";                  // Pour faire un retour à la ligne
 ?>

 <!--DECLARATION DES TABLEAUX -->
    <!-- Tableaux simples   -->  
<?php
    $tableau = array(); // instruction optionnelle
    $tableau[0] = "Pomme"; 
    $tableau[1] = "Poire"; 
    $tableau[2] = "Banane"; 
    echo "<br>";                  // Pour faire un retour à la ligne
?>
    <!-- OU   -->  
<?php
    $tableau = array(); // instruction optionnelle
    $tableau[] = "Pomme"; 
    $tableau[] = "Poire"; 
    $tableau[] = "Banane"; 
?>
    <!-- OU   -->  
<?php
    $tableau = array("Pomme", "Poire", "Banane"); 
?>
    <!-- Tableaux à plusieurs dimensions  -->  
<?php
$tab1[] = array(1, "janvier", "2016"); 
$tab1[] = array(2, "février", "2017"); 
$tab1[] = array(3, "mars", "2018"); 
$tab1[] = array(4, "avril", "2019");
?>

    <!-- Exemple   -->  
<?php
echo $tab1[2][0]." ".$tab1[2][1]." ".$tab1[2][2]."<br>"; // Affiche : 3 mars 2018
echo "<br>";                  // Pour faire un retour à la ligne
?>

    <!-- OU   -->  
<?php
?>

    <!-- OU   -->  
<?php
?>

    <!-- OU   -->  
<?php
?>












</body>
</html>