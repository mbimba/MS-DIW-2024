<?php

var_dump($_FILES);

?>   
<!--AFFICHE:  array(1) { ["fichier"]=> array(6) { ["name"]=> string(14) "parralax3.jpeg" ["full_path"]=> string(14) "parralax3.jpeg" ["type"]=> string(10) "image/jpeg" ["tmp_name"]=> string(14) "/tmp/php9pBgGR" ["error"]=> int(0) ["size"]=> int(5565) } }    -->



<!--  Explications :

    name : le nom du fichier d'origine, tel que choisi par l'utilisateur.
    type : le type MIME du fichier, qui indique le type de fichier (image, texte, etc.).
    tmp_name : le nom et le chemin du fichier temporaire créé par PHP pour stocker le fichier uploadé.
    error : un code d'erreur qui indique si une erreur est survenue lors de l'upload (par exemple, si le fichier est trop grand).
    size : la taille du fichier, en octets.

Notez que le tableau $_FILES contient une entrée pour chaque champ de formulaire de type file. Dans cet exemple, nous avons un seul champ de formulaire nommé fichier, donc le tableau $_FILES contient une seule entrée.

  -->