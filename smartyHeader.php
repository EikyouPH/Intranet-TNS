<?php 
require_once ('./Smarty/libs/Smarty.class.php');
$smarty = new Smarty\Smarty;
$smarty->caching=true;
$smarty->cache_lifespan=120;
?> 