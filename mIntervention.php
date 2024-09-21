<?php
require ('./smartyHeader.php');
session_start();

if (isset($_SESSION["user_id"])){
    try {
        require_once "database.php";
        $sql = "SELECT * FROM interventions WHERE ID_inter = {$_GET["id"]}";

    $result = $pdo->query($sql);
    $intervention = $result->fetch();
    $id = $_GET["id"];
    $nom = $intervention["nom_inter"];
    $date = date("d/m/Y", strtotime($intervention['date_inter']));
    $lieu = $intervention["lieu_inter"];
    if ($intervention["type_inter"] == 1){
        $type1 = "checked";
        $smarty->assign('type1', $type1);
    }
    elseif($intervention["type_inter"] == 2){
        $type2 = "checked";
        $smarty->assign('type2', $type2);
    }
    elseif($intervention["type_inter"] == 3){
        $type2 = "checked";
        $smarty->assign('type3', $type3);
    }
    $desc = $intervention["desc_inter"];
    if($intervention["emp_1"]!=NULL){
        $check1="checked";
        $smarty->assign('check1', $check1);
    }

    if($intervention["emp_2"]!=NULL){
        $check2="checked";
        $smarty->assign('check2', $check2);
    }

    if($intervention["emp_3"]!=NULL){
        $check3="checked";
        $smarty->assign('check3', $check3);
    }

    $smarty->assign('nom', $nom);
    $smarty->assign('lieu', $lieu);
    $smarty->assign('date', $date);
    $smarty->assign('description', $desc);
    $smarty->assign('id', $id);
    $smarty->display('mInterventions.tpl');

    

    } catch (PDOExecption $e) {
        die("Query failed: " . $e->getMessage());
    }
}