<?php


$product1["value"] = 1;
$product1["name"] = "1 Month";
$product1["interest"] = "0.8";

$product2["value"] = 2;
$product2["name"] = "2 Months";
$product2["interest"] = "0.9";

$product3["value"] = 3;
$product3["name"] = "3 Months";
$product3["interest"] = "1.0";


$response = array($product1, $product2, $product3);


header('Content-type: application/json');
echo json_encode($response);

?>
