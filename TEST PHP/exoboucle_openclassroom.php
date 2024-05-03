      <!--         EXERCICE OPENCLASSROOM:   Vous allez créer une page web qui affiche différentes recettes en utilisant les boucles en PHP pour générer le contenu HTML.

Créez le fichier index.php.

Définissez un tableau en PHP contenant quatre recettes. Chaque recette devrait avoir un titre et l'auteur de la recette.

Utilisez une boucle pour parcourir le tableau de recettes.

Pour chaque recette, affichez le titre et l'auteur dans des balises HTML appropriées.

Testez votre page web : vérifiez que les quatre recettes s’affichent avec le titre et l’auteur.      -->


<?php

$recipes = [
    [
        'title' => 'Cassoulet',
        'author' => 'mickael.andrieu@exemple.com',
    ],
    [
        'title' => 'Couscous',
        'author' => 'mickael.andrieu@exemple.com',
    ],
    [
        'title' => 'Escalope milanaise',
        'author' => 'mathieu.nebra@exemple.com',
    ],
    [
        'title' => 'Salade Romaine',
        'author' => 'laurene.castor@exemple.com',
    ],
];
                    // Le test ne fonctionne pas si on retire la partie html qui est en bas. Il affiche à l'écran chaque titre suivi de l'adresse mail de l'auteur.
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des recettes</title>
</head>
<body>
    <ul>
        <?php for ($lines = 0; $lines <= 3; $lines++) : ?>
            <li><?php echo $recipes[$lines]['title'] . ' (' . $recipes[$lines]['author'] . ')'; ?></li>
        <?php endfor; ?>
    </ul>
</body>
</html>