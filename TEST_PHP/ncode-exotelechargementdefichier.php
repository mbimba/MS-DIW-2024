<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> N CODE EXERCICE: TELECHARGEMENT DE FICHIER EN PHP </title>
</head>
<body>
 <!-- N CODE LES DATES ET LES HEURES-->
 <h1> N CODE EXERCICE: TELECHARGEMENT DE FICHIER: Traitement en php </h1>
<p> <strong>Créer un formulaire d'upload et le fichier PHP de traitement correspondant, dans le fichier PHP écrivez juste var_dump($_FILES); et observez le résultat.<br>

Vous devriez avoir quelque chose du genre :</strong> </p>
<p> 
    'name' => string 'monfichier.jpg' (length=10) = nom du fichier d'origine<br>
    'type' => string 'image/jpeg' (length=10) = type MIME du fichier<br>
    'tmp_name' => string 'C:\wamp\tmp\phpC1CD.tmp' (length=23) = nom et chemin du fichier temporaire<br>
    'error' => int 0 = erreurs (s'il y en a, elles sont retournées via un tableau PHP)<br>
    'size' => int 100813 = taille du fichier, en octets<br>
</p>

<form action="upload.php" method="post" enctype="multipart/form-data">

    <input type="file" name="fichier" />

    <input type="submit" value="Envoyer le fichier" />

</form>














</body>
</html>