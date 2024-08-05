<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>

<title>{$title}</title>
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

</html>