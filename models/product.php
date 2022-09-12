<?php

class Product
{
    public $name;
    public $price;
    public $description;


    public function __construct($name, $price, $description)
    {
        $this->setName($name);
        $this->setPrice($price);
        $this->setDescription($description);
    }


    //get name
    public function getName()
    {
        return $this->name;
    }

    //set name
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    //get price
    public function getPrice()
    {
        return $this->price;
    }
    //set price
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    //get description 
    public function getDescription()
    {
        return $this->description;
    }
    //set description
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }
}
