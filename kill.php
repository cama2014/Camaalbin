<?php
session_start();
if (isset($_POST["action"])) {
    
if ($_POST["action"] == "LOGGA UT"){
    
    session_destroy(); 
    header("Location:index.php");
}
}



?>