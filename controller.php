<?php
require_once ("bdd/bdd.php");

$action = isset($_POST["action"]) ? $_POST["action"] : "";
switch ($action) {
    case 'addToBasket':
        $productId = $_POST["productId"];
        addProductToBasket($productId);
        header("Location: catalogue.php");
        break;

    default:
        echo "default";
        break;
}