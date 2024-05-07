<!-- EXERCICES: 
1.Ecrire un script PHP qui affiche tous les nombres impairs entre 0 et 150, par ordre croissant : 1 3 5 7...
2.Écrire un programme qui écrit 500 fois la phrase Je dois faire des sauvegardes régulières de mes fichiers
3.Ecrire un script qui affiche la table de multiplication pour les nombres de 1 à 9 dans un tableau HTML, le résultat ressembler à ceci :--> 


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE: Les boucles PHP</title>
</head>
<body>
    <!-- Question1: Ecrire un script PHP qui affiche tous les nombres impairs entre 0 et 150, par ordre croissant : 1 3 5 7...-->
<?php 
        
echo "Exercice: Les boucles PHP";

for ($a = 1;  $a < 150; $a += 2) {
    echo "<br>" . $a;
} 
?>

<!-- Question 2: Écrire un programme qui écrit 500 fois la phrase Je dois faire des sauvegardes régulières de mes fichiers -->
<?php 
 $text = "Je dois faire des sauvegardes régulières de mes fichiers";

for ($i = 1; $i <= 500; $i++) {
    echo "<br>" . "$i . $text";
} 
?>



<!--Question 3: Ecrire un script qui affiche la table de multiplication pour les nombres de 1 à 9 dans un tableau HTML, le résultat ressembler à ceci : -->
        
<table border=1>

		<tr>

			<th>0</th>

			<?php for ($i = 1; $i <= 9; $i++): ?>

				<th><?= $i ?></th>

			<?php endfor; ?>

		</tr>

		<?php for ($i = 1; $i <= 9; $i++): ?>

			<tr>

				<th><?= $i ?></th>

				<?php for ($j = 1; $j <= 9; $j++): ?>

					<td><?= $i * $j ?></td>

				<?php endfor; ?>

			</tr>

		<?php endfor; ?>

	</table>



</body>
</html>