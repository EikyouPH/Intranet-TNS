<?php

$is_invalid = false;
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    require_once "database.php";
    $user = $_POST["nom"];
    $stmt = $pdo->prepare("SELECT * from utilisateurs WHERE nom_user = ?");
    $stmt -> execute(array($user));

    $user = $stmt-> fetch();

    if ($user) {
        
        if(password_verify($_POST["password"], $user["hash_user"])) {
            session_start();

            session_regenerate_id();
            $_SESSION["user_id"] = $user["ID_user"];
            header("Location: index.php");
            exit;
        }
    }

    $is_invalid = true;
} 

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Connexion</title>
</head>
<body>
    <div class="container">
        <div class="row text-center mt-5">
            <h1>Intranet TNS - Connexion</h1>
        </div>
        
        <div class="row text-center">
            <form method="post">
                <label for="nom" class="form-label"> Nom
                    <input type="text" class="form-control" id="nom" name="nom" value="<?= htmlspecialchars($_POST["nom"] ?? "") ?>">
                </label>
                <br> 
                <label for="mdp" class="form-label"> Mot de passe
                    <input type="password" class="form-control" id="password" name="password">
                </label>
                <br>
                <?php if ($is_invalid): ?>
                    <em>Identifiants invalides</em><br>
                <?php endif; ?>
                <button class="btn btn-primary">Se connecter</button>
            </form>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</html>