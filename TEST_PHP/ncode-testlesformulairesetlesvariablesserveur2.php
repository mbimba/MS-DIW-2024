<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php formulaire</title>
</head>
<body>
<h2> TEST PHP FORMULAIRE HTML AVEC UN FICHIER PHP "script.php": Transmettre des champs de formulaire sous la forme d'un tableau"</h2>  

<form action ="check.php" method="post"> 
    Tu utilises internet plutôt le :<br /> 
    <input type="checkbox" name="jours[]" value="Lundi" />Lundi<br />
    <input type="checkbox" name="jours[]" value="Mardi" />Mardi<br />
    <input type="checkbox" name="jours[]" value="Mercredi" />Mercredi<br />
    <input type="checkbox" name="jours[]" value="Jeudi" />Jeudi<br />
    <input type="checkbox" name="jours[]" value="Vendredi" />Vendredi<br />
    <input type="submit" name="Envoyer" value="ENVOYER" /> 
</form> 



</body>
</html>

