<?php

define("DB_SERVER", "localhost");
define("DB_EMAIL", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "slutprojekt");
$result = null;

$dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_EMAIL, DB_PASSWORD);


$sql = "SELECT * FROM produkter";

$stmt = $dbh->prepare($sql);
$stmt->execute();
$produkter = $stmt->fetchAll(PDO::FETCH_ASSOC);


$jsonprodukter = json_encode($produkter);
echo $jsonprodukter;
?>


