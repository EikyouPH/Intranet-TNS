<?php

session_start();

require ('./smartyHeader.php');

if (isset($_SESSION["user_id"])){
try {
    require_once "database.php";

    $sql = "SELECT * FROM utilisateurs
            WHERE ID_user = {$_SESSION["user_id"]}";

    $result = $pdo->query($sql);


    $user = $result->fetch();
    $smarty->assign('user',$user["nom_user"]);
    $smarty->display('index.tpl');
} catch (PDOExecption $e) {
    die("Query failed: " . $e->getMessage());
}
    
    
}
else{
    header("Location: signin.php");
    exit;
} 
?>