<?php include_once '..\class\product.php'; include_once '..\class\user.php';

$user = new User();
$product = new Product();

$user->addNewUser();
$product->addNewProduct();

