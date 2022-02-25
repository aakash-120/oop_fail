<?php
class Cart
{
    public array $cart;

    public function __construct()
    {
        echo "cart constructor is called";
        $this->cart = array();
    }

    public function addToCart(Product $product)
    {
        if(!$this->isProductExistInCart($product))
        {
            $product->quantity = 1;
             array_push($this->cart , $product);
        }       
    }

    public function isProductExistInCart(Product $product)
    {
        foreach($this->cart as $key=>$p)
        {           
            if($p->pid == $product->pid)
            {
                $this->cart[$key]->quantity += 1;
                return true;
            }
        }
        return false;
    }

    public function getCart()
    {
        return $this->cart;
    }

    public function setCart($cartItem)
    {
       // print_r($cartItem);
       echo "set cart funtion has been set";
        $this->cart = $cartItem;
    }
}
?>