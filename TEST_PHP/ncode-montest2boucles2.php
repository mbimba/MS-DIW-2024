<!-- OPENCLASSROOM -->


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
<table border=8>
    <tr>
    <th>0</th>

<?php for ($i = 0; $i <= 40; $i++): ?>

    <th><?= $i ?></th>
    <th><?= $i ?></th>
    <th><?= $i ?></th>
    <th><?= $i ?></th>
	</tr>
<?php endfor; ?>
    
    </table>



    <ul>
        <?php for ($lines = 0; $lines <= 3; $lines++) : ?>
            <li><?php echo $recipes[$lines]['title'] . ' (' . $recipes[$lines]['author'] . ')'; ?></li>
        <?php endfor; ?>
    </ul>
</body>
</html>