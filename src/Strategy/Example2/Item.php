<?php


namespace Toheeb\DesignPatternPhp\Strategy\Example2;


class Item
{
    private $name;
    private $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getprice()
    {
        return $this->price;
    }
}
