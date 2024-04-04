<?php

$user = "acces_intranet";
$pass = "ValEikyou6768*.";
$db = new PDO('mysql:host=localhost;dbname=tns_intranet', $user, $pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
try {
    $query = $db->query(
        'SELECT nom_inter, date_inter, type_inter, nom_client, nom_perso, num_rue, nom_rue, code_postal, ville 
        FROM `interventions` 
        JOIN personnel ON interventions.id_perso_1 = personnel.ID_perso 
        JOIN lieux ON interventions.id_lieu = lieux.ID_lieu 
        JOIN clients ON clients.ID_client = interventions.id_client 
        WHERE id_perso_1 != 0
        ORDER BY date_inter;'
    );
    $interventions = $query->fetchAll(PDO::FETCH_OBJ);
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

?>

<!DOCTYPE html>
<html>

<head>

    <title>Intranet - Planification</title>
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
                <a href="./maintenance.php">Maintenance</a>
                <a href="contact.html">Paramètres</a>
            </div>
        </div>
    </div>
</header>

<body>

    <div class="content">
        <h2>Planification</h2>
    </div>
    <div>
        <table>
            <thead>
                <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Client</th>
                    <th scope="col">Intervention</th>
                    <th scope="col">Type</th>
                    <th scope="col">Equipe</th>
                    <th scope="col">Adresse</th>
                </tr>
            </thead>
            <?php foreach ($interventions as $interventions) : ?>
                <tbody>
                    <tr>
                        <th scope="row"><?= $interventions->date_inter ?></th>
                        <td><?= $interventions->nom_client ?></td>
                        <td><?= $interventions->nom_inter ?></td>
                        <td><?= $interventions->type_inter ?></td>
                        <td><?= $interventions->nom_perso ?></td>
                        <td><?= $interventions->num_rue . ", " .  $interventions->nom_rue . ", " .  $interventions->code_postal . " " . $interventions->ville  ?></td>
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