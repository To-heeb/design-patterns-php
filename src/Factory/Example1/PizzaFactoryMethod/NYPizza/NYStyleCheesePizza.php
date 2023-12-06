<?php


declare(strict_types=1);

namespace Toheeb\DesignPatternPhp\Factory\Example1\PizzaFactoryMethod\NYPizza;

use Toheeb\DesignPatternPhp\Factory\Example1\PizzaFactoryMethod\Pizza;

/**
 * Class NYStyleCheesePizza
 *
 * @package Maksi\HeadFirstDesignPattern\Factory\PizzaFactoryMethod\NYPizza
 */
class NYStyleCheesePizza extends Pizza
{
    /**
     * NYStyleCheesePizza constructor.
     */
    public function __construct()
    {
        $this->name = 'NY Style Sauce and Cheese Pizza';
        $this->dough = 'Thin Crust Dough';
        $this->sauce = 'Marinara Sauce';

        $this->toppings[] = 'Grated Reggiano Cheese';
    }
}
