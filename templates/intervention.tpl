<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>{$nom}</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.php">IN TNS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
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
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Rapports
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="./listRapports.php">Listes des rapports</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
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
    <div class="container">
        <div class="row mb-3 mt-3">
            <h1 class="text-primary border-bottom border-primary">{$nom}</h1>
        </div>
        <div class="row mb-3">
            <h4 class="text-secondary">{$lieu}, {$date}, Equipe : {$employe1} {$employe2}</h3>
        </div>
        <div class="row">
            <h4 class="text-black">Type : {$type}</h4>
        </div>
        <div class="row mb-5 mt-5">
            <p class="h3 border border-primary rounded p-3">Description : {$description}</p>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</html>