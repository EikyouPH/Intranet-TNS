<?php

require ('./includes/smartyHeader.php');
session_start();
if (isset($_SESSION["user_id"])){
    try {
        require_once "./includes/database.php";

        $sql = "SELECT ID_rapport, nom_rapport, date_rapport, auteur, nom_inter, date_inter, nom_type, lieu_inter FROM rapports INNER JOIN interventions ON rapports.id_inter = interventions.ID_inter INNER JOIN type_inter ON interventions.type_inter = type_inter.ID_type";

        $result = $pdo->query($sql);
        $rapports = array ();
        $rows = $pdo->query('select count(*) from rapports')->fetchColumn();
        if ($rows > 0) {
            while($row = $result->fetch()) {
                $rapports[] = $row;
            }
        }
        
        //print_r($inters);
        
        foreach ($rapports as $rapport){
            $rpt[] = array (
                "id" => $rapport['ID_rapport'],
                "auteur" => $rapport['auteur'],
                "nom" => $rapport['nom_rapport'],
                "date_rapport" => date("d/m/Y H:i:s", strtotime($rapport['date_rapport'])),
                "nom_inter" => $rapport['nom_inter'],
                "lieu" => $rapport['lieu_inter'],
                "type" => $rapport['nom_type'],
                "date_inter" => date("d/m/Y", strtotime($rapport['date_rapport'])),
            );
        }
        
        $smarty->assign('rapports',$rpt);
        $smarty->display('listRapports.tpl');
    } catch (PDOExecption $e) {
        die("Query failed: " . $e->getMessage());
    }
}