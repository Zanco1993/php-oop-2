<?php


class Toy extends Product
{
    protected string $category; // adatto per taglia grande, media o piccola


    // ----------------------------------------------------------------------

    function __construct($_dbToy)
    {
        echo $this->marca = $_dbToy['marca'] . '<br>';
        echo $this->price = $_dbToy['price'] . '<br>';
        echo $this->description = $_dbToy['description'] . '<br>';
        echo $this->category = $_dbToy['category'] . '<br>';
    }
    // ----------------------------------------------------------------------

}





// istanze di giochi
$firstToy = new Toy(
    [
        'marca' => 'gioco1',
        'price' => '20',
        'description' => 'lorem',
        'category' => 'adult'
    ]
);
$secondToy = new Toy(
    [
        'marca' => 'gioco2',
        'price' => '25',
        'description' => 'lorem',
        'category' => 'small'
    ]
);
