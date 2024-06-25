<?php
require_once ("bdd/bdd.php");

$action = isset($_POST["action"]) ? $_POST["action"] : "";
switch ($action) {
    case 'addToBasket':
        $productId = $_POST["productId"];
        addProductToBasket($productId);
        header("Location: catalogue.php");
        break;
    case "removeFromBasket":
        $productId = $_POST["productId"];
        removeFromBasket($productId);
        header("Location: panier.php");
        break;
    case "removeInBasket":
        $productId = $_POST["productId"];
        $inBasket = $_POST["inBasket"];
        if ($inBasket > 0)
            updateInBasket($productId, $inBasket - 1);
        header("Location: panier.php");
        break;
    case "addInBasket":
        $productId = $_POST["productId"];
        $inBasket = $_POST["inBasket"];
        updateInBasket($productId, $inBasket + 1);
        header("Location: panier.php");
        break;
    default:
        echo "default";
        break;
}