<?php

$user = "acces_intranet";
$pass = "ValEikyou6768*.";
$db = new PDO('mysql:host=localhost;dbname=tns_intranet', $user, $pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
try {
    $ville = $db->query('SELECT ville FROM lieux');
    $villes = $ville->fetchAll(PDO::FETCH_OBJ);
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Création d'une intervention</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat" type="text/css">

    <header>
        <div class="container">
            <div class="main-title">
                <h1>Création d'une nouvelle intervention</h1>
            </div>
            <div class="nav-menu">
                <div>
                    <a href="./planifaction.php">Annuler</a>
                </div>
    </header>

<body>
    <main>
        <form action="include/formhandler.php" method="post">
            <div class="form-group">
                <label for="intervention">Titre de l'intervention</label>
                <input type="text" id="intervention" name="intervention" placeholder="Titre de l'intervention" required>

                <label for="date">Date</label>
                <input type="date" id="date" name="date" required>

                <label for="ville">Ville de l'intervention</label>
                <select id="ville" name="ville" required>
                    <option value="">Sélectionner une ville</option>
                    <?php foreach ($villes as $ville) : ?>
                        <option value="<?= $ville->ville ?>"><?= $ville->ville ?></option>
                    <?php endforeach; ?>
                </select>

</body>
</head>