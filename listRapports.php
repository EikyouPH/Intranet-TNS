<?php
require ('./smartyHeader.php');
$rapports = array(
    "rapport1"=> array (
        "nom" => "Taille Norma Forbach",
        "lieu" => "Forbach",
        "date" => "15/08/24",
        "emp" => "Steeve"
    ),
    "rapport2"=> array (
        "nom" => "Tonte KFC Feguersheim",
        "lieu" => "Feguersheim",
        "date" => "16/08/24",
        "emp" => "Kévin"
    )
);

$smarty->assign('rapports',$rapports);
$smarty->display('listRapports.tpl');
?>