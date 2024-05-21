<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> N CODE EXERCICE: LES DATES ET LES HEURES </title>
</head>
<body>
 <!-- N CODE LES DATES ET LES HEURES-->
 <h1> N CODE EXERCICE: LES DATES ET LES HEURES </h1>
<h2> Trouvez le numéro de semaine de la date suivante : 14/07/2019. </h2>

<?php
//calcul du numéro de semaine
$date=strtotime('2019-07-14');
$semaine = date("W", mktime(0,0,0,$month,$day,$year));
function semaine($date)
{
   $jour=date("z",$date);
   $num_sem=($jour/7)+1;
   $num=intval($num_sem);
   return $num;
}
echo semaine($date);                // Il affiche le numéro de semaines: 28
?>

<!-- ****************************** -->

<h2>Combien reste-t-il de jours avant la fin de votre formation.</h2>

<?php
$echeance = '2024/06/07';

echo 'Nombre de jours restants avant la fin de formation DIW : ', floor((strtotime($echeance) - time())/86400);
?>

<!-- ****************************** -->

<h2>Combien reste-t-il de jours avant la fin de votre formation: avec l'objet "DateTime</h2>

<?php

// date de fin du module DIW
$subscription_expiration_date = new DateTime("2024-06-07 00:00:00");
	
// maintenant (au moment où le script est exécuté précisément le 15/05/2024)
$now_date = new DateTime("now");

// différence des deux timestamps
$diff = $subscription_expiration_date->getTimestamp() - $now_date->getTimestamp();

// calcul du nombre de jours et arrondi inférieur
$diff_in_day = floor($diff / 86400);

// affichage
echo 'Nombre de jours restants avant la fin de formation DIW : ', $diff_in_day;
?>

<!-- ****************************** -->

<h2>Comment déterminer si une année est bissextile ? </h2>

<?php
function estAnneeBissextile($annee)
{
$estMultipleDeQuatreCent = ( ($annee % 400) == 0);
$estMultipleDeQuatre = ( ($annee % 4) == 0);
$estPasMultipleDeCent = ( ($annee % 100) != 0);
return ( $estMultipleDeQuatreCent || ( $estMultipleDeQuatre &&
$estPasMultipleDeCent ) );
}
$y = date("Y"); // pour les tests modifier manuellement $y
if(estAnneeBissextile($y))
$message = $y." est une année bissextile (366 jours) !<br />";
else $message = $y." n'est pas une année bissextile (365 jours) !<br />";
echo $message;

?>

<!-- ****************************** -->

<h2>Montrez que la date du 32/17/2019 est erronée.</h2>

<?php
var_dump(checkdate(17, 32, 2019));              //Mois/Jour/Année    Mois: doit être compris entre 1 et 12.  Jour: Le jour doit être un jour autorisé par le mois donné. Les années bissextiles sont prises en compte.  Année:L'année est comprise entre 1 et 32767 inclus. 
                        //Retourne true si la date fournie est valide, false sinon. 
?>
<!-- ****************************** -->

<h2>Montrez que la date du 32/17/2019 est erronée: version 2</h2>

<?php
$oDate =  DateTime::createFromFormat("d/m/Y H:i:s", "32/17/2019 03:42:11");

$errors = DateTime::getLastErrors();

if ($errors["error_count"]>0 || $errors["warning_count"]>0) {
    echo "ARGHHHH !";               //Retourne "ARGHHHH !" si la date fournie est invalide
}

?>
<!-- ****************************** -->

<h2>Affichez l'heure courante sous cette forme : 11h25</h2>

<?php
$heure = date("H\hi");
$message = " Il est ".$heure. "<br />";
echo $message;                              // Il affiche l'heure à l'instant t: "il est 10h30"
?>



<!-- ****************************** -->

<h2>Ajoutez 1 mois à la date courante.</h2>

<?php

$Moisheure = date("F H\hi");
$message = " On est en ".$Moisheure. "<br />";
echo $message;                              // Il affiche: "On est en May 11h06"

?>

<!-- ****************************** -->


<h2>Ajoutez 1 mois à la date courante: Version 2</h2>
<?php
         // d=jour par exemple la date du 22
           // F= mous par exemple le mois de décembre
          // o = année 




          echo 'Nous sommes le '. date('d F Y à H\hi',  time()).' ';            // Il affiche: Nous sommes le 16 May 2024 à 11h06 
?>

<!-- ****************************** -->

<h2>Que s'est-il passé le 1000200000</h2>

<?php
$dt= 1000200000;
echo date( "d/m/Y H:i:s", $dt );            //Il affiche: 11/09/2001 11:20:00 
?>


<!-- ****************************** -->

<h2></h2>
<?php

?>



</body>
</html>