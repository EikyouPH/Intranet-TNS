<?php
require ('./includes/smartyHeader.php');

session_start();

try {
    require_once "./includes/database.php";

    $sql = "SELECT ID_inter, nom_inter, lieu_inter, date_inter, nom_type FROM interventions
            INNER JOIN type_inter ON interventions.type_inter = type_inter.ID_type";

    $result = $pdo->query($sql);
    $inters = array ();
    $rows = $pdo->query('select count(*) from interventions')->fetchColumn();
    if ($rows > 0) {
        while($row = $result->fetch()) {
            $inters[] = $row;
        }
    }
    
    //print_r($inters);
    
    foreach ($inters as $inter){
        $intervention[] = array (
            "id" => $inter['ID_inter'],
            "nom" => $inter['nom_inter'],
            "lieu" => $inter['lieu_inter'],
            "date" => date("d/m/Y", strtotime($inter['date_inter'])),
            "type" => $inter['nom_type']
        );
    }
    
    $smarty->assign('interventions',$intervention);
    $smarty->display('listInterventions.tpl');
} catch (PDOExecption $e) {
    die("Query failed: " . $e->getMessage());
}


