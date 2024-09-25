<?php

try {
    require_once "./includes/database.php";

    $nom_inter = htmlspecialchars($_POST["nom-intervention"]);
    $lieu_inter = htmlspecialchars($_POST["lieu"]);
    $date_inter = $_POST["date"];
    $id = htmlspecialchars($_POST["id_inter"]);
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
        $emp_1 = "Kévin";
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
        $emp_2 = $emp_3;
        $emp_3 = NULL;
    }
    
    if (!$emp_1) {
        $emp_1 = $emp_2;
        $emp_2 = $emp_3;
        $emp_3 = NULL;
    }

    $query = "UPDATE interventions SET 
    nom_inter = :nom_inter , 
    date_inter = :date_inter, 
    lieu_inter = :lieu_inter, 
    type_inter = :type_inter, 
    desc_inter = :desc_inter, 
    emp_1 = :emp_1, 
    emp_2 = :emp_2, 
    emp_3 = :emp_3
    WHERE ID_inter = $id;";

    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":nom_inter", $nom_inter);
    $stmt->bindParam(":date_inter", $date_inter);
    $stmt->bindParam(":lieu_inter", $lieu_inter);
    $stmt->bindParam(":type_inter", $type_inter);
    $stmt->bindParam(":desc_inter", $desc_inter);
    $stmt->bindParam(":emp_1", $emp_1);
    $stmt->bindParam(":emp_2", $emp_2);
    $stmt->bindParam(":emp_3", $emp_3);

    $stmt->execute();
    
    $pdo = null;
    $stmt = null;

    header("Location: ./listInterventions.php");

} catch (PDOExecption $e) {
    die("Query failed: " . $e->getMessage());
}
