<?php

declare(strict_types=1);

namespace Toheeb\DesignPatternPhp\Factory\Example1\PizzaFactoryMethod\NYPizza;

use Toheeb\DesignPatternPhp\Factory\Example1\PizzaFactoryMethod\Pizza;

/**
 * Class NYStyleVeggiePizza
 *
 * @package Maksi\HeadFirstDesignPattern\Factory\PizzaFactoryMethod\NYPizza
 */
class NYStyleVeggiePizza extends Pizza
{

    /**
     * NYStyleVeggiePizza constructor.
     */
    public function __construct()
    {
        $this->name = 'NY Style Veggie Pizza';
        $this->dough = 'Thin Crust Dough';
        $this->sauce = 'Marinara Sauce';

        $this->toppings[] = 'Grated Reggiano Cheese';
        $this->toppings[] = 'Garlic';
        $this->toppings[] = 'Onion';
        $this->toppings[] = 'Mushrooms';
        $this->toppings[] = 'Red Pepper';
    }
}
