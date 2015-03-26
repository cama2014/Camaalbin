<?php


  if (isset($_SESSION["cart"])) {
      $total = 0;
    if (isset($_GET["action"]) && $_GET["action"] == "Add") {
        $add_to_cart = true;
        for ($i = 0; $i < count($_SESSION["cart"]); $i++) {
            if ($_SESSION["cart"][$i]["namn"] == $_GET["namn"]) {
                //öka antal
                $_SESSION["cart"][$i]["antal"] ++;
                $add_to_cart = false;
            }
        }
        if ($add_to_cart) {
            $_SESSION["cart"][] = array("pris" => $_GET["pris"], "namn" => $_GET["namn"], "antal" => 1);
        }
    }


    foreach ($_SESSION["cart"] as $kund => $cart) {
        echo "<tr>";
        echo "<form method='post'>";
        echo "<td>" . $cart["namn"] . " " . $cart["antal"] . " st " . $cart["pris"] . " kr </td>";
        echo "<td><input type='submit' name='action' value='remove'></td>";
//        echo "<input type='hidden' value='" . $cart[1] . "' name='namn'>";
//        echo "<input type='hidden' value='" . $cart[2] . "' name='pris'>";
//        echo "<input type='hidden' value='" . $cart[0] . "' name='id'>";
        
        $total += $cart["pris"]*$cart["antal"];

        echo "</form>";
        echo "</tr>";
    }

    echo "<br>"."Totalt pris: ".$total . "kr";
}
?>


