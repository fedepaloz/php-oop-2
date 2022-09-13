<?php
include_once __DIR__ . '/models/products/FoodProduct.php';
include_once __DIR__ . '/models/products/ToyProduct.php';

$prodotto = new FoodProduct('tonno','cibo per gatti',3.50,['gatti','cani'],['tonno','cipolle'],'12-05-2023');


var_dump($prodotto);
?>