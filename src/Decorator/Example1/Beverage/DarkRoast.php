<?php


namespace Toheeb\DesignPatternPhp\Decorator\Example1;

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
