<?php

$dsn = "mysql:host=localhost;dbname=lhcreatives";
$dbusername = "root";
$dbpass = "";

try {
    $pdo = new PDO($dsn, $dbusername, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection Failed:" . $e->getMessage();
}
