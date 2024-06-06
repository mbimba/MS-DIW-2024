<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php formulaire: EXERCICE</title>
</head>
<body>
<h2> EXERCICE PHP: FORMULAIRE </h2>
<p>
    <strong> Reprenez le formulaire que vous avez réalisé dans la séance précédente (JavaScript). <br> 
        Dans ce formulaire, vous devez modifier l'attribut action de la balise form pour indiquer l'adresse d'un script PHP. <br>
        Puis créer un script PHP permettant d'afficher l'ensemble des valeurs transmises.<br>
        Cette instruction permet de récupérer la valeur du paramètre nom_du_input. 
    </strong>
</p>
    <form action="monscript.php" method="post"> 
        Nom : <input type="text" name="nom" size="20" maxlength="40" /> <br />  <br /> 
        Prenom : <input type="text" name="prenom" size="20" maxlength=40 /> 
        <input type="submit" value="ENVOYER" /> 
      </form>





</body>
</html>



