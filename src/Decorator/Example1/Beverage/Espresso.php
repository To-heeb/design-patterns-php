<?php


namespace Toheeb\DesignPatternPhp\Decorator\Example1;

class Espresso extends Beverage
{

    public function getDescription(): string
    {
        return "Espresso";
    }

    public function cost(): float
    {
        return 1.99;
    }
}
