<?php
// On déclare une variable dont la valeur (contenu) sera écrite dans le fichier
$myvar = $_REQUEST['nom'].",". $_REQUEST['prenom'].",". $_REQUEST['email'].",". $_REQUEST['phone'].",". $_REQUEST['demande'];
// Ouverture en écriture seule 
$fp = fopen("AAAA-MM-JJ-HH-MM-SS.txt", "a"); 

// Ecriture du contenu ($myVar) 
fputs($fp, $myvar); 
// Fermeture du fichier  
fclose($fp); 

?>








 <!-- ***********************************************************************   -->