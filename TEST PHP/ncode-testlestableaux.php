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
 echo " <b>Exercice: Les tableaux PHP  </b>";     //Pour le titre de l'exercice
 echo "<br>";                  // Pour faire un retour à la ligne
 ?>

 <!--DECLARATION DES TABLEAUX -->
    <!-- Tableaux simples   -->  
<?php
 echo " <b>TEST: Les tableaux simples </b>";     //Pour le titre de l'exercice
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
 echo " <b> TEST: Exemple tableau à plusieurs dimensions </b> <br>";     //Pour le titre de l'exercice
echo $tab1[2][0]." ".$tab1[2][1]." ".$tab1[2][2]."<br>"; // Affiche : 3 mars 2018
echo "<br>";                  // Pour faire un retour à la ligne
?>

    <!-- Tableaux associatifs   -->  
<?php 
 echo " <b> TEST: les tableaux associatifs </b>";     //Pour le titre de l'exercice
 echo "<br>";                  // Pour faire un retour à la ligne
 ?>

<?php
$facture[0] = 500; //représente Janvier 
$facture[1] = 620; //représente Février 
//$..........
$facture[11]= 300; //représente Décembre 


$facture["Janvier"] = 500; 
$facture["Février"] = 620; 
//$........ 
$facture["décembre"] = 300; 
 
$facture = array(
    "Janvier"   =>  500,
    "Février"   =>  620,
    "Décembre"  =>  300
); 
// Manipulation des tableaux associatifs: exemple  
$facture = array("Janvier"=>500, "Février"=>620, "Mars"=>300, "Avril"=>130, "Mai"=>560, "Juin"=>350); 
$facture_sixmois=0; 

foreach ($facture as $mois => $valeur) 
{ 
   echo "Facture du mois de $mois : $valeur Euros<br />"; 
   $facture_sixmois +=$valeur; 
} 

echo "Facture total de six mois : <b>$facture_sixmois Euros</b>"; 
echo "<br>";                  // Pour faire un retour à la ligne
?> 



<!-- Tri dans les tableaux: fonction "sort()"  -->  
<?php
echo "<br>";                  // Pour faire un retour à la ligne
echo " <b> TEST: Tri dans les tableaux: Fonction sort() </b> <br>";     //Pour le titre de l'exercice
$nom = array("franck","laurent","caroline","magali","veronique");   
sort($nom);

for ($nb1=0;$nb1<=count($nom)-1; $nb1++) 
{
   echo "$nom[$nb1]<br>";
}                       //Il affiche: caroline, franck, laurent, magali, veronique.
?>

<!-- Tri dans les tableaux: fonction "rsort(array)" : Tri décroissant d'un tableau -->  
<?php
echo "<br>";                  // Pour faire un retour à la ligne
echo " <b> TEST: Tri dans les tableaux: Fonction rsort(array): tri décroissant d'un tableau </b> <br>";     //Pour le titre de l'exercice
$nom = array("franck","laurent","caroline","magali","veronique");
rsort($nom);

for ($nb1=0;$nb1<=count($nom)-1; $nb1++) 
{
   echo "$nom[$nb1]<br>";
}                   //Il affiche: veronique magali laurent franck caroline.
?>

<!-- Instructions de manipulation de tableaux: fonction "asort()" -->  
<?php
echo "<br>";                  // Pour faire un retour à la ligne
echo " <b> TEST: Instructions de manipulation de tableaux: fonction asort(): Trie un tableau en ordre croissant et conserve l'association des index: Le tri se fait sur les valeurs, pas sur les clés :   </b> <br>";     //Pour le titre de l'exercice
$tableau = array("a" => "Lundi",
                 "b" => "Mardi",
                 "c" => "Mercredi",
                 "d" => "Jeudi",
                 "e" => "Vendredi"
            ); 
asort($tableau);
foreach($tableau as $cle => $valeur) 
{ 
   echo $cle ." : ".$valeur."<br>"; 
}
?>

<!-- Instructions de manipulation de tableaux: fonction "arsort()" -->  
<?php
echo "<br>";                  // Pour faire un retour à la ligne
echo " <b> TEST: Instructions de manipulation de tableaux: fonction arsort(): Tri décroissant sur un tableau associatif: Le tri se fait sur les valeurs, pas sur les clés :   </b> <br>";     //Pour le titre de l'exercice
$tableau = array("a" => "Lundi",
                 "b" => "Mardi",
                 "c" => "Mercredi",
                 "d" => "Jeudi");
arsort($tableau);
foreach($tableau as $cle => $valeur) 
{ 
   echo $cle ." : ".$valeur."<br>"; 
} 
?>
<!-- Instructions de manipulation de tableaux: fonction "count()" -->  
<?php
echo "<br>";                  // Pour faire un retour à la ligne
echo " <b> TEST: Instructions de manipulation de tableaux: fonction count(): Retourne le nombre d'éléments d'un tableau.   </b> <br>";     //Pour le titre de l'exercice
$tableau = array("Lundi","Mardi","Mercredi", "Jeudi", "Vendredi"); 
$nb = count($tableau); 
echo"Le tableau contient ".$nb." éléments."; // Il affiche: Le tableau contient 5 éléments
echo "<br>";                 // Pour faire un retour à la ligne
?>
<!-- Instructions de manipulation de tableaux: fonction "array_push()" -->  
<?php
echo "<br>";                  // Pour faire un retour à la ligne
echo " <b> TEST: Instructions de manipulation de tableaux: fonction array_push(): permet d'ajouter un élément à la fin du tableau.   </b> <br>";     //Pour le titre de l'exercice
$tableau = array("Lundi","Mardi","Mercredi","Jeudi"); 
array_push($tableau, "Vendredi"); 
?>

<!-- Instructions de manipulation de tableaux: fonction "array_pop()" -->  
<?php
echo "<br>";                  // Pour faire un retour à la ligne
echo " <b> TEST: Instructions de manipulation de tableaux: fonction array_pop(): Extrait un élément de la fin du tableau   </b> <br>";     //Pour le titre de l'exercice
$tableau = array("Lundi","Mardi","Mercredi"); 
$jour = array_pop($tableau); 
?>
<!-- Instructions de manipulation de tableaux: fonction "array_unshift()" -->  
<?php
echo "<br>";                  // Pour faire un retour à la ligne
echo " <b> TEST: Instructions de manipulation de tableaux: fonction array_unshift(): Ajoute un élément en début de tableau    </b> <br>";     //Pour le titre de l'exercice
$tableau = array("Jeudi", "Vendredi"); 
array_unshift($tableau, "Lundi", "Mardi", "Mercredi"); 
?>
<!-- Instructions de manipulation de tableaux: fonction "array_shift()" -->  
<?php
echo "<br>";                  // Pour faire un retour à la ligne
echo " <b> TEST: Instructions de manipulation de tableaux: fonction array_shift(): Dépile un élément (et un seul) en début du tableau </b> <br>";     //Pour le titre de l'exercice
$tableau = array("Jeudi", "Vendredi"); 
$jour = array_shift($tableau); 
?>




<!--    -->  
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