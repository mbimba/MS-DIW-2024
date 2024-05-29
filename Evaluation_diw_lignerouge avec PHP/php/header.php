<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header / Menu </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="Lignerouge.css" rel="stylesheet">
</head>
<body>
    
<header>
      <!--        NAVBAR ENTETE         SANS L'ONGLET DE RECHERCHE      -->
      <nav class="navbar navbar-expand-sm navbar-dark bg-dark fs-2  fixed-top">
        <div class="container-fluid-flex ">
          <img src="images_the_district/the_district_brand/facebook_cover_photo_1.png" class="object-fit-contain border rounded" width="80" alt="">
        </div>
        <div class="container-fluid d-flex justify-content-evenly " >
          <ul class="navbar-nav">
            <li class="nav-item col-sm-4 ">
              <a class="nav-link <?php if ($_SERVER['REQUEST_URI'] == "/Accueil.php") {echo "active";}?> espace" href="Accueil.php">Accueil</a>
            </li>
            <li class="nav-item col-sm-4 "> 
              <a class="nav-link <?php if ($_SERVER['REQUEST_URI'] == "/Cat%C3%A9gorie.php"||$_SERVER['REQUEST_URI'] == "/Platcategorieasiatique.php"||$_SERVER['REQUEST_URI'] == "/Platcategorieburger.php" ||$_SERVER['REQUEST_URI'] == "/Platcategoriegrillade.php" ||$_SERVER['REQUEST_URI'] == "/Platcategoriepate.php" ||$_SERVER['REQUEST_URI'] == "/Platcategoriepizza.php" ||$_SERVER['REQUEST_URI'] == "/Platcategoriesalade.php" ||$_SERVER['REQUEST_URI'] == "/Platcategoriesandwich.php" ||$_SERVER['REQUEST_URI'] == "/Platcategorievegan.php") {echo "active";}?>  espace" href="Catégorie.php">Catégorie</a>
            </li>
            <li class="nav-item col-sm-4 ">
              <a class="nav-link <?php if ($_SERVER['REQUEST_URI'] == "/Touslesplats.php") {echo "active";}?>  espace" href="Touslesplats.php">Plat</a>
            </li>
            <li class="nav-item col-sm-4 ">
              <a class="nav-link <?php if ($_SERVER['REQUEST_URI'] == "/Contact.php") {echo "active";}?>  espace " href="Contact.php">Contact</a>
            </li>
          </ul>
         
        </div>
      </nav>

      <?php  echo "<script> console.log('".$_SERVER['REQUEST_URI']."')</script>" ;?>

    </header>





































