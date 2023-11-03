<?php


namespace Toheeb\DesignPatternPhp\Decorator\Example1;

class Espresso extends Beverage
{

    public function getDescription(): string
    {
        return "House Blend Coffee";
    }

    public function cost(): float
    {
        return 0.89;
    }
}
