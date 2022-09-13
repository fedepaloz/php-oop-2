<?php

class Cart
{
    private $products = [];
    /* non scrivo il costruttore però posso comunque generare l istanza new cart, perche voglio creare un carrello che in partenza sia vuoto */


    //metodo per leggere la lista di prodotti

    public function getProductsList(){
        return $this->products;
    }

    //metodo per leggere il prezzo di tutti i prodotti nel cart

    public function getTotal(){
        $total = 0; 
        foreach($this->products as $product){
            $total += $product->getPrice();
        }
    }


}


?>