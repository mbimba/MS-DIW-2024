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






</body>
</html>