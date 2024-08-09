<?php
require ('./smartyHeader.php');

$interventions = array(
    "intervention1"=> array (
        "nom" => "Taille Norma Forbach",
        "lieu" => "Forbach",
        "date" => "15/08/24"
    ),
    "intervention2"=> array (
        "nom" => "Tonte KFC Feguersheim",
        "lieu" => "Feguersheim",
        "date" => "16/08/24"
    )
);

$smarty->assign('interventions',$interventions);
$smarty->display('listInterventions.tpl')
?>