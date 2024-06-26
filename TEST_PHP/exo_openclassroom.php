<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Openclassroom test </title>
</head>
<body>
    
    <h1>Ma page web</h1>
    <h2>Page de test</h2>
        
    <p>
        Bonjour <!-- Insérer le pseudo du visiteur ici --> !
    </p>



    <p>
     Cette page contient du code HTML avec des balises PHP.<br />
    <?php /* Insérer du code PHP ici */ ?>
    Voici quelques petits tests :
    </p>
        <ul>
        <li style="color: blue;">Texte en bleu</li>
        <li style="color: red;">Texte en rouge</li>
        <li style="color: green;">Texte en vert</li>
        </ul>
    <?php
        /* Encore du PHP
        Toujours du PHP */
        echo "Ceci est du texte";
        echo "<br>";   

    ?>


<!-- AFFICHER DU TEXTE -->
        <!-- Ou bien, avec des parenthèses -->
    <?php echo("Ceci est du texte"); ?>
    <?php echo "Ceci est du <strong>texte</strong>"; ?>

    <?php echo "Cette ligne a été écrite \"uniquement\" en PHP."; ?>




<h2>Affichage de texte avec PHP</h2>
        
        <p>
            Cette ligne a été écrite entièrement en HTML.<br/>
            <?php echo("Celle-ci a été écrite entièrement en PHP."); ?>
        </p>



<!-- TESTER UNE PAGE PHP -->
        <h1>Ma page web</h1>
        <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>


<!-- COMMENTEZ VOTRE CODE -->
    <!-- Commentaires monolignes -->
<?php
echo "J'habite en Chine."; // Cette ligne indique où j'habite

// La ligne suivante indique mon âge
echo "<br>";                                     //echo"<br>" permet de faire un retour à la ligne
echo "J'ai 92 ans.";
?>

    <!-- Commentaires multilignes -->
<?php
/* La ligne suivante indique mon âge
Si vous ne me croyez pas...
... vous avez raison ;o) */
echo "<br>";                                     //echo"<br>" permet de faire un retour à la ligne 
echo "J'ai 92 ans.";
?>


<!--   DECRIVEZ LES ELEMENTS DE VOTRE PROJET A L'AIDE DE VARIABLES  -->

<?php
$userAge = 17; // La variable est créée et vaut 17
$userAge = 23; // La variable est modifiée et vaut 23
$userAge = 55; // La variable est modifiée et vaut 55

?>


<?php
$fullname = "Mathieu Nebra";
$email = 'mathieu.nebra@exemple.com';
?>

<?php
$variable = "Mon \"nom\" est Mathieu";
$variable = 'Je m\'appelle Mathieu';
?>

<!-- Concaténez une variable -->
<?php
echo "<br>";                                     //echo"<br>" permet de faire un retour à la ligne
$fullname = "Mathieu Nebra";
echo "Bonjour ";
echo $fullname;
echo " et bienvenue sur le site !";
?>

<!-- Concaténez une variable sur une ligne: La concaténaion se fait avec des guillemets doubles -->
<?php
echo "<br>";                                     //echo"<br>" permet de faire un retour à la ligne
    $fullname = "Mathieu Nebra";
    echo "Bonjour {$fullname} et bienvenue sur le site !";
?>

<!-- Concaténez avec des guillemets simples -->
<?php
echo "<br>";                                     //echo"<br>" permet de faire un retour à la ligne
    $fullname = 'Mathieu Nebra';
    echo 'Bonjour ' . $fullname . ' et bienvenue sur le site !'; // OK
?>

<!-- Faites des calculs simples -->

<?php
$number = 2 + 4; // $number prend la valeur 6
$number = 5 - 1; // $number prend la valeur 4
$number = 3 * 5; // $number prend la valeur 15
$number = 10 / 2; // $number prend la valeur 5

// Allez on rajoute un peu de difficulté
$number = 3 * 5 + 1; // $number prend la valeur 16
$number = (1 + 2) * 2; // $number prend la valeur 6
?>


<?php
echo "<br>";                                     //echo"<br>" permet de faire un retour à la ligne
$number = 10;
$result = ($number + 5) * $number; // $result prend la valeur 150
echo $result;
?>

