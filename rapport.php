<?php

require ('./includes/smartyHeader.php');
session_start();

if (isset($_SESSION["user_id"])){
    try {
        require_once "./includes/database.php";
        $sql = "SELECT auteur, nom_rapport, date_rapport, text_rapport, lieu_inter, nom_type, date_inter
                FROM rapports 
                INNER JOIN interventions ON rapports.id_inter = interventions.ID_inter
                INNER JOIN type_inter ON interventions.type_inter = type_inter.ID_type
                WHERE ID_rapport = {$_GET["id"]}";

        $result = $pdo->query($sql);
        $rapport = $result->fetch();

        $auteur = $rapport["auteur"];
        $nom = $rapport["nom_rapport"];
        $date_inter = date("d/m/Y", strtotime($rapport['date_inter']));
        $date_rapport = date("d/m/Y H:i:s", strtotime($rapport['date_rapport']));
        $lieu = $rapport["lieu_inter"];
        $type = $rapport["nom_type"];
        $desc = $rapport["text_rapport"];
        
        $smarty->assign('auteur', $auteur);
        $smarty->assign('nom', $nom);
        $smarty->assign('lieu', $lieu);
        $smarty->assign('date_rapport', $date_rapport);
        $smarty->assign('date_inter', $date_inter);
        $smarty->assign('type', $type);
        $smarty->assign('description', $desc);
        $smarty->display("rapport.tpl");
    
    } catch (PDOExecption $e) {
        die("Query failed: " . $e->getMessage());
    }
}
    