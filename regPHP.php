<?php
if (isset($_POST["action"])) {
      //Registrering

    if ($_POST["action"] == "REGISTRERA DIG") {

        $regemail = $_POST["regemail"];
        $regpassword = $_POST["regpass"];
//            echo $regpassword;
//            echo $regusername;
        $sql = "INSERT INTO inlogg(email, password) VALUES (:email, :password)";
//        echo $sql;
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(":password", $regpassword);
        $stmt->bindParam(":email", $regemail);
        $stmt->execute();
        header("location:mittkonto.php");
    }
}
?>

