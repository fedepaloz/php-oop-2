<?php
class Creditcard
{
    public $number;
    public $expiry;

    public function __construct($number,$expiry)
    {
        $this->setNumber($number);
        $this->setExpiry($expiry);
    }

    //get number
 public function getNumber()
 {
    return $this->number;
 }
 //set number
 public function setNumber($number)

   { $this->number = $number;
    return $this;
 }

 //get expiry 
 public function getExpiry($expiry)
 {
    return $this->expiry;
 }
 
 public function setExpiry($expiry)

   { $this->expiry = $expiry;
    return $this;
 }



}



?>