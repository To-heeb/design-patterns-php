<?php

namespace Toheeb\DesignPatternPhp\Decorator\Example1;


/**
 * Class Mocha
 *
 * @package Toheeb\DesignPatternPhp\Decorator\Example1
 */
class Mocha extends Beverage
{
    /**
     * @var Beverage
     */
    private $beverage;


    /**
     * Mocha constructor.
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
        return $this->beverage->getDescription() . ', Mocha';
    }

    /**
     * @return float
     */
    public function cost(): float
    {
        return $this->beverage->cost() + 0.20;
    }
}
