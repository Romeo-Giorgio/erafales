<?php
include ("header.php");

$products = getProductsInBasket();
?>

<div class="row">
    <div class="column side"></div>
    <div class="column middle">

        <?php
        if (sizeof($products) > 0) { ?>
            <h1>Validez votre panier</h1>
            <?php
            $total = 0;
            foreach ($products as $product) {
                $total += $product["inBasket"] * $product["price"];
                ?>
                <div class="basketLine">
                    <div class="item">
                        <form class="form" method="post" action="controller.php">
                            <input type="hidden" name="action" value="removeFromBasket" />
                            <input type="hidden" name="productId" value="<?php echo $product["id"]; ?>" />
                            <button type="submit">Retirer du panier</button>
                        </form>
                    </div>
                    <img class="productImage" src="<?php echo $product["picture"] ?>" />
                    <div class="item">
                        <h4><?php echo $product["label"] ?></h4>
                    </div>
                    <div class="item basketCounter">
                        <form class="form" method="post" action="controller.php">
                            <input type="hidden" name="action" value="removeInBasket" />
                            <input type="hidden" name="productId" value="<?php echo $product["id"]; ?>" />
                            <input type="hidden" name="inBasket" value="<?php echo $product["inBasket"]; ?>" />
                            <button type="submit">-</button>
                        </form>
                        <input type="text" value="<?php echo $product["inBasket"]; ?>" readonly />
                        <?php
                        if ($product["stock"] > $product["inBasket"]) {
                            ?>
                            <form class="form" method="post" action="controller.php">
                                <input type="hidden" name="action" value="addInBasket" />
                                <input type="hidden" name="productId" value="<?php echo $product["id"]; ?>" />
                                <input type="hidden" name="inBasket" value="<?php echo $product["inBasket"]; ?>" />
                                <button type="submit">+</button>
                            </form>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="item">
                        <h4><?php echo $product["inBasket"] ?> x <?php echo $product["price"] ?> € =
                            <?php echo $product["inBasket"] * $product["price"] ?> €
                        </h4>
                    </div>


                </div>
                <?php
            }
            ?>
            <div class="basketLine">

                <div class="item">
                    <h4>TOTAL : <?php echo $total ?> €</h4>
                </div>
                <form method="post" action="controller.php">
                    <input type="hidden" name="action" value="validateCommand" />
                    <button type="submit">Valider la commande</button>
                </form>
                <?php
        } else {
            ?>
                <h1>Pas de produits dans le panier</h1>
                <?php
        }
        ?>

        </div>
        <div class="column side"></div>
    </div>
    <div class="column side"></div>
    <?php
    include ("footer.php");
    ?>