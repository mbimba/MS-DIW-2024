<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> N CODE TEST: PHP - Les sessions </title>
</head>


<body>

 <!-- N CODE PHP - Les sessions-->
 <h1> N CODE TEST: PHP - LES SESSIONS </h1>
<p><strong> Fonctionnement </strong></p>


<!--    -->  
<?php
session_start();

$_SESSION["login"] = "webmaster";

echo $_SESSION["login"];
?>

<!-- **************************  -->  

<p><strong> L'identifiant de session </strong></p>

<?php
   session_start();

   $_SESSION["login"] = "webmaster";
   $_SESSION["role"] = "admin";

   echo"- session ID : ".session_id();      //session_id() retourne une chaîne vide s'il n'y a pas de session en cours. 
?>




<!-- ***************************   -->  
<p><strong> Tester la session: Proprosition 1</strong></p>

<?php
  session_start();

  if ($_SESSION["login"]) 
  {
     echo"Vous êtes autorisé à voir cette page.";  
  } 
  else 
  {
     echo"Cette page nécessite une identification.";  
  }
  ?>

<!-- OU -->
<p><strong> Tester la session: Proprosition 2 </strong></p>

<?php
session_start();

if ( ! isset($_SESSION["login"]) ) 
{
    header("Location:index.php");
    exit;
}

// Reste du code (PHP/HTML)
echo"Bonjour ".$_SESSION["login"]."<br>");  

?>







<!-- ****************************** -->

<h2></h2>
<p></p>




















</body>
</html>