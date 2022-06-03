<?php
// require MySQL Connection
require ('../database/DBController.php');

// require Product Class
require ('../database/products.php');

// DBController object
$db = new DBController();

// Product object
$product = new Products($db);

if (isset($_POST['itemid'])){
    $result = $product->getProduct($_POST['itemid']);
    echo json_encode($result);
}


?>
