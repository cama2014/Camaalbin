<?php
session_start();
//if (isset($_POST["action"])) {
    
//if ($_POST["action"] == "LOGGA UT"){
    
    session_destroy();
//    $_SESSION["user"] = null;
    header("Location:index.php");
//}
//}



?>