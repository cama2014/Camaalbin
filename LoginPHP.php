<?php
session_start();
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "slutprojekt");
$result = null;

$dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);


if ($_SESSION["user"] != null) {
    echo 'Du är inloggad. ';
} else {
    $_SESSION["user"] = null;
}
if (isset($_POST["action"])) {
    
if ($_POST["action"] == "login") {
    echo 'Hej';
//        var_dump($_POST);
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
//        var_dump($result);



       if ($result != null) {
           echo 'Du loggades in!';
          $_SESSION["user"] = $_POST["username"];
     } else {
         echo 'inlogg misslyckad';
       }
}
}
?>


