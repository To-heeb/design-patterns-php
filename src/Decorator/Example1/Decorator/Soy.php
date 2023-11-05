<?php

namespace Toheeb\DesignPatternPhp\Decorator\Example1\Decorator;

use Toheeb\DesignPatternPhp\Decorator\Example1\Beverage;


/**
 * Class Soy
 *
 * @package Toheeb\DesignPatternPhp\Decorator\Example1
 */
class Soy extends Beverage
{
    /**
     * @var Beverage
     */
    private $beverage;


    /**
     * Soy constructor.
     *
     * @param Beverage $beverage
     */
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ', Soy';
    }

    /**
     * @return float
     */
    public function cost(): float
    {
        return $this->beverage->cost() + 0.21;
    }
}