<!-- Le modulo pour des divisions -->
<?php
$number = 10 % 5; // $number prend la valeur 0 car la division tombe juste
$number = 10 % 3; // $number prend la valeur 1 car il reste 1
$number = 7 % 4;// $number prend la valeur 3 car il reste 3
?>

<!--   ADAPTEZ LE COMPORTEMENT DE VOTRE APPLICATION A L'AIDE DES CONDITIONS  -->
<!-- Utilisez la structure  if… else -->
<?php
echo "<br>";                                     //echo"<br>" permet de faire un retour à la ligne
$isEnabled = true; // La condition d'accès

if ($isEnabled === true) {
    echo "Vous êtes autorisé(e) à accéder au site ✅";
}
?>
<!--          -->
<?php
echo "<br>";                                     //echo"<br>" permet de faire un retour à la ligne
$isEnabled = true;

if ($isEnabled === true) {
    echo "Vous êtes autorisé(e) à accéder au site ✅";
}
else {
    echo "Accès refusé ❌ ";
}
?>

<!--                  -->
<?php
echo "<br>";                                     //echo"<br>" permet de faire un retour à la ligne
$isAllowedToEnter = "Oui";

// SI on a l'autorisation d'entrer
if ($isAllowedToEnter === "Oui") {
    // instructions à exécuter quand on est autorisé à entrer
} // SINON SI on n'a pas l'autorisation d'entrer
elseif ($isAllowedToEnter === "Non") {
    // instructions à exécuter quand on n'est pas autorisé à entrer
} // SINON (la variable ne contient ni Oui ni Non, on ne peut pas agir)
else {
    echo "Euh, je ne comprends pas ton choix, tu peux me le rappeler s'il te plaît ?";
}
?>

<!--   Étudiez le cas des booléens   -->
<?php
$isAllowedToEnter = true;

if ($isAllowedToEnter) {
    echo "Bienvenue petit nouveau. :o)";
}
else {
    echo "T'as pas le droit d'entrer !";
}
?>

<!--     Vérifier si la variable précédente vaut False -->

<?php
echo "<br>";                                     //echo"<br>" permet de faire un retour à la ligne
$isAllowedToEnter = true;

// Si pas autorisé
if (! $isAllowedToEnter) {      // if (! $isAllowedToEnter) = if ($isAllowedToEnter === false) . On peut utiliser ces deux formules.

}
?>

<!--  Posez des conditions multiples -->
<?php

$isEnabled = true;
$isOwner = false;

if ($isEnabled && $isOwner) {
    echo 'Accès à la recette validé ✅';
} else {
    echo 'Accès à la recette interdit ! ❌';
}
?>

<!--                  -->
<?php
echo "<br>";                                     //echo"<br>" permet de faire un retour à la ligne
$isEnabled = true;
$isOwner = false;
$isAdmin = true;

if (($isEnabled && $isOwner) || $isAdmin) {
    echo 'Accès à la recette validé ✅';
} else {
    echo 'Accès à la recette interdit ! ❌';
}
?>

<!--  Utilisez cette astuce bonus  -->
<?php
$chickenRecipesEnabled = true;

if ($chickenRecipesEnabled) {
    echo '<h1>Liste des recettes à base de poulet</h1>';
}
?>


<!--     Utilisez la même astuce bonus  précédente sans "l'écho"           -->
<?php $chickenRecipesEnabled = true; ?>

<?php if ($chickenRecipesEnabled): ?> <!-- Ne pas oublier le ":" -->

<h1>Liste des recettes à base de poulet</h1>

<?php endif; ?><!-- Ni le ";" après le endif -->


 <!--  Utilisez la condition switch pour optimiser votre code  -->
                    <!--  Un exemple avec "if" et "elseif" : Cet exemple est long, lourd et répétitif   -->
                    <?php
$grade = 16;

if ($grade === 0) {
    echo "Il faudra revoir tout le cours !";
}

elseif ($grade === 5) {
    echo "Tu dois réviser plusieurs chapitres";
}

elseif ($grade === 7) {
    echo "Il te manque quelques révisions pour atteindre la moyenne";
}

elseif ($grade === 10) {
    echo "Tu as pile poil la moyenne, c'est un peu juste…";
}

elseif ($grade === 12) {
    echo "Tu es assez bon";
}

elseif ($grade === 16) {
    echo "Tu te débrouilles très bien !";
}

