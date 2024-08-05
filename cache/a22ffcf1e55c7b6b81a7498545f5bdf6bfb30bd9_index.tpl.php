<?php
/* Smarty version 5.3.1, created on 2024-08-05 18:10:04
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCached()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66b0f95c8587f5_45908226',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a22ffcf1e55c7b6b81a7498545f5bdf6bfb30bd9' => 
    array (
      0 => 'index.tpl',
      1 => 1722872277,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
))) {
function content_66b0f95c8587f5_45908226 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Bastien\\Documents\\Intranet Top Net Service\\Intranet\\templates';
?><!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>

<title>Intranet TNS</title>
</head>

<body>
    <h1>Nouvelle intervention</h1>
    <div>


        <form action="process-form.php" method="post">
            <label for="nom">Nom de l'intervention</label>
            <input type="text" id="nom" name="nom-intervention" required>
            <label for="date">Date</label>
            <input type="date" id="date" name="date" required>

            <label for="list-lieu">Choisir un lieu</label>
            <select name="lieu" id="list-lieux">
                <option value="0">Choisir un lieu</option>

            </select>

            <fieldset>
                <legend>Type d'intervetion</legend>
                <label for="type">
                    <input type="radio" name="type" value="1" checked>
                    Taille
                </label>

                <label for="type">
                    <input type="radio" name="type" value="2">
                    Tonte
                </label>
            </fieldset>

            <fieldset>
                <legend>Employés assignés</legend>

                <label>
                    <input type="checkbox" name="employe_1">
                    Maxime
                </label>
                <label>
                    <input type="checkbox" name="employe_2">
                    Steeve
                </label>
                <label>
                    <input type="checkbox" name="employe_3">
                    Kévin
                </label>
            </fieldset>

            <br>

            <button>Créer</button>
        </form>
    </div>

</body>

</html><?php }
}
