<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PLATS SANDWICH V3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="Lignerouge.css" rel="stylesheet">

    <body style="background-color: #4A394a;">
   
<!--     Header        SANS L'ONGLET DE RECHERCHE      -->
<?php
  require_once ("php/header.php");
?>



      <div class="image-container position-relative"> <!--        ICI MON MA VIDEO DE FOND SANS L'ONGLET DE RECHERCHE    -->
        <div class="row g-0"> <!--Ici mon image de fond -->
      
          <!-- <div class="image-container">   Ici mon image de fond 
                                                                            <img class="img-fluid " src="Mesimages/imagedefond2a.avif" height="auto" width="100%" position="relative">
                                                                          </div>-->
      
          <video id="video" class="col-12" src="images_the_district/11659-231758756_small.mp4"
            style="width:100vmax; height: 20vmax;" playsinline autoplay loop muted></video>
        </div>
      
        
      
      </div>

      
<main>
<br>
      <h1 class="text-center">SANDWICHS</h1><br>
      <div id="carouselExample" class="carousel slide text-center" data-bs-ride="carousel" style="background-color: #4A394a;">
        <div class="carousel-inner">
  <div class="container row d-flex  justify-content-evenly mx-auto p-2 " style="background-color: #4A394a;">  <!-- mx-auto p-2  permet de centrer le bloc de cards au centre de la page -->
  
    <div class="card mb-3 bg-primary col-6" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="Mesimages/sandwichchicken.jpg" class="img-fluid rounded-pill" alt="...">
          </div>
          <div class="col-md-6">
            <div class="card-body">
              <h5 class="card-title tailletitreplat"> SANDWICH CHICKEN</h5>
              <p class="card-text tailledescriplat"><i> Chicken et sauce moutarde</i></p>
              <a href="Commande.php" class="btn btn-dark tailletextcommand">Commander</a>
            </div>
          </div>
    </div>
    </div>

          <div class="card mb-3 bg-secondary col-6" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4 ">
                <img src="Mesimages/sandwichjambon.jpg" class="img-fluid rounded-pill " alt="...">
              </div>
              <div class="col-md-6">
                <div class="card-body">
                  <h5 class="card-title tailletitreplat">SANDWICH JAMBON</h5>
                  <p class="card-text tailledescriplat"><i>Du jambon avec du beurre et de l'emmental</i></p>
                  <a href="Commande.php" class="btn btn-dark tailletextcommand">Commander</a>
                </div>
              </div>
            </div>
          </div>
       
          <div class="card mb-3 bg-secondary col-6" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="Mesimages/sandwichpoulet.jpg" class="img-fluid rounded-pill" alt="...">
              </div>
              <div class="col-md-6">
                <div class="card-body">
                  <h5 class="card-title tailletitreplat">SANDWICH POULET</h5>
                  <p class="card-text tailledescriplat"><i>Emincé de poulet et sauce mayonnaise</i></p>
                  <a href="Commande.php" class="btn btn-dark tailletextcommand">Commander</a>
                </div>
              </div>
            </div>
          </div>


          <div class="card mb-3 bg-primary col-6" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="Mesimages/sandwichsalami.jpg" class="img-fluid rounded-pill" alt="...">
              </div>
              <div class="col-md-6">
                <div class="card-body">
                  <h5 class="card-title tailletitreplat">SANDWICH SALAMI</h5>
                  <p class="card-text tailledescriplat"><i>Du salami et du fromage</i></p>
                  <a href="Commande.php" class="btn btn-dark tailletextcommand">Commander</a>
                </div>
              </div>
            </div>
          </div>
  </div>


</div>        <!-- ICI Mes boutons de carousel -->


<button class="carousel-control-prev d-none" id="carouselcatprec" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>

<button class="btn btn-secondary bg-dark rounded-4 espacebouton" onclick="precedent()" type="button"><a href="Platcategoriepate.php">Précédent</a></button>


<button class="carousel-control-next d-none" id="carouselcatsuiv" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<button class="btn btn-secondary bg-dark rounded-4 espacebouton" onclick="suivant()"  type="button"><a href="Platcategoriepizza.php">Suivant</a></button>


</div>
</main>



<!--         ICI MON FOOTER OU PIED DE PAGE AVEC LES LOGOS    -->
<?php
require_once ('php/footer.php');
?>
    
 



  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="Asset/javascript/json.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"></script>
      <script src="lignerouge.js"></script>
  </body>
  
  </html>