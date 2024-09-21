<?php

require ('./smartyHeader.php');
session_start();

if (isset($_SESSION["user_id"])){
    try {
        require_once "database.php";
        $sql = "SELECT nom_inter, date_inter, lieu_inter, nom_type, desc_inter, emp_1, emp_2, emp_3
                FROM interventions 
                INNER JOIN type_inter ON interventions.type_inter = type_inter.ID_type
                WHERE ID_inter = {$_GET["id"]}";

        $result = $pdo->query($sql);
        $intervention = $result->fetch();

        $nom = $intervention["nom_inter"];
        $date = date("d/m/Y", strtotime($intervention['date_inter']));
        $lieu = $intervention["lieu_inter"];
        $type = $intervention["nom_type"];
        $desc = $intervention["desc_inter"];
        $emp_1 = $intervention["emp_1"];
        $emp_2 = $intervention["emp_2"];
        $emp_3 = $intervention["emp_3"];    
        
        $smarty->assign('nom', $nom);
        $smarty->assign('lieu', $lieu);
        $smarty->assign('date', $date);
        $smarty->assign('type', $type);
        $smarty->assign('description', $desc);
        $smarty->assign('employe1', $emp_1);
        $smarty->assign('employe2', $emp_2);
        $smarty->assign('employe3', $emp_3);
        $smarty->display("intervention.tpl");
    
    } catch (PDOExecption $e) {
        die("Query failed: " . $e->getMessage());
    }
}
    