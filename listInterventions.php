<?php
require ('./smartyHeader.php');

session_start();

try {
    require_once "database.php";

    $sql = "SELECT * FROM interventions";

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
            "date" => date("d/m/Y", strtotime($inter['date_inter']))
        );
    }
    
    $smarty->assign('interventions',$intervention);
    $smarty->display('listInterventions.tpl');
} catch (PDOExecption $e) {
    die("Query failed: " . $e->getMessage());
}


