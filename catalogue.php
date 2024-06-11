<?php
include ("header.php");
?>

<div class="row">
    <div class="column side"></div>
    <div class="column middle">
        <?php
        $products = getAllProducts();
        foreach ($products as $product) {
            ?>

        <div class="card">
            <div class='main'>
                <img class='productImage' src="<?php echo $product["picture"] ?>" alt="NFT" />
                <h2><?php echo $product["label"] ?></h2>
                <p class='description'><?php echo $product["description"] ?></p>
                <div class='productInfo'>
                    <div class="price">
                        <p><?php echo $product["price"] ?> €</p>
                    </div>
                    <form method="post" action="controller.php">
                        <input type="hidden" name="action" value="addToBasket" />
                        <input type="hidden" name="productId" value="<?php echo $product["id"]?>" />
                        <button type="submit">Ajouter au panier</button>
                    </form>

                </div>
                <hr />
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