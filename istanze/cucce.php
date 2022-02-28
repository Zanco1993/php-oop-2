<?php


class Cucce extends Product
{
    protected string $forma; // rotonda, quadrata ecc...

    function __construct($_marca, $_forma)
    {
        parent::__construct($_marca);
        echo $this -> marca = $_marca . '<br>';
        echo $this -> setForma($_forma) . '<br>';
        echo '<hr>';
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
$firstCuccia = new Cucce("marca Cuccia", "quadrata");
