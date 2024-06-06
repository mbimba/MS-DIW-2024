<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php formulaire: EXERCICE</title>
</head>
<body>
<h2> EXERCICE 1 PHP: MOT DE PASSE: Formulaire d'authentification </h2>
<p>
    <strong> Créer un formulaire d'authentification utilisant le principe des sessions. <br>

    </strong>
</p>
   

<p>
. Créer un formulaire login_form.php contenant 2 champs : login (qui peut être l'adresse email) et mot de passe. Ce formulaire doit poster les données sur le script login_script.php.<br>

. Le fichier login_script.php doit traiter les données du formulaire de la façon suivante: <br>

. Si le login et le mot de passe sont corrects (pour exemple login='admin' et mot de passe='admin') alors nous initialisons une variable de session auth avec la valeur ok.<br>

. Sinon la variable de session auth est détruite. <br>
. Une autre page PHP devra être accessible uniquement si une session a été initialisée, c'est-à-dire si l'utilisateur s'est authentifié correctement (donc i la variable de session auth existe et contient la valeur ok). Si ce n'est pas le cas, l'utilisateur devra être redirigé sur la page de connexion.
</p>

<!-- ICI LE FORMULAIRE -->

<form action="login_script.php" method="post">

    <label for="login">Login (ou adresse email) :</label>

    <input type="text" id="login" name="login"><br><br>

    <label for="password">Mot de passe :</label>

    <input type="password" id="password" name="password"><br><br>

    <input type="submit" value="Se connecter">

</form>

</body>
</html>
