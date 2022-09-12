<?php
class Customer
{
    public $first_name;
    public $last_name;
    public $subscription = false;
    public $credit_card_expiry;
    
    public function __construct($first_name,$last_name,$subscription,$credit_card_expiry)
    {
      $this->setFirstname($first_name);
      $this->setLastname($last_name);
      $this->setSubscription($subscription);
      $this->setCreditcardExpiry($credit_card_expiry);
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

//get Subscription
 public function getSubscription()
 {
    return $this->subscription;
 }

 //set subscription
 public function setSubscription($subscription)
 {
    $this->subscription = $subscription;
    return $this;
 }

 //get credit card expiry
 public function getCreditcardExpiry()
 {
    return $this->credit_card_expiry;
 }
 //set credit card expiry
 public function setCreditcardExpiry($credit_card_expiry)
 {
     $this->credit_card_expiry = $credit_card_expiry;
     return $this;
 }
}


?>