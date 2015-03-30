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

$page = $_GET["page"];
$pris = $_GET["pris"];

$limit = "10";
if($page == 1){
    $offset = "0";
}else{
    $offset = "10";
}

$sql = "SELECT * FROM produkter ";
$arr = explode(",", $_GET["marke"]);




if($arr[0] != null){

$sql .= "WHERE märke ='" . $arr[0] . "'";
if (count($arr) > 1) {
    for ($i = 1; $i < count($arr); $i++) {
        $sql .=" OR märke='" . $arr[$i] . "'";
    }
}
}
if ($pris =="1"){
    $sql .= " ORDER BY pris";
}else{
    $sql .= " ORDER BY märke";
}

    $sql .= " LIMIT ".$limit." OFFSET ".$offset."";

$stmt = $dbh->prepare($sql);
$stmt->execute();
$produkter = $stmt->fetchAll(PDO::FETCH_ASSOC);

$jsonprodukter = json_encode($produkter);
echo $jsonprodukter;

