<?php
include_once __DIR__ . "/models/product.php";
include_once __DIR__ . "/models/food.php";
include_once __DIR__ . "/models/customer.php";
include_once __DIR__ . "/models/Creditcard.php";

$cliente = new Customer ('Federico','Palozzi',true,'13/09/2022');


var_dump($cliente);

?>


<!-- mettere in maiuscolo le iniziali dei nomi delle cartelle 
creare classe carta di credito perche non puo essere messa insieme al customer
creare una classe extend di customer
creare classe ordine
creare classe carrello
-->
