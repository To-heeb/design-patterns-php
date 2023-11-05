<?php


namespace Toheeb\DesignPatternPhp\Decorator\Example1\Beverage;

use Toheeb\DesignPatternPhp\Decorator\Example1\Beverage;

class HouseBlend extends Beverage
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
