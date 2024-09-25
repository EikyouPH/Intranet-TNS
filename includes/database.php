<?php

$dsn = "mysql:host=localhost;dbname=intranet-tns";
$dbusername= "db_user";
$dbpassword= "ValEikyou67";

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch (PDOExecption $e) {
    echo "Connection failed: " . $e->getMessage();
}