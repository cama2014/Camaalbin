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



if (isset($_POST["action"])) {
    if ($_POST["action"] == "SPARA") {
        $namn = filter_input(INPUT_POST, 'fornamn', FILTER_SANITIZE_SPECIAL_CHARS);
        $efternamn = filter_input(INPUT_POST, 'efternamn', FILTER_SANITIZE_SPECIAL_CHARS);
        $telenummer = filter_input(INPUT_POST, 'telenummer', FILTER_SANITIZE_SPECIAL_CHARS);
        $adress = filter_input(INPUT_POST, 'adress', FILTER_SANITIZE_SPECIAL_CHARS);
        $ort = filter_input(INPUT_POST, 'ort', FILTER_SANITIZE_SPECIAL_CHARS);
        $postnummer = filter_input(INPUT_POST, 'postnummer', FILTER_SANITIZE_SPECIAL_CHARS);
        $land = filter_input(INPUT_POST, 'land', FILTER_SANITIZE_SPECIAL_CHARS);
        
        
        $sql = "UPDATE inlogg SET namn='" . $namn . "',efternamn='".$efternamn."'";
        if($telenummer != null){
            $sql .= ",telenummer='".$telenummer."'";
        }
        if($adress != null){
            $sql .= ",adress='".$adress."',ort='".$ort."',postnummer='".$postnummer."',land='".$land."' ";
        }
        $sql .="WHERE email='" . $_SESSION["user"] . "'";

        $stmt = $dbh->prepare($sql);
        $stmt->execute();

    }
}
?>

