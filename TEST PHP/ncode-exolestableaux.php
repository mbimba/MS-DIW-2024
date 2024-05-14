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
<p> <strong>Créez un tableau associant à chaque mois de l’année le nombre de jours du mois.<br>
Utilisez le nom des mois comme clés de votre tableau associatif.<br>
Affichez votre tableau (dans un tableau HTML) pour faire apparaitre sur chaque ligne le nom du mois et le nombre de jours du mois.</strong><br>
</p>
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
echo "</table>"; 
echo "<br>";                  // Pour faire un retour à la ligne
 ?>


<!-- *******************************************************************   --> 
<h2>Exercice 1 : Tri du tableau (365 jours)</h2>
<p><strong>Triez ensuite votre tableau en utilisant comme critère le nombre de jours, puis affichez le résultat.</strong>
</P>
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
<p> <strong> 1. Affichez la liste des capitales (par ordre alphabétique) suivie du nom du pays.</strong> <br>
<strong> 2. Affichez la liste des pays (par ordre alphabétique) suivie du nom de la capitale.</strong><br>
<strong> 3. Affichez le nombre de pays dans le tableau.</strong><br>
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

$nb= count ($capitales);            //Count compte le nombre d'éléments dans un tableau

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
<p> <strong>4.Supprimer du tableau toutes les capitales ne commençant par la lettre 'B', puis affichez le contenu du tableau.</strong>.<br>
    <!-- OU   -->  
<table border=1>
<tr>
<th>Capitales</th>
<th>Pays</th>
</tr>
<?php
echo "<br>";                  // Pour faire un retour à la ligne
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

ksort($capitales);              //Pour trier le tableau par ordre alphabétique
foreach($capitales as $capitales => $spays) 

{ 
    if (strpos($capitales, 'B')=== 0)
    {
        echo "<tr>";
        echo "<td>" . $capitales . "</td>";
        echo "<td>" . $spays . "</td>";
        echo "</tr>";
    }

}
echo "</table>"; 
echo "<br>";                  // Pour faire un retour à la ligne
?>

<!-- ******************************************************************   -->  



<h2>EXERCICE 3: DEPARTEMENTS </h2>
<p> <strong> A partir du tableau ci-dessus:</strong> <br>
<strong> 1. Affichez la liste des régions (par ordre alphabétique) suivie du nom des départements</strong><br>
<strong> 2. Affichez la liste des régions suivie du nombre de départements</strong><br>
</p>




<?php
$departements = array(
    "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
    "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
    "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
    "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
);
ksort($departements);    //Pour trier le tableau par ordre alphabétique

foreach($departements as $cle=>$valeur)
{
    echo "<b> $cle </b>: </br>";
    foreach($valeur as $cle2=>$val)
    {
        echo "$cle2:", $val, "</br>";
    }
    echo '<br>';
}

?>

<!-- ******************************************************************   -->  
    <!-- OU   -->  
<?php
?>

<!-- 
foreach ($departements as $cle => $valeurs) {
    print("Ma région : ".$cle."\n"."<br>"); // on affiche la clé
    //une deuxième boucle pour parcourir toutes les valeurs associées à une clé
    foreach ($departements[$cle] as $nom){
   print($nom."\n"."<br>");
    }
   }




--------------

   foreach($departements as $cle=>$valeur)
{
    echo "<b> $cle </b>: </br>";
    foreach($valeur as $ind=>$val)
    {
        echo "<b> $ind </b>:", $val, "</br>";
    }
    echo '<br>';
}



--------
$keys = array_keys($departements);
for ($i=0; $i < count ($departements); $i++){
    echo $keys [$i]. "</br>";
    foreach ($departements[$keys[$i]] as $key => $value){
        echo "<b>" .$key." </b> : ".$value." </br>";
    }
    echo "</br>";
}
 -->  







</body>
</html>