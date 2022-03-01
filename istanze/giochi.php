<?php

require_once __DIR__ . '/product.php';

class Toy extends Product
{
    protected string $category; // adatto per taglia grande, media o piccola


    function __construct($_marca, $_price, $_category)
    {
        parent::__construct($_marca, $_price, $_category);
        $this->setCategory($_category);
    }

    
    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
        if (!in_array($category, ["small", "medium", "adult"])) {
            return "DATO NON VALIDO";
        }
        return $this->category = $category;
    }
}







