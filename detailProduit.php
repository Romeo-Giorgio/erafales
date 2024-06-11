<?php
include ("header.php");
?>
<?php
$idRecupere = $_REQUEST["idProduit"];

$produit = getProductById($idRecupere);
echo $produit[0]["label"];
?>

<?php
include ("footer.php");
?>