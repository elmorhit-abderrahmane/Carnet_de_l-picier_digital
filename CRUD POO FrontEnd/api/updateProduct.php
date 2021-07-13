<?php
require_once '../manager/productsManager.php';

$product = new Product;
$product->setId($_POST["id"]);
$product->setname($_POST["name"]);
$product->setstock($_POST["stock"]);
$product->setimage($_POST["image"]);
$product->setQuantity($_POST["Quantity"]);

$updateProductsManager = null;
$updateProductManager =  new productsManager(); 
$updateProductQuery = $updateProductManager->update($product);
?>