<?php
require ('./smartyHeader.php');

$title = 'Intranet TNS';

$smarty->assign('title',$title);

$smarty->display('index.tpl');
?>