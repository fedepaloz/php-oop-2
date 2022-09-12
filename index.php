<?php
include_once __DIR__ . "/models/product.php";
include_once __DIR__ . "/models/food.php";
include_once __DIR__ . "/models/customer.php";
include_once __DIR__ . "/models/Creditcard.php";
include_once __DIR__ . "/models/RegisteredCustomer.php";

$customer = new Customer ('Federico','Palozzi',20);


var_dump($customer);


$cibo = new Food ('tonno',100,'tonno buono','2023-12-12','tonno e cipolla',200);

var_dump($cibo);

$cibo->getDiscount()

?>


