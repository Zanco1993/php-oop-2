<?php

class Food extends Product
{
    private string $expire; // scadenza

    function __construct($_marca, $_price, $_expire)
    {
       parent::__construct($_marca, $_price, $_expire);
       $this -> setExpire($_expire);

    }

 
    public function getExpire()
    {
        return $this->expire;

    }

 
    public function setExpire($expire)
    {
       return $this->expire = $expire;

    }
}






