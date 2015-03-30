<?php

//define("DB_SERVER", "localhost");
//define("DB_EMAIL", "root");
//define("DB_PASSWORD", "");
//define("DB_NAME", "slutprojekt");

define("DB_SERVER", "10.209.1.132");
define("DB_EMAIL", "160765_ng54800");
define("DB_PASSWORD", "berzelius");
define("DB_NAME", "160765-ga-cama");


$dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_EMAIL, DB_PASSWORD);


$sql = "SELECT * FROM produkter";

$stmt = $dbh->prepare($sql);
$stmt->execute();
$produkter = $stmt->fetchAll(PDO::FETCH_ASSOC);


$jsonprodukter = json_encode($produkter);
echo $jsonprodukter;
?>


