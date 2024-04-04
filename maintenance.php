<?php

$user = "acces_intranet";
$pass = "ValEikyou6768*.";
$db = new PDO('mysql:host=localhost;dbname=tns_intranet', $user, $pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
try {
    $query = $db->query(
        'SELECT date_maintenance, code_postal, ville, type_materiel, nom_materiel, intitule_maintenance, prix_maintenance 
        FROM `maintenance`
        JOIN lieux ON lieux.ID_lieu = maintenance.id_lieu
        JOIN materiel ON materiel.ID_materiel = maintenance.id_materiel 
        ORDER BY date_maintenance ;'
    );
    $maintenances = $query->fetchAll(PDO::FETCH_OBJ);
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Intranet - Maintenance</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat" type="text/css">
</head>

<header>
    <div class="container">
        <div class="main-title">
            <h1>Intranet Top Net Service</h1>
        </div>
        <div class="nav-menu">
            <div>
                <a href="./index.html">Acceuil</a>
                <a href="./planifaction.php">Planifaction</a>
                <a href="contact.html">Paramètres</a>
            </div>
        </div>
    </div>
</header>

<body>

    <div class="content">
        <h2>Maintenance</h2>
    </div>
    <div>
        <table>
            <thead>
                <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Type</th>
                    <th scope="col">Matériel</th>
                    <th scope="col">Maintenance</th>
                    <th scope="col">Adresse</th>
                </tr>
            </thead>
            <?php foreach ($maintenances as $maintenances) : ?>
                <tbody>
                    <tr>
                        <th scope="row"><?= $maintenances->date_maintenance ?></th>
                        <td><?= $maintenances->type_materiel ?></td>
                        <td><?= $maintenances->nom_materiel ?></td>
                        <td><?= $maintenances->intitule_maintenance ?></td>
                        <td><?= $maintenances->code_postal . " " . $maintenances->ville  ?></td>
                    </tr>
                </tbody>
            <?php endforeach ?>
        </table>
    </div>
    <div class="footer">
        <p>&copy; 2024 Intranet Top Net Service </p>
    </div>
    </div>
</body>

</html>