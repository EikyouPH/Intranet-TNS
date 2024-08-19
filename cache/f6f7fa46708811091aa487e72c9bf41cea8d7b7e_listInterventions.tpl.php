<?php
/* Smarty version 5.3.1, created on 2024-08-19 09:34:55
  from 'file:listInterventions.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCached()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66c2f59fd1a3c7_26524156',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6f7fa46708811091aa487e72c9bf41cea8d7b7e' => 
    array (
      0 => 'listInterventions.tpl',
      1 => 1723224241,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
))) {
function content_66c2f59fd1a3c7_26524156 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Bastien\\Documents\\Intranet Top Net Service\\Intranet\\templates';
?><!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Listes Interventions</title>
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
        <div class="row mt-5">
            <h1>Liste des interventions</h1>
            <div class="row mb-5 mt-3">
                <div class="col-1">
                    <select name="sort" id="sort">
                        <option value="">--Trier--</option>
                        <option value="1">Date</option>
                        <option value="2">Nom</option>
                        <option value="3">Lieu</option>
                    </select>
                </div>
                <div class="col-1">
                    <select name="Type" id="type">
                        <option value="">--Type--</option>
                        <option value="1">Taille</option>
                        <option value="2">Tonte</option>
                        <option value="3">Balayage</option>
                    </select>
                </div>
                <div class="col text-end">
                    <a href="./nIntervention.php" class="btn btn-success">Nouvelle intervention</a>
                </div>
            </div>
        </div>
        <div class="row">
                            <div class="card m-2" style="width: 18rem;">
                    
                    <div class="card-body">
                        <h5 class="card-title text-primary">Taille Norma Forbach</h5>
                        <p class="card-text">Forbach,15/08/24</p>
                        <a href="#" class="btn btn-primary">Voir</a>
                        <a href="./mInterventions.php" class="btn btn-warning">Modifier</a> 
                    </div>
                </div>
                            <div class="card m-2" style="width: 18rem;">
                    
                    <div class="card-body">
                        <h5 class="card-title text-primary">Tonte KFC Feguersheim</h5>
                        <p class="card-text">Feguersheim,16/08/24</p>
                        <a href="#" class="btn btn-primary">Voir</a>
                        <a href="./mInterventions.php" class="btn btn-warning">Modifier</a> 
                    </div>
                </div>
                    </div>

    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html><?php }
}
