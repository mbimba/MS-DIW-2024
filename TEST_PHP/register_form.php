<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php formulaire: EXERCICE 2</title>
</head>
<body>


<form action="register_script.php" method="post">

  <label for="nom">Nom :</label>

  <input type="text" id="nom" name="nom"><br><br>

  <label for="prenom">Prénom :</label>

  <input type="text" id="prenom" name="prenom"><br><br>

  <label for="email">Adresse email :</label>

  <input type="email" id="email" name="email"><br><br>

  <label for="password">Mot de passe :</label>

  <input type="password" id="password" name="password"><br><br>

  <label for="confirm_password">Confirmer le mot de passe :</label>

  <input type="password" id="confirm_password" name="confirm_password"><br><br>

  <input type="submit" value="S'inscrire">

</form>



</body>
</html>
