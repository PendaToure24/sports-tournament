<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #542E54;">
  <div class="container-fluid">
    <a class="navbar-brand" href="./accueil.php">
        <img src="../images/logo_pl.jpg" width="60" height="60" class="d-inline-block align-text-top" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style="color: white;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Match
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="max-height: 300px; overflow-y: auto;">
            <?php for($i=1; $i<=38; $i++){?>
                <li><a class="dropdown-item" href="./match.php?j=<?=$i?>">journée <?=$i;} ?></a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style="color: white;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Equipe
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="./manager.php">Coachs</a></li>
            <li><a class="dropdown-item" href="./composition.php">Joueurs</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style="color: white;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Statistiques
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="./classement.php">Classement</a></li>
            <li><a class="dropdown-item" href="./butteur.php">Buts</a></li>
            <li><a class="dropdown-item" href="./passeur.php">Passes</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="./stade.php">Stades</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style="color: white;"  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Resultats
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="max-height: 300px; overflow-y: auto;">
            <?php for($i=1; $i<=38; $i++){?>
                <li><a class="dropdown-item" href="./resultat.php?j=<?=$i?>">journée <?=$i;} ?></a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" method="GET" action="resultat.php">
        <input class="form-control me-2" type="number" placeholder="Resulats" aria-label="Search" name="j">
        <button class="btn btn-outline-success" type="submit">Rechercher</button>
      </form>
    </div>
  </div>
</nav>