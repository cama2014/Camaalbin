<?php

//define("DB_SERVER", "localhost");
//define("DB_EMAIL", "root");
//define("DB_PASSWORD", "");
//define("DB_NAME", "slutprojekt");
//
//$dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_EMAIL, DB_PASSWORD);



if (isset($_POST["action"])) {
    if ($_POST["action"] == "SPARA") {
        $password = $_POST["losenord"];
        $namn = $_POST["fornamn"];
        $efternamn = $_POST["efternamn"];
        $telenummer = $_POST["telenummer"];
        $sql = "INSERT INTO inlogg(password, namn, efternamn, telenummer) VALUES $password, $namn, $efternamn, $telenummer";
        echo $sql;
        $stmt = $dbh->prepare($sql);
        $stmt->execute();
//        $info = $stmt->fetchAll();
    }
}
?>

