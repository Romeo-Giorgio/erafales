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
                    <p class='description'>Description</p>
                    <div class='productInfo'>
                        <div class="price">
                            <p><?php echo $product["price"] ?> €</p>
                        </div>
                        <form method="post">
                            <button type="submit"></button>
                        </form>
                        <a href="detailProduit.php?idProduit=<?php echo $product["id"] ?>">Détail</a>
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