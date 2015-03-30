<?php

$dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_EMAIL, DB_PASSWORD);


if (isset($_POST["action"])) {
    //Registrering

    if ($_POST["action"] == "REGISTRERA DIG") {

        $regemail = $_POST["regemail"];
        $regpassword = $_POST["regpass"];

        $sql = "INSERT INTO inlogg(email, password) VALUES (:email, :password)";

        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(":password", $regpassword);
        $stmt->bindParam(":email", $regemail);
        $success = $stmt->execute();

              

        if ($success == 1) {
            $_SESSION["user"] = $_POST["regemail"];
            header("location:mittkonto.php");
        }else{
            echo "mailen redan registrerad.";
        }
            
        }
    }
    ?>

