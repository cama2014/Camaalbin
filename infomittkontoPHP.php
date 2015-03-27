<?php

$sql = "SELECT * FROM inlogg WHERE email='" . $_SESSION["user"] . "'";
$stmt = $dbh->prepare($sql);
$stmt->execute();
$info = $stmt->fetchAll();

$jsoninfo = json_encode($info);
echo $jsoninfo;
?>

