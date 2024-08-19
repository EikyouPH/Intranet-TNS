<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $nom_inter = htmlspecialchars($_POST["nom-intervention"]);
    $lieu_inter = htmlspecialchars($_POST["lieu"]);
    $date_inter = $_POST["date"];
    $type_inter = filter_input(INPUT_POST, "type", FILTER_VALIDATE_INT);
    $desc_inter = htmlspecialchars($_POST["description"]);
    $emp_1 = filter_input(INPUT_POST, "employe_1", FILTER_VALIDATE_BOOL);

    $emp_2 = filter_input(INPUT_POST, "employe_2", FILTER_VALIDATE_BOOL);

    $emp_3 = filter_input(INPUT_POST, "employe_3", FILTER_VALIDATE_BOOL);

    if (empty($nom_inter)){
        header("Location: ../index.php");
    }

    if (empty($lieu_inter)){
        header("Location: ../index.php");
    }

    if (empty($date_inter)){
        header("Location: ../index.php");
    }

    if (empty($desc_inter)){
        header("Location: ../index.php");
    }

    if (!$emp_1 and !$emp_2 and !$emp_3) {
        die("Vous devez sélectionner au moins un employé");
    }
    
    if ($emp_1) {
        $emp_1 = "Kevin";
    }
    if ($emp_2) {
        $emp_2 = "Maxime";
    }
    if ($emp_3) {
        $emp_3 = "Steeve";
    }
    
    if (!$emp_1 and !$emp_2) {
        $emp_1 = $emp_3;
        $emp_2 = NULL;
        $emp_3 = NULL;
    }
    
    if (!$emp_2) {
        $emp_2 = $employe_3;
        $emp_3 = NULL;
    }
    
    if (!$emp_1) {
        $emp_1 = $emp_2;
        $emp_2 = $emp_3;
        $emp_3 = NULL;
    }
    
    try {
        require_once "database.php";

        $query = "INSERT INTO interventions (nom_inter, date_inter, lieu_inter, type_inter, desc_inter, emp_1, emp_2, emp_3) VALUES (?,?,?,?,?,?,?,?);";

        $stmt = $pdo->prepare($query);

        $stmt->execute([$nom_inter, $date_inter, $lieu_inter, $type_inter, $desc_inter, $emp_1, $emp_2, $emp_3]);

        $pdo = null;
        $stmt = null;
        
        header("Location: listInterventions.php");
        die();
    } catch (PDOExecption $e) {
        die("Query failed: " . $e->getMessage());
    }
}else{
    header(Location: "./listInterventions.php");
}





