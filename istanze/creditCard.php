<?php

class CreditCard {
    private string $number;
    private string $cvv;
    private DateTime $scadenza;
    private string $utente;

    public function __construct($_number, $_cvv, $_scadenza, $_utente) 
    {
        $this->setNumber($_number);
        $this->setNumber($_cvv);
        $this->setNumber($_scadenza);
        $this->setNumber($_utente);
    }

    /**
     * Get the value of number
     */ 
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set the value of number
     *
     * @return  self
     */ 
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get the value of cvv
     */ 
    public function getCvv()
    {
        return $this->cvv;
    }

    /**
     * Set the value of cvv
     *
     * @return  self
     */ 
    public function setCvv($cvv)
    {
        $this->cvv = $cvv;

        return $this;
    }

    /**
     * Get the value of scadenza
     */ 
    public function getScadenza()
    {
        return $this->scadenza;
    }

    /**
     * Set the value of scadenza
     *
     * @return  self
     */ 
    public function setScadenza($scadenza)
    {
        $this->scadenza = $scadenza;

        return $this;
    }

    /**
     * Get the value of utente
     */ 
    public function getUtente()
    {
        return $this->utente;
    }

    /**
     * Set the value of utente
     *
     * @return  self
     */ 
    public function setUtente($utente)
    {
        $this->utente = $utente;

        return $this;
    }
}