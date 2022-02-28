<?php


class Cucce extends Product
{
    protected string $forma; // rotonda, quadrata ecc...

    function __construct($_dbCucce)
    {
        echo $this->marca = $_dbCucce['marca'] . '<br>';
        echo $this->price = $_dbCucce['price'] . '<br>';
        echo $this->description = $_dbCucce['description'] . '<br>';
        echo $this->category = $_dbCucce['forma'] . '<br>';
    }
}

// istanze di cucce
$firstCuccia = new Cucce(
    [
        'marca' => 'cuccia1',
        'price' => '20',
        'description' => 'lorem',
        'forma' => 'circolare'
    ]
);
$secondCuccia = new Cucce(
    [
        'marca' => 'cuccia2',
        'price' => '25',
        'description' => 'lorem',
        'forma' => 'quadrata'
    ]
);
