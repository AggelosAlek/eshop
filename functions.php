<?php

require('database/DBController.php');

require('database/products.php');

require('database/cart.php');

$db=new DBController();

$product = new Products($db);
$product_shuffle = $product->getData();


$Cart = new Cart($db);

