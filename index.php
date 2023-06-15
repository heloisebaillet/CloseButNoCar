<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <link rel="icon" href="/public/favico.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Close But No Car</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
</head>

<body>

  <div class="container-fluid bkgBrown">
    <!-- Menu -->
    <div class="row">
      <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
        </a>
        <a class="navbar-brand" href="#">
          <img src="./public/favico.png" width="30" height="30" alt="">
        </a>
        <a class="navbar-brand" href="#">Close But No Car</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav px-3">
            <li class="nav-item active activeGradient">
              <a class="nav-link" href="#">Enchères <span class="sr-only">(ici)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#">Enchères Terminées</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Mon Profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Mes Contributions</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Mes Annonces</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#">Login</a>
            </li>

          </ul>
        </div>
      </nav>
    </div>

    <!-- Body de l'index -->
    <div class="row">
      <!-- Colonne de gauche -->
      <div class="col-2">
      </div>
      <!-- Colonne de droite -->
      <div class="col-10">
        <div class="row">
          <p class="colorWhite d-flex justify-content-center">Enchères Actives</p>
        </div>
        <!-- Content Cards -->
        <div class="bkgImg row">
        </div>

      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <footer class="fixed-bottom bg-dark d-flex justify-content-center colorWhite">
    <p>Copyright CBNC</p>
  </footer>
</body>

</html>