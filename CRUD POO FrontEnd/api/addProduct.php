<?php
require_once '../manager/productsManager.php';

$product = new Product();
$product->setName($_POST["name"]);
$product->setStock($_POST["stock"]);
$product->setimage($_POST["image"]);
$product->setQuantity($_POST["Quantity"]);

$addProductManager = null;
$addProductManager =  new productsManager(); 
$addProductQuery = $addProductManager->add($product);

?>