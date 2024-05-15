<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> N CODE EXERCICE: Les fonctions </title>
</head>
<body>
 <!-- N CODE LES FONCTIONS -->
 <h1> N CODE EXERCICE: LES FONCTIONS PHP </h1>
<h2> Ecrivez une fonction qui permette de générer un lien.</h2>

<?php
echo '<a href="https://www.reddit.com/", "Reddit Hug">Reddit Hug</a>';

?>

<!-- ************************************* -->

<h2>Ecrivez une fonction qui calcule la somme des valeurs d'un tableau</h2>

<?php
 $tab = array(4, 3, 8, 2);
 echo "Somme = " . array_sum($tab) . "\n";
 ?>


 <!-- ************************************* -->
 <h2>Créer une fonction qui vérifie le niveau de complexité d'un mot de passe</h2>
 <p>
 <strong>Questions:</strong> Elle prendra un paramètre de type chaîne de caractères. Elle retournera une valeur booléenne qui vaut true si le paramètre (le mot de passe) respecte les règles suivantes :<br>

- Faire au moins 8 caractères de long<br>
- Avoir au moins 1 chiffre<br>
- Avoir au moins une majuscule et une minuscule<br>
</p>

<!--  -->

<?php
function complex_password (string $password): bool
{
    if (strlen ($password)<8)
    {
        return false;
    }

    if (!preg_match('/\d/' , $password))
    {
        return false;
    }

    if (!preg_match('/[A-Z]/' , $password) || !preg_match ('/[a-z]/' , $password))
    {
        return false;
    }

    return true;
}

$resultat = complex_password("TopSecret42");
echo $resultat;                                 // Il affiche "1" qui signifie true

?>
 <!-- *********************************************** -->
<!--
$motdepasse="TopSecret42";
$resultat = complex_password($motdepasse);


if($resultat)
{
echo 'le mot de passe est valide';}
if ($résultat == false)
       {echo 'le mot de passe est invalide';} 


?>
-->



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