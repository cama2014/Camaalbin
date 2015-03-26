<?php

define("DB_SERVER", "localhost");
define("DB_EMAIL", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "slutprojekt");

$dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_EMAIL, DB_PASSWORD);



$sql = "SELECT * FROM produkter ";
$arr = explode(",", $_GET["marke"]);
$sql .= "WHERE märke ='" . $arr[0] . "'";
if (count($arr) > 1) {
    for ($i = 1; $i < count($arr); $i++) {
        $sql .=" OR märke='" . $arr[$i] . "'";
    }
}
//echo $sql;
//    var_dump($arr);
$stmt = $dbh->prepare($sql);
$stmt->execute();
$produkter = $stmt->fetchAll(PDO::FETCH_ASSOC);

$jsonprodukter = json_encode($produkter);
echo $jsonprodukter;

