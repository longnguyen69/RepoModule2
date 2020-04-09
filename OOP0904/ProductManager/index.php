<?php
include_once "model/product.php";
include_once "services/ProductManager.php";

use services\ProductManager;
use model\Product;

$productManager = new ProductManager();
$productManager->add(new Product("Laptop"));
$productManager->add(new Product("Mobile"));

$products = $productManager->getProducts();
foreach ($products as $product) {
    echo $product->getName() ."<br/>";
}