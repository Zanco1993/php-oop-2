<?php

class Food extends Product
{
    protected string $expire; // scadenza

    function __construct($_dbFood)
    {
       echo $this -> marca = $_dbFood['marca'] . '<br>';
       echo $this -> price = $_dbFood['price'] . '<br>';
       echo $this -> description = $_dbFood['description'] . '<br>';
       echo $this -> expire = $_dbFood['expire'] . '<br>';

    }
}


// istanze di food
$firstFood = new Food(
    [
        'marca' => 'trainer',
        'price' => '10',
        'description' => 'lorem',
        'expire' => '2023/01/01'
    ]
    );
$secondFood = new Food(
    [
        'marca' => 'virtus',
        'price' => '15',
        'description' => 'lorem',
        'expire' => '2023/05/01'
    ]
    );


