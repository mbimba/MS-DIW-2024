<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> N CODE TEST: LES DATES ET LES HEURES </title>
</head>
<body>
 <!-- N CODE LES LES DATES ET LES HEURES -->
 <h1> N CODE TEST: DATES ET LES HEURES </h1>
<h2> La notion de timestamps </h2>

<?php
echo time();     // Il affiche des chiffres qui correspondent au nombre de secondes écoulés depuis le 01/01/1970
?>

<!-- ****************************** -->

<h2>Date du jour</h2>

<?php
echo "Nous sommes le " . date("d/m/Y");           // "d"= le jour, sur 2 chiffres       "m"= le mois, sur 2 chiffres  "y"= l'année, sur 4 chiffres
                                                // Il affiche "nous sommes le 15/05/2024" qui correspond à la date à l'instant t
?>


<!-- ****************************** -->

<h2>Heure</h2>

<?php
echo date("H:i:s");          // "H"= heure, au format 24 avec zéros       "i"= minutes, avec zéros  "s"= secondes, avec zéros
                            // Il affiche l'heure à l'instant t
?>

<!-- ****************************** -->
<h2>L'objet Datetime</h2>

<?php
// on déclare une instance de l'objet PHP 'DateTime' :
$oDate = new DateTime();
var_dump($oDate);
$oDate = new DateTime("01-01-2018");
?>


<!-- ****************************** -->
<h2>Formater une date existante</h2>

<?php
// $macolonne_sql est issue d'une requête SQL; avec pour valeur 2018-11-16 11:26:51 (parexemple)
$oDate = new DateTime($macolonne_sql);
echo $oDate->format("d/m/Y H:h:i");
                        // Il affiche une date autre que celle du jour et l'heure. (l'affichage des secondes a été volontairement omis).
?>

<!-- ****************************** -->
<h2>Récupérer les erreurs de l'objet DateTime</h2>

<?php
$dateTime = DateTime::createFromFormat('m/d/Y', $date);

$errors = DateTime::getLastErrors();

if (!empty($errors['warning_count'])) 
{
   return FALSE;
}

?>

<!-- ****************************** -->
<h2>Vérifier une date</h2>

<?php
$datePattern = "/^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$/";
$date = "2015-12-06";

if (preg_match($datePattern, $date))
{
    echo "Date ".$date." valide.<br>";
}
else
{
    echo "Date ".$date." erronée.<br>";
}                                   //Il affiche: Date 2015-12-06 valide.

?>


<!-- ****************************** -->
<h2></h2>
<p><strong>Vous pouvez utilisez l'objet DateTime pour vérifier votre date</strong></p>

<?php
$oDate =  DateTime::createFromFormat("d/m/Y H:i:s", "17/25/1966 03:42:11");

$errors = DateTime::getLastErrors();

if ($errors["error_count"]>0 || $errors["warning_count"]>0) {
    echo "ARGHHHH !";               // Il affiche: ARGHHHH !
}
?>


<!-- ****************************** -->
<h2></h2>

<?php

?>


<!-- ****************************** -->
<h2></h2>

<?php

?>









<!--  -->
<?php 

?>


</body>
</html>