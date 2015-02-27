<?php
  if ($_POST["action"] == "add") {
        $add_to_cart = true;
        for ($i = 0; $i < count($_SESSION["cart"]); $i++) {
            if ($_SESSION["cart"][$i]["id"] == $_POST["id"]) {
                //öka antal
                $_SESSION["cart"][$i]["antal"] ++;
                $add_to_cart = false;
            }
        }
        if ($add_to_cart) {
            $_SESSION["cart"][] = array("id" => $_POST["id"], "pris" => $_POST["pris"], "namn" => $_POST["namn"], "antal" => 1);
        }
    }
?>


