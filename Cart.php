<?php

if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = array();
}

if (isset($_GET["action"]) && $_GET["action"] == "Add") {

    $add_to_cart = true;
    for ($i = 0; $i < count($_SESSION["cart"]); $i++) {
        if ($_SESSION["cart"][$i]["namn"] == $_GET["namn"]) {
            //öka antal
            $_SESSION["cart"][$i]["antal"] ++;
            $add_to_cart = false;
            break;
        }
    }

    if ($add_to_cart) {
        $_SESSION["cart"][] = array("pris" => $_GET["pris"], "namn" => $_GET["namn"], "antal" => 1);
    }

//    if ($laggTill) {
//        $hamtadProd = fetchProd($prodid);
//        if (!empty($hamtadProd)) {
//            $hamtadProd["antal"] = 1;
//            array_push($_SESSION["kundvagn"], $hamtadProd);
//        }
//    }
}


$total = 0;
if (isset($_SESSION["cart"]) && !empty($_SESSION["cart"])) {

    $jsonprodukter = json_encode($_SESSION["cart"]);
    
    echo $jsonprodukter;

}else{
    echo json_encode("Kundvagnen är tom");
}