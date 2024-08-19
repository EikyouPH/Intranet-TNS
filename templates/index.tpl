<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
                        <a class="nav-link active text-primary" aria-current="page" href="./index.php">Acceuil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./listInterventions.php">Interventions</a>
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
                    <li class="nav-item text-end">
                        <a class="nav-link text-danger" href="./logout.php">Se déconnecter</a>
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
    <div class="container text-center">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="text-primary mt-5 mb-5">Intranet Top Net Service/TNS</h1>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col">
                <h3 class="text-secondary mt-5 mb-5">Bienvenue {$user}</h3>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col">
            <div class="list-group" style="width: 24rem;">
                <a href="./listInterventions.php" class="h3 list-group-item list-group-item-action text-primary">Liste des interventions</a>
                <a href="./listRapports.php" class="h3 list-group-item list-group-item-action text-primary">Liste des rapports</a>
                
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>