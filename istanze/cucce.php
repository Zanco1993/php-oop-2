<?php


class Cucce extends Product
{
    protected string $forma; // rotonda, quadrata ecc...

    function __construct($_marca, $_price, $_forma)
    {
        parent::__construct($_marca,$_price, $_forma);
        $this->setForma($_forma);

    }

    /**
     * Get the value of forma
     */ 
    public function getForma()
    {
        return $this->forma;
    }

    /**
     * Set the value of forma
     *
     * @return  self
     */ 
    public function setForma($forma)
    {
        if(!in_array($forma, ['quadrata', 'circolare', 'ovale'])) {
            return "DATO NON VALIDO";
        }
        return $this->forma = $forma;
    }
}

// istanze di cucce

