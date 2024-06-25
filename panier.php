<?php
include ("header.php");

$products = getProductsInBasket();
?>

<div class="row">
    <div class="column side"></div>
    <div class="column middle">
        <h1>Validez votre panier</h1>

        <?php
        foreach ($products as $product) {
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
                    <form class="form" method="post" action="controller.php">
                        <input type="hidden" name="action" value="addInBasket" />
                        <input type="hidden" name="productId" value="<?php echo $product["id"]; ?>" />
                        <input type="hidden" name="inBasket" value="<?php echo $product["inBasket"]; ?>" />
                        <button type="submit">+</button>
                    </form>
                </div>



            </div>
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