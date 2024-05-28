<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMMANDES V3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="Lignerouge.css" rel="stylesheet">



<body style="background-color: #4A394a;">
 
      <!--        Header     -->
      <?php
require_once ("php/header.php");
?> 

        <main>
            <br>
            <h1 class="text-center">ASIATIQUE</h1><br>
          <div class="container row d-flex  justify-content-evenly mx-auto p-2 " style="background-color: #4A394a;">
            <!-- mx-auto p-2  permet de centrer le bloc de cards au centre de la page -->
          
            <div class="card mb-3 bg-primary col-6" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="Mesimages/Asiannouillesviande.jpeg" class="img-fluid rounded-pill" alt="...">
                </div>
                <div class="col-md-6">
                  <div class="card-body">
                    <h5 class="card-title"> BOUILLON DE NOUILLES & ÉMINCÉS DE BOEUF</h5>
                    <p class="card-text">Ce plat est composé de...</p>
          
                    <p> Quantité <a href="#" class="btn btn-dark"> 1 </a> </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
              

   <!--       ICI Le début de mon formulaire commande       -->
            
   <div class="container mt-5 pt-5" action="traitement.php" method="get" > <!-- Mon formulaire commande      "pt-5 permet de créer une marge ou espace au"-->
    <form class="row g-3" >
        <div class="col-md-12">
            <label for="nomprenom" class="form-label"><strong>Nom et prénom</strong></label>
            <input type="text" class="form-control" id="nometprenom">
            <span aria-label="required">Ce champ est obligatoire</span>
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label"><strong>Email</strong></label>
            <input type="email" class="form-control inputcontact" id="votreemail"  placeholder="dave.loper@afpa.fr" required>
            <span aria-label="required">Ce champ est obligatoire</span>
        </div>
        <div class="col-md-6">
            <label for="phonenumber" class="form-label"><strong>Téléphone</strong></label>
            <input type="tel" class="form-control inputcontact" id="phone" name="phone" placeholder="01 23 45 67 89">
            <span aria-label="required">Ce champ est obligatoire</span>
        </div>
        <div class="col-md-12">
            <label for="votreadresse" class="form-label"><strong>Votre adresse</strong></label>
            <textarea class="form-control" id="votreadresse" rows="3" placeholder="Une adresse de livraison" required></textarea>
            <span aria-label="required">Ce champ est obligatoire</span>
                </div>
                <div class="col-md-12 d-flex flex-row-reverse">         <!-- "d-flex flex-row-reverse" permet de mettre "envoyer" tout à droite -->
                <button type="submit" class="btn btn-primary" onclick="envoicommande ()">Envoyer</button>
            </div>
            </form>
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