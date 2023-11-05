<?php


namespace Toheeb\DesignPatternPhp\Decorator\Example1\Beverage;

use Toheeb\DesignPatternPhp\Decorator\Example1\Beverage;

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
