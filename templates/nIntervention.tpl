<!DOCTYPE html>
<html>
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="./index.php">IN TNS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="./index.php">Acceuil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-primary" href="./listInterventions.php">Interventions</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Rapports
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="./listRapports.php">Liste des rapports"></a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
      <!--
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="..." aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Rechercher</button>
      </form>
      -->
    </div>
  </div>
</nav>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="mt-5 mb-3 text-primary">Nouvelle intervention</h1>
                    <form action="new_inter.php" method="post">
                        <label for="nom" class="form-label">Nom de l'intervention</label>
                        <input required type="text" class="form-control" id="nom-intervention" name="nom-intervention" required style="width: 26rem;">
                        <label for="date" class="form-label">Date</label>
                        <input required type="date" id="date" name="date" required class="form-control" style="width: 18rem;">

                        <label for="lieu" class="form-label">Entrer le lieu</label>
                        <input required type="text" class="form-control" name="lieu" id="lieu" required placeholder="Ville" style="width: 18rem;">

                        </select>

                        <fieldset>
                            <legend>Type d'intervention</legend>
                            <label for="type" class="form-label">
                                <input type="radio" name="type" value="1">
                                Taille
                            </label>

                            <label for="type" class="form-label">
                                <input type="radio" name="type" value="2">
                                Tonte
                            </label>
                            <label for="type" class="form-label">
                                <input type="radio" name="type" value="3">
                                Balayage
                            </label>
                        </fieldset>
                        <label class="form-label" for="description">Description</label>
                        <textarea required id="description" name="description" class="form-control"></textarea>
                        <fieldset>
                            <legend>Employé(s) assigné(s)</legend>

                            <label class="form-label">
                                <input type="checkbox" name="employe_1" id="employe_1" class="form-label">
                                Kévin
                            </label><br>
                            <label class="form-label">
                                <input type="checkbox" name="employe_2" id="employe_2" class="form-label">
                                Maxime
                            </label><br>
                            <label class="form-label">
                                <input type="checkbox" name="employe_3" id="employe_3" class="form-label">
                                Steeve
                            </label><br>
                        </fieldset>

                        <br>
                        <a class="btn btn-danger" href="./listInterventions.php">Annuler</a> 
                        <input type="submit" value="Créer" class="btn btn-success">
                    </form>
                </div>
            </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>