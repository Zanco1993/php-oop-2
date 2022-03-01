<?php

class ProductCard {
  private $quantita = 1;
  private $prezzoTotale = 0;
  private $prodotto;
  
  public function __construct($_prodotto, $_quantita = 1) {
    $this->setProdotto($_prodotto);
    $this->setQuantita($_quantita);
    
  }
  
 
  public function getQuantita() {
    return $this->quantita;
  }
  
  
  
  public function setQuantita(int $quantita) {
    $this->quantita = $quantita;
    $this->prezzoTotale = $this->quantita * $this->getProdotto()->getPrice();
  }
  

  public function incrementaQuantita(int $quantita = 1) {
    $this->setQuantita($this->getQuantita() + $quantita);
  }
  
 
  public function getProdotto() {
    return $this->prodotto;
  }
  

  public function setProdotto($prodotto) {
    $this->prodotto = $prodotto;
  }
  

  public function getPrezzoTotale() {
    return $this->prezzoTotale;
  }
}
