<?php

require ('./smartyHeader.php');
try {
    require_once "database.php";

    $sql = "DELETE FROM interventions WHERE ID_inter = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $_GET['id']]);
    header('Location: ./listInterventions.php');
    
} catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
}