elseif ($grade === 20) {
    echo "Excellent travail, c'est parfait !";
}

else {
    echo "Désolé, je n'ai pas de message à afficher pour cette note";
}
?>
                  <!--  on peut utiliser une autre structure plus souple : c'est "switch". Voici le même exemple avec switch   -->
<?php
echo "<br>";                                     //echo"<br>" permet de faire un retour à la ligne
$grade = 10;

switch ($grade) // on indique sur quelle variable on travaille
{ 
    case 0: // dans le cas où $grade vaut 0
        echo "Il faudra revoir tout le cours !";
    break;
    
    case 5: // dans le cas où $grade vaut 5
        echo "Tu dois réviser plusieurs modules";
    break;
    
    case 7: // dans le cas où $grade vaut 7
        echo "Il te manque quelques révisions pour atteindre la moyenne ";
    break;
    
    case 10: // etc. etc.
        echo "Tu as pile poil la moyenne, c'est un peu juste…";
    break;
    
    case 12:
        echo "Tu es assez bon";
    break;
    
    case 16:
        echo "Tu te débrouilles très bien !";
    break;
    
    case 20:
        echo "Excellent travail, c'est parfait !";
    break;
    
    default:
        echo "Désolé, je n'ai pas de message à afficher pour cette note";
}
?>
<!--  Découvrez les ternaires : des conditions condensées.    Un ternaire est une condition condensée qui sert à faire deux choses sur une seule ligne (1:Tester la valeur d'une variable dans une condition. 2:Affecter une valeur à une variable selon que la condition est vraie ou non.)   -->

        <!--  Prenons cet exemple à base de if… else  qui met un booléen $majeur  à vrai ou faux selon l'âge du visiteur :  -->
<?php
echo "<br>";                                     //echo"<br>" permet de faire un retour à la ligne
$userAge = 24;

if ($userAge >= 18) {
	$isAdult = true;
}
else {
	$isAdult = false;
}
?>
        <!--  On peut faire la même chose en une seule ligne grâce à une structure ternaire : -->

<?php
$userAge = 24;

$isAdult = ($userAge >= 18) ? true : false;

// Ou mieux, dans ce cas précis
$isAdult = ($userAge >= 18);
?>
        <!-- Structure ternaire : N CODE -->
<?php
 if ($age>=18)
 {
    $reponse="majeur" ;
 }
 else
 {
    $reponse=" mineur " ;
 }
?>     
<!--  FORCER LE TYPE D'UNE VARIABLE: Cours N Code  -->
<?php
echo "<br>";                                     //echo"<br>" permet de faire un retour à la ligne
$a = 15.125863;
settype($a, "integer"); 
echo $a; // affiche 15
?>

<!--  CONCEVEZ VOTRE SITE WEB AVEC PHP ET MySQL: Afficher une liste de recettes à l'aide des boucles  -->
                  <!-- Utilisez un tableau pour lister des éléments  -->
<?php
echo "<br>";                                     //echo"<br>" permet de faire un retour à la ligne
// Premier utilisateur
$userName1 = 'Mickaël Andrieu';
$userEmail1 = 'mickael.andrieu@exemple.com';
$userPassword1 = 'S3cr3t';
$userAge1 = 34;

// Deuxième utilisatrice
$userName2 = 'Laurène Castor';
$userEmail2 = 'laurene.castor@exemple.com';
$userPassword2 = 'P4ssW0rD';
$userAge2 = 28;

// ... et ainsi de suite pour les autres utilisateurs.
?>
                    <!--      POur afficher la formule précédente           -->

<?php
$user1 = ['Mickaël Andrieu', 'email', 'S3cr3t', 34];

echo $user1[0]; // "Mickaël Andrieu"
echo $user1[1]; // "email"
echo $user1[3]; // 34                       // Il affiche à l'écran: Mickaël Andrieuemail34 
echo "<br>";                                     //echo"<br>" permet de faire un retour à la ligne
?>

                     <!--                 -->
<?php

$mickael = ['Mickaël Andrieu', 'mickael.andrieu@exemple.com', 'S3cr3t', 34];
$mathieu = ['Mathieu Nebra', 'mathieu.nebra@exemple.com', 'devine', 33];
$laurene = ['Laurène Castor', 'laurene.castor@exemple.com', 'P4ssw0rD', 28];

$users = [$mickael, $mathieu, $laurene];

echo $users[1][1]; // Il affiche "mathieu.nebra@exemple.com"
echo "<br>";                                     //echo"<br>" permet de faire un retour à la ligne
?>

                         <!--    Utilisez une boucle simple :  while             -->

<?php
while ($isValid) {
    // instructions à exécuter dans la boucle
}
?>
                        
                        <!--    Utilisez une boucle simple :  while             -->
<?php
$lines = 1;

while ($lines <= 10) {
    echo 'Je ne dois pas regarder les mouches voler quand j\'apprends le PHP.<br />';
    $lines++; // $lines = $lines + 1                         // Il affiche à l'écran: "je ne dois pas regarder..." 10 fois
}
echo "<br>";                                     //echo"<br>" permet de faire un retour à la ligne
?>

                         <!--  Un autre exemple avec la boucle :  while     -->

<?php
$lines = 1;

while ($lines <= 10)
{
    echo 'Ceci est la ligne n°' . $lines . '<br />';
    $lines++;
}                                     // Il affiche à l'écran: "Ceci est la ligne n°1  ceci est la ligne n°2" n fois jusqu'à la ligne n°10
echo "<br>";                                     //echo"<br>" permet de faire un retour à la ligne
?>              


<!--    --> 
<?php
$users = [
    [
        'full_name' => 'Mickaël Andrieu',
        'email' => 'mickael.andrieu@exemple.com',
        'age' => 34,
    ],
    [
        'full_name' => 'Mathieu Nebra',
        'email' => 'mathieu.nebra@exemple.com',
        'age' => 34,
    ],
    [
        'full_name' => 'Laurène Castor',
        'email' => 'laurene.castor@exemple.com',
        'age' => 28,
    ],
];
$lines = 3; // nombre d'utilisateurs dans le tableau
$counter = 0;
while ($counter < $lines) {
    echo $users[$counter]['full_name'] . ' ' . $users[$counter]['email'] . '<br />';
    $counter++;
}                                   // Il affiche 3 fois de suite avec des retours à la ligne: Mickaël Andrieu mickael.andrieu@exemple.com Mathieu Nebra mathieu.nebra@exemple.com   Laurène Castor laurene.castor@exemple.com
echo "<br>";                                     //echo"<br>" permet de faire un retour à la ligne
?>

                            <!-- Découvrez une boucle plus complexe :  FOR   --> 

<?php
for ($lines = 0; $lines <= 2; $lines++)
{
    echo $users[$lines][0] . ' ' . $users[$lines][1] . '<br />';
}
?>

            <!-- *********************   Affichez des recettes ***********************  --> 
<?php

// Déclaration du tableau des recettes
$recipes = [
    ['Cassoulet','[...]','mickael.andrieu@exemple.com',true,],
    ['Couscous','[...]','mickael.andrieu@exemple.com',false,],
];
                                             // Il affiche uniquement à l'écran: .cassoulet (mickael.andrieu@exemple.com)     .Couscous(mickael.andrieu@exemple.com)
                                             // La partie html qui est en bas n'apparait pas dans le localhost. Le test ne fonctionne pas si on retire la partie html.
?>                                  

<!DOCTYPE html>
<html>
<head>
    <title>Affichage des recettes</title>
</head>
<body>
    <ul>
        <?php for ($lines = 0; $lines <= 1; $lines++): ?>
            <li><?php echo $recipes[$lines][0] . ' (' . $recipes[$lines][2] . ')'; ?></li>
        <?php endfor; ?>
    </ul>
</body>
</html>                     
<!-- *************************************** FIN "Affichez des recettes" ******************************************************************   --> 


<!--  CONCEVEZ VOTRE SITE WEB AVEC PHP ET MySQL: Organisez vos données à l'aide des tableaux  -->
                  <!-- Familiarisez-vous avec les tableaux numérotés  -->

<?php
$recipeTitle = 'Cassoulet';
echo "La recette du " . $recipeTitle;
// Il affiche à l'écran : "La recette du Cassoulet"
?>
                    <!-- Construisez un tableau numéroté  -->
<?php
echo "<br>";                                     //echo"<br>" permet de faire un retour à la ligne
$recipes = ['Cassoulet', 'Couscous', 'Escalope Milanaise', 'Salade César',];

// La fonction array permet aussi de créer un array
$recipes = array('Cassoulet', 'Couscous', 'Escalope Milanaise');                    
                                //L'ordre a beaucoup d'importance : - Le premier élément (« Cassoulet») aura le n° 0. - Ensuite Couscous le n° 1. - Etc.
?>                                  


<!-- Le tableau peut aussi être créé manuellement, case par case: -->
<?php
$recipes[0] = 'Cassoulet';
$recipes[1] = 'Couscous';
$recipes[2] = 'Escalope Milanaise';
echo "<br>";                                     //echo"<br>" permet de faire un retour à la ligne
?>
<!--Si vous ne voulez pas avoir à écrire vous-même le numéro de la case que vous créez, vous pouvez laisser PHP le sélectionner automatiquement en laissant les crochets vides : -->
<?php
$recipes[] = 'Cassoulet'; // Créera $recipes[0]
$recipes[] = 'Couscous'; // Créera $recipes[1]
$recipes[] = 'Escalope Milanaise'; // Créera $recipes[2]
?>  

                    <!-- Affichez un tableau numéroté  -->
<?php
echo "<br>";                //echo"<br>" permet de faire un retour à la ligne
echo $recipes[1]; // Il affiche à l'écran: Couscous
echo "<br>";                 //echo"<br>" permet de faire un retour à la ligne
?>

                    <!-- Familiarisez-vous avec les tableaux associatifs  -->
                    <!-- Construisez un tableau associatif  -->
<?php
// Une bien meilleure façon de stocker une recette !
$recipe = [
    'title' => 'Cassoulet',
    'recipe' => 'Etape 1 : des flageolets, Etape 2 : ...',
    'author' => 'john.doe@exemple.com',
    'enabled' => true,
];

?>
  <!-- Il est aussi possible de créer le tableau case par case, comme ceci :  -->
<?php
$recipe['title'] = 'Cassoulet';
$recipe['recipe'] = 'Etape 1 : des flageolets, Etape 2 : ...';
$recipe['author'] = 'john.doe@exemple.com';
$recipe['enable'] = true;
?>
                    <!-- Affichez un tableau associatif  -->
<?php
echo $recipe['title'];              // Il affiche à l'écran: cassoulet
?>
                    <!-- Parcourez un tableau: avec la boucle for   -->
<?php
echo "<br>";   //echo"<br>" permet de faire un retour à la ligne
/**
 * Déclaration du tableau des recettes
 * Chaque élément du tableau est un tableau numéroté (une recette)
 */
$recipes = [
    ['Cassoulet','[...]','mickael.andrieu@exemple.com',true,],
    ['Couscous','[...]','mickael.andrieu@exemple.com',false,],
];

for ($lines = 0; $lines <= 1; $lines++) {
    echo $recipes[$lines][0];
    echo "<br>";//echo"<br>" permet de faire un retour à la ligne
}                        // Il affiche à l'écran: cassoulet

?>
                    <!-- Parcourez un tableau: avec la boucle foreach   -->
<?php
echo "<br>";//echo"<br>" permet de faire un retour à la ligne
// Déclaration du tableau des recettes
$recipes = [
    ['Cassoulet','[...]','mickael.andrieu@exemple.com',true,],
    ['Couscous','[...]','mickael.andrieu@exemple.com',false,],
];

foreach ($recipes as $recipe) {
    echo $recipe[0]; // Il affichera à l'écran: Cassoulet, puis Couscous
} echo "<br>";
?>

<!-- C'est le même code que tout à l'heure, mais cette fois basé sur une boucle  foreach  .

À chaque tour de boucle, la valeur de l'élément suivant est mise dans la variable  $recipe  .

On peut donc utiliser $recipe uniquement à l'intérieur de la boucle, pour afficher l'élément en cours.

L'avantage de foreach , c'est qu'il permet aussi de parcourir les tableaux associatifs. -->

<?php
echo "<br>";//echo"<br>" permet de faire un retour à la ligne
$recipe = [
    'title' => 'Cassoulet',
    'recipe' => 'Etape 1 : des flageolets, Etape 2 : ...',
    'author' => 'mickael.andrieu@exemple.com',
    'enabled' => true,
];

foreach ($recipe as $value) {
    echo $value;
}       // Il affiche à l'écran: CassouletEtape 1 : des flageolets, Etape 2 : ...mickael.andrieu@exemple.com1
echo "<br>";
?>

<!-- L'intérêt devient encore plus flagrant quand nous utilisons un tableau de tableaux : -->
<?php
echo "<br>";
$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true, 
    ], 
    [
        'title' => 'Couscous',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
    [
        'title' => 'Escalope milanaise',
        'recipe' => '',
        'author' => 'mathieu.nebra@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Salade Romaine',
        'recipe' => '',
        'author' => 'laurene.castor@exemple.com',
        'is_enabled' => false,
    ],
];

