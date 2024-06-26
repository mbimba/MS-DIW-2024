<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemple avec Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<header>
</header>


<h2>Page de test</h2>
        <p>
            Cette page contient <strong>uniquement</strong> du code HTML.<br/>


            Voici quelques petits tests :


        </p>

        <ul>
            <li style="color: blue;">Texte en bleu</li>
            <li style="color: red;">Texte en rouge</li>
            <li style="color: green;">Texte en vert</li>
        </ul>

        
<!-- ************************************************************************************************************************************* -->
    <!-- Navbar avec lecteur vidéo -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Mon Site</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <video width="320" height="240" controls>
                            <source src="movie.mp4" type="video/mp4">
                            Votre navigateur ne supporte pas les vidéos HTML5.
                        </video>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php 
    echo "Bonjour le monde AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA"; 
  ?> 

<!-- ************************************************************************************************************************************* -->

    <!-- Carrousel de cartes -->
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">


            <div class="carousel-item active">
                <div class="card-group">
                    <!-- Ajouter des cartes ici selon besoin -->
                    <div class="card">
                        <img src="images_the_district/food/hamburger.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Carte 1</h5>
                            <p class="card-text">Description de l'image 1.</p>
                        </div>
                    </div>
                    <!-- Répéter pour 6 cartes ou plus selon besoin -->
                    <!-- Ajouter des cartes ici selon besoin -->
                    <div class="card">
                        <img src="images_the_district/food/hamburger.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Carte 1</h5>
                            <p class="card-text">Description de l'image 1.</p>
                        </div>
                    </div>
                    <!-- Répéter pour 6 cartes ou plus selon besoin -->
                    <!-- Ajouter des cartes ici selon besoin -->
                    <div class="card">
                        <img src="images_the_district/food/hamburger.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Carte 1</h5>
                            <p class="card-text">Description de l'image 1.</p>
                        </div>
                    </div>
                    <!-- Répéter pour 6 cartes ou plus selon besoin -->
                    <!-- Ajouter des cartes ici selon besoin -->
                    <div class="card">
                        <img src="images_the_district/food/hamburger.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Carte 1</h5>
                            <p class="card-text">Description de l'image 1.</p>
                        </div>
                    </div>
                    <!-- Répéter pour 6 cartes ou plus selon besoin -->
                    <!-- Ajouter des cartes ici selon besoin -->
                    <div class="card">
                        <img src="images_the_district/food/hamburger.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Carte 1</h5>
                            <p class="card-text">Description de l'image 1.</p>
                        </div>
                    </div>
                    <!-- Répéter pour 6 cartes ou plus selon besoin -->
                    <!-- Ajouter des cartes ici selon besoin -->
                    <div class="card">
                        <img src="images_the_district/food/hamburger.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Carte 1</h5>
                            <p class="card-text">Description de l'image 1.</p>
                        </div>
                    </div>
                    <!-- Répéter pour 6 cartes ou plus selon besoin -->
                </div>
            </div>

<!-- ************************************************************************** -->

            <div class="carousel-item active">
                <div class="card-group">
                    <!-- Ajouter des cartes ici selon besoin -->
                    <div class="card">
                        <img src="images_the_district/food/pizza-salmon.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Carte 1</h5>
                            <p class="card-text">Description de l'image 1.</p>
                        </div>
                    </div>
                    <!-- Répéter pour 6 cartes ou plus selon besoin -->
                    <!-- Ajouter des cartes ici selon besoin -->
                    <div class="card">
                        <img src="images_the_district/food/pizza-salmon.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Carte 1</h5>
                            <p class="card-text">Description de l'image 1.</p>
                        </div>
                    </div>
                    <!-- Répéter pour 6 cartes ou plus selon besoin -->
                    <!-- Ajouter des cartes ici selon besoin -->
                    <div class="card">
                        <img src="images_the_district/food/pizza-salmon.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Carte 1</h5>
                            <p class="card-text">Description de l'image 1.</p>
                        </div>
                    </div>
                    <!-- Répéter pour 6 cartes ou plus selon besoin -->
                    <!-- Ajouter des cartes ici selon besoin -->
                    <div class="card">
                        <img src="images_the_district/food/pizza-salmon.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Carte 1</h5>
                            <p class="card-text">Description de l'image 1.</p>
                        </div>
                    </div>
                    <!-- Répéter pour 6 cartes ou plus selon besoin -->
                    <!-- Ajouter des cartes ici selon besoin -->
                    <div class="card">
                        <img src="images_the_district/food/pizza-salmon.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Carte 1</h5>
                            <p class="card-text">Description de l'image 1.</p>
                        </div>
                    </div>
                    <!-- Répéter pour 6 cartes ou plus selon besoin -->
                    <!-- Ajouter des cartes ici selon besoin -->
                    <div class="card">
                        <img src="images_the_district/food/pizza-salmon.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Carte 1</h5>
                            <p class="card-text">Description de l'image 1.</p>
                        </div>
                    </div>
                    <!-- Répéter pour 6 cartes ou plus selon besoin -->
                </div>
            </div>
<!-- ************************************************************************** -->

            <!-- Ajouter d'autres items pour le carrousel ici -->
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Précédent</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Suivant</span>
        </button>
    </div>


    <!-- ************************************************************************************************************************************* -->








    <div class="container text-center">
        <div class="row">
          <div class="col">
            1 of 2
          </div>
          <div class="col">
            2 of 2
          </div>
        </div>



        <div class="row">
            <div class="col">
              1 of 6
            </div>
            <div class="col">
              2 of 6
            </div>
            <div class="col">
                3 of 6
              </div>
              <div class="col">
                4 of 6
              </div>
              <div class="col">
                5 of 6
              </div>
              <div class="col">
                6 of 6
              </div>
          </div>


        <div class="row">
          <div class="col">
            1 of 3
          </div>
          <div class="col">
            2 of 3
          </div>
          <div class="col">
            3 of 3
          </div>
        </div>
      </div>





















    <!-- Footer avec liens et mentions légales -->
    <footer class="bg-light text-center text-lg-start fixed-bottom">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Liens</h5>
                    <ul class="list-unstyled mb-0">
                        <li><a href="#!" class="text-dark">Site 1</a></li>
                        <li><a href="#!" class="text-dark">Site 2</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Mentions légales</h5>
                    <p>
                        Toutes les informations et données légales concernant le site.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>