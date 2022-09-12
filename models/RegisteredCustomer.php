<?php
require_once __DIR__ . "/customer.php";

class RegisteredCustomer extends Customer 
{
    public $discount;
    //potrei mettere altri attributi

    public function __construct($first_name, $last_name,$discount)
    {
        parent::__construct($first_name, $last_name,$discount);
        $this->setDiscount($discount);
    }


    //get discount
    public function getDiscount()
    {
       return $this->discount;
    }
    //set discount
    public function setDiscount($discount)

   { $this->discount = $discount;
    return $this;
 }
}
