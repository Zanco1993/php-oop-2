<?php

class User
{
    protected $name;
    protected $lastName;
    protected $age;
    protected $creditCard = 'disable';
    protected $register = false;
    protected $discount = 0;

    function __construct($_name, $_lastName, $_age)
    {
        echo $this->name = $_name . '<br>';
        echo $this->lastName = $_lastName . '<br>';
        echo $this->age = $_age . '<br>';
        echo $this->creditCard . '<br>';
        echo '<hr>';
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



        return $this->discount = $discount;
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
    public function setRegister($register, $discount)
    {
        if ($register === true) {
            $this->$discount = 20;
        }
        return $this->register = $register;
    }
}


