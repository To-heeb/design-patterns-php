<?php


namespace Toheeb\DesignPatternPhp\Decorator\Example1\Beverage;

use Toheeb\DesignPatternPhp\Decorator\Example1\Beverage;

class DarkRoast extends Beverage
{

    public function getDescription(): string
    {
        return "Dark Toast Coffee";
    }

    public function cost(): float
    {
        return 1.12;
    }
}