foreach($recipes as $recipe) {
    echo $recipe['title'] . ' contribué(e) par : ' . $recipe['author'] . PHP_EOL; 
}
// Il affiche à l'écran 1ère ligne: Cassoulet contribué(e) par: mickael.andrieu@exemple.com 
// Il affiche à l'écran 2ème ligne: Couscous contribué(e) par : mickael.andrieu@exemple.com 
// Il affiche à l'écran 3ème ligne: Escalope milanaise contribué(e) par : mathieu.nebra@exemple.com 
// Il affiche à l'écran 4ème ligne: Salade Romaine contribué(e) par : laurene.castor@exemple.com 
?>
<!-- Toutefois, avec cet exemple, on ne récupère que la valeur. Or, on peut aussi récupérer la clé de l'élément. On doit dans ce cas écrire foreach  , comme ceci : -->
<?php foreach($recipe as $property => $propertyValue) ?>

<!-- Testons le fonctionnement avec un exemple :-->
<?php
echo "<br>";
$recipe = [
    'title' => 'Salade Romaine',
    'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
    'author' => 'laurene.castor@exemple.com',
];

foreach($recipe as $property => $propertyValue)
{
    echo '[' . $property . '] vaut ' . $propertyValue . PHP_EOL;
}  
echo "<br>";       
?>          <!-- IL affiche à l'écran: $ php exemple.php 
                                       [title] vaut Salade Romaine
                                       [recipe] vaut Etape 1 : Lavez la salade ; Etape 2 : euh ...
                                       [author] vaut laurene.castor@exemple.com  -->



                    <!-- Affichez rapidement un tableau avec print_r  -->
<?php
echo "<br>";
$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => '',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
];

echo '<pre>';
print_r($recipes);
echo '</pre>';
?>  

                     <!-- Vérifiez si une clé existe dans un tableau avec array_key_exists  -->
<?php
echo "<br>";
$recipe = [
    'title' => 'Salade Romaine',
    'recipe' => 'Etape 1 : Lavez la salade ; Etape 2 : euh ...',
    'author' => 'laurene.castor@exemple.com',
];

if (array_key_exists('title', $recipe))
{
    echo 'La clé "title" se trouve dans la recette !';
}

if (array_key_exists('commentaires', $recipe))
{
    echo 'La clé "commentaires" se trouve dans la recette !';
}                           // Il affiche à l'écran: La clé "title" se trouve dans la recette!
echo "<br>";                    
?> 

    
          
                    <!-- Vérifiez si une valeur existe dans un tableau avec in_array  -->
<?php
echo "<br>";
$users = [
    'Mathieu Nebra',
    'Mickaël Andrieu',
    'Laurène Castor',
];

if (in_array('Mathieu Nebra', $users))
{
    echo 'Mathieu fait bien partie des utilisateurs enregistrés !';
}

if (in_array('Arlette Chabot', $users))
{
    echo 'Arlette fait bien partie des utilisateurs enregistrés !';
}                                  // Il affiche à l'écran: Mathieu fait bien partie des utilisateurs enregistrés !
echo "<br>";
?>  
                    <!-- Récupétrez la clé d'une valeur dans un tableau avec array_search  -->

<?php
echo "<br>";
$users = [
    'Mathieu Nebra',
    'Mickaël Andrieu',
    'Laurène Castor',
];

$positionMathieu = array_search('Mathieu Nebra', $users);
echo '"Mathieu" se trouve en position ' . $positionMathieu . PHP_EOL;

$positionLaurène = array_search('Laurène Castor', $users);
echo '"Laurène" se trouve en position ' . $positionLaurène . PHP_EOL;           // Il affiche à l'écran: "Mathieu" se trouve en position 0 "Laurène" se trouve en position 2 
echo "<br>";
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


</body>
</html>