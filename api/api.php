<?php


$product1["name"] = "1 month";
$product1["interest"] = "0.8";

$product2["name"] = "2 months";
$product2["interest"] = "0.9";

$product3["name"] = "3 months";
$product3["interest"] = "1.0";


$response = array($product1, $product2, $product3);


header('Content-type: application/json');
echo json_encode($response);
?>