<?php
/* Smarty version 5.3.1, created on 2024-08-05 18:49:40
  from 'file:navbar.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCached()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66b102a4c1cac6_15167203',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8ba835250f3ec5c9019205d67f34dcbe9dd40cf' => 
    array (
      0 => 'navbar.tpl',
      1 => 1722876579,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
))) {
function content_66b102a4c1cac6_15167203 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Bastien\\Documents\\Intranet Top Net Service\\Intranet\\templates';
?><!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<title>Intranet TNS</title>


<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">IN TNS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index.php">Acceuil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./nIntervention.php">Interventions</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Rapports
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
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
</html><?php }
}
