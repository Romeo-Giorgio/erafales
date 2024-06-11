<?php
function initPDO()
{
    try {
        $pdo = new PDO(
            'mysql:host=127.0.0.1;dbname=erafales;charset=utf8',
            'root',
            'root'
        );
        $pdo->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
        return $pdo;
    } catch (PDOException $e) {
        echo "" . $e->getMessage();
    }
}

function getAllProducts()
{
    $pdo = initPDO();

    $products = $pdo->query("select * from products");
    $products = $products->fetchAll(PDO::FETCH_ASSOC);
    return $products;
}
function getProductById($id)
{
    $pdo = initPDO();

    $products = $pdo->query("select * from products where id=$id");
    $products = $products->fetchAll(PDO::FETCH_ASSOC);
    return $products;
}