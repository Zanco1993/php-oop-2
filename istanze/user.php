<?php

require_once __DIR__ . "/productCard.php";
require_once __DIR__ . "/creditCard.php";

class User
{
    protected $name;
    protected $lastName;
    protected $age;
    protected $creditCard = 'disable';
    protected $register = false;
    protected $discount = 20;
    protected $cart = [];
    protected $cartTotal = [];

    function __construct()
    {
        
    }
    

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of age
     */ 
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */ 
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of lastName
     */ 
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     *
     * @return  self
     */ 
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get the value of creditCard
     */ 
    public function getCreditCard()
    {
        return $this->creditCard;
    }

    /**
     * Set the value of creditCard
     *
     * @return  self
     */ 
    public function setCreditCard($creditCard)
    {
        $this->creditCard = $creditCard;

        return $this;
    }

    /**
     * Get the value of register
     */ 
    public function getRegister()
    {
        return $this->register;
    }

    /**
     * Set the value of register
     *
     * @return  self
     */ 
    public function setRegister($name, $lastName)
    {
        // se utente registrato, allora cambia il valore di $register in true e assegna i valori $name e $lastName
        $this->register = true;
        $this->setName($name);
        $this->setLastName($lastName);
    }

    /**
     * Get the value of discount
     */ 
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set the value of discount
     *
     * @return  self
     */ 
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Get the value of cart
     */ 
    public function getCart()
    {
        return $this->cart;
    }

    /**
     * Set the value of cart
     *
     * @return  self
     */ 
    public function setCart($cart)
    {
        $this->cart = $cart;

        return $this;
    }

    /**
     * Get the value of cartTotal
     */ 
    public function getCartTotal()
    {
        return $this->cartTotal;
    }

    /**
     * Set the value of cartTotal
     *
     * @return  self
     */ 
    public function setCartTotal($cartTotal)
    {
        $this->cartTotal = $cartTotal;

        return $this;
    }

    public function addCart($prodotto){
        $productCard = new ProductCard($prodotto);
        $this->cart[] = $productCard;
    }
}


