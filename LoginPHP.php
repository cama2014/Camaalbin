<?php
session_start();
//define("DB_SERVER", "localhost");
//define("DB_EMAIL", "root");
//define("DB_PASSWORD", "");
//define("DB_NAME", "slutprojekt");

define("DB_SERVER", "10.209.1.132");
define("DB_EMAIL", "160765_ng54800");
define("DB_PASSWORD", "berzelius");
define("DB_NAME", "160765-ga-cama");

$result = null;
$dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_EMAIL, DB_PASSWORD);


if(isset($_SESSION["user"])){
if ($_SESSION["user"] != null) {

} else {
    $_SESSION["user"] = null;
}

    
}
if (isset($_POST["action"])) {
    
if ($_POST["action"] == "LOGGA IN") {
   

        $email = $_POST["email"];
        $password = $_POST["password"];

        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
        $sql = "SELECT * FROM inlogg WHERE email=:email AND password=:password";
        
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(":password", $password);
        $stmt->bindParam(":email", $email);
        $stmt->execute();
        $result = $stmt->fetch();




       if ($result != null) {

           header("location:mittkonto.php");
          $_SESSION["user"] = $_POST["email"];
     } else {

       }
}
}
?>


