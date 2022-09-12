<?php
require_once __DIR__ . '/product.php';
class Food extends Product
{
    public $expiry;
    public $ingredients;
    public $weight;

public function __construct($name,$price,$description,$expiry,$ingredients,$weight)
{
    parent::__construct($name,$price,$description);
    $this->setExpiry($expiry);
    $this->setIngredients($ingredients);
    $this->setWeight($weight);
}

//get expiry
public function getExpiry()
{
    return $this->expiry;
}
//set expiry 
public function setExpiry($expiry)
{
    $this->expiry = $expiry;
    return $this;
}
//get ingredients
public function getIngredients()
{
    return $this->ingredients;
}
//set ingredients
public function setIngredients($ingredients)
{
    $this->ingredients = $ingredients;
    return $this;
}
//get weight 
public function getWeight()
{
    return $this->weight;
}
//set weight
public function setWeight($weight)
{
    $this->weight = $weight;
    return $this;
}

}



?>