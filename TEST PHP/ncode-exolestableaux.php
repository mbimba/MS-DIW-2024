<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> N CODE EXERCICE: Les tableaux </title>
</head>
<body>
<h1> EXERCICES: LES TABLEAUX PHP </h1>
<h2>Exercice 1 : Année non bissextile (365 jours)</h2>
 <?php 
echo "<br>";
$data=[
    ["Janvier", "31"],
    ["Février", "28"],
    ["Mars", "31"],
    ["Avril", "30"],
    ["Mai", "31"],
    ["Juin", "30"],
    ["Juillet", "31"],
    ["Août", "31"],
    ["Septembre", "30"],
    ["Octobre", "31"],
    ["Novembre", "30"],
    ["Décembre", "31"],
];
echo "<table border='1' cellpadding='3' cellspacing='0'>";
echo "<tr>";
echo "<th>Mois</th>";
echo "<th>Jours</th>";
echo "</tr>";

foreach ($data as $row){
    echo "<tr>";
    echo "<td>" . $row [0] . "</td>";
    echo "<td>" . $row [1] . "</td>";
    echo "</tr>";
}
echo "<br>";                  // Pour faire un retour à la ligne
 ?>


<!-- *******************************************************************   --> 
<h2>Exercice 1 : Tri du tableau (365 jours)</h2>
<?php
echo "<br>";                  // Pour faire un retour à la ligne
$tableau = array("Janvier" => "31",
 "Février" => "28",
 "Mars" => "31",
"Avril"=> "30",
"Mai" => "31",
"Juin" => "30",
"Juillet" => "31",
"Août" => "31",
"Septembre" => "30",
"Octobre" => "31",
"Novembre" => "30",
"Décembre" => "31",
); 
arsort($tableau);
foreach($tableau as $cle => $valeur) 
{ 
echo $cle ." : ".$valeur."<br>"; 
}
echo "<br>";                  // Pour faire un retour à la ligne
?>


<!-- *******************************************************************   --> 

<h2>EXERCICE 2: CAPITALES </h2>
<p> 1. Affichez la liste des capitales (par ordre alphabétique) suivie du nom du pays.<br>
2. Affichez la liste des pays (par ordre alphabétique) suivie du nom de la capitale.<br>
3. Affichez le nombre de pays dans le tableau.<br>
</p>
<?php
$capitales = array(
    "Bucarest" => "Roumanie",
    "Bruxelles" => "Belgique",
    "Oslo" => "Norvège",
    "Ottawa" => "Canada",
    "Paris" => "France",
    "Port-au-Prince" => "Haïti",
    "Port-d'Espagne" => "Trinité-et-Tobago",
    "Prague" => "République tchèque",
    "Rabat" => "Maroc",
    "Riga" => "Lettonie",
    "Rome" => "Italie",
    "San José" => "Costa Rica",
    "Santiago" => "Chili",
    "Sofia" => "Bulgarie",
    "Alger" => "Algérie",
    "Amsterdam" => "Pays-Bas",
    "Andorre-la-Vieille" => "Andorre",
    "Asuncion" => "Paraguay",
    "Athènes" => "Grèce",
    "Bagdad" => "Irak",
    "Bamako" => "Mali",
    "Berlin" => "Allemagne",
    "Bogota" => "Colombie",
    "Brasilia" => "Brésil",
    "Bratislava" => "Slovaquie",
    "Varsovie" => "Pologne",
    "Budapest" => "Hongrie",
    "Le Caire" => "Egypte",
    "Canberra" => "Australie",
    "Caracas" => "Venezuela",
    "Jakarta" => "Indonésie",
    "Kiev" => "Ukraine",
    "Kigali" => "Rwanda",
    "Kingston" => "Jamaïque",
    "Lima" => "Pérou",
    "Londres" => "Royaume-Uni",
    "Madrid" => "Espagne",
    "Malé" => "Maldives",
    "Mexico" => "Mexique",
    "Minsk" => "Biélorussie",
    "Moscou" => "Russie",
    "Nairobi" => "Kenya",
    "New Delhi" => "Inde",
    "Stockholm" => "Suède",
    "Téhéran" => "Iran",
    "Tokyo" => "Japon",
    "Tunis" => "Tunisie",
    "Copenhague" => "Danemark",
    "Dakar" => "Sénégal",
    "Damas" => "Syrie",
    "Dublin" => "Irlande",
    "Erevan" => "Arménie",
    "La Havane" => "Cuba",
    "Helsinki" => "Finlande",
    "Islamabad" => "Pakistan",
    "Vienne" => "Autriche",
    "Vilnius" => "Lituanie",
    "Zagreb" => "Croatie"
);
$nb= count ($capitales);

ksort($capitales);              //Pour trier le tableau par ordre alphabétique
foreach($capitales as $cle => $valeur) 
{ 
echo $cle ." : ".$valeur."<br>"; 
}
echo "<br>";                  // Pour faire un retour à la ligne
echo " <b>Le tableau contient " .$nb.  " capitales. </b>";
echo "<br>";                  // Pour faire un retour à la ligne
?>


<h2>EXERCICE 2: CAPITALES: QUESTION 4 </h2>
<p> 4.Supprimer du tableau toutes les capitales ne commençant par la lettre 'B', puis affichez le contenu du tableau..<br>
    <!-- OU   -->  
<?php
?>

    <!-- OU   -->  
<?php
?>












</body>
</html>