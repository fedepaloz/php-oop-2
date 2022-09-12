<?php
class Customer
{
    public $first_name;
    public $last_name;
    
    
    
    public function __construct($first_name,$last_name,$subscription)
    {
      $this->setFirstname($first_name);
      $this->setLastname($last_name);
      
      
    }



    //get name
 public function getFirstname()
 {
    return $this->first_name;
 }
 //set name
 public function setFirstname($first_name)

   { $this->first_name = $first_name;
    return $this;
 }

 //get lastname
 public function getLastname()
 {
    return $this->first_name;
 }
    //set lastname
 public function setLastname($last_name)
 {
    $this->last_name = $last_name;
    return $this;
 }


}


?>