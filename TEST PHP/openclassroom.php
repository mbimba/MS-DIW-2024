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
echo "J'ai 92 ans.";
?>

    <!-- Commentaires multilignes -->
<?php
/* La ligne suivante indique mon âge
Si vous ne me croyez pas...
... vous avez raison ;o) */
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
$fullname = "Mathieu Nebra";
echo "Bonjour ";
echo $fullname;
echo " et bienvenue sur le site !";
?>

<!-- Concaténez une variable sur une ligne: La concaténaion se fait avec des guillemets doubles -->
<?php
    $fullname = "Mathieu Nebra";
    echo "Bonjour {$fullname} et bienvenue sur le site !";
?>

<!-- Concaténez avec des guillemets simples -->
<?php
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
$isEnabled = true; // La condition d'accès

if ($isEnabled === true) {
    echo "Vous êtes autorisé(e) à accéder au site ✅";
}
?>
<!--          -->
<?php
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
$a = 15.125863;
settype($a, "integer"); 
echo $a; // affiche 15
?>

<!--  CONCEVEZ VOTRE SITE WEB AVEC PHP ET MySQL: Afficher une liste de recettes à l'aide des boucles  -->
                  <!-- Utilisez un tableau pour lister des éléments  -->
<?php

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
?>

                     <!--                 -->
<?php

$mickael = ['Mickaël Andrieu', 'mickael.andrieu@exemple.com', 'S3cr3t', 34];
$mathieu = ['Mathieu Nebra', 'mathieu.nebra@exemple.com', 'devine', 33];
$laurene = ['Laurène Castor', 'laurene.castor@exemple.com', 'P4ssw0rD', 28];

$users = [$mickael, $mathieu, $laurene];

echo $users[1][1]; // Il affiche "mathieu.nebra@exemple.com"
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
?>

                         <!--  Un autre exemple avec la boucle :  while     -->

<?php
$lines = 1;

while ($lines <= 10)
{
    echo 'Ceci est la ligne n°' . $lines . '<br />';
    $lines++;
}                                     // Il affiche à l'écran: "Ceci est la ligne n°1  ceci est la ligne n°2" n fois jusqu'à la ligne n°10
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