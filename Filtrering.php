<?php

define("DB_SERVER", "localhost");
define("DB_EMAIL", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "slutprojekt");

$dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_EMAIL, DB_PASSWORD);

//if (isset($_POST["handling"])) {
//    $category = $_POST["category"];
//    $sortby = $_POST["sortby"];
//    $sortord = $_POST["sortord"];


$gender = $_GET["gender"];
$plagg = $_GET["plagg"];



$sql = "SELECT * FROM produkter ";
//    if ($category != "") {
//        $sql .= "WHERE category='$category' ";
//    }

if ($_GET["plagg"]) {
    $sql .= "WHERE plagg='$plagg' AND gender='$gender'";
}


//    if ($sortby != "") {
//        $sql .= "ORDER BY $sortby $sortord ";
//    }

$stmt = $dbh->prepare($sql);
$stmt->execute();
$produkter = $stmt->fetchAll(PDO::FETCH_ASSOC);



$jsonprodukter = json_encode($produkter);
echo $jsonprodukter;

//}
?>



