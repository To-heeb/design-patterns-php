<?php


declare(strict_types=1);

namespace Toheeb\DesignPatternPhp\Factory\Example1\PizzaFactoryMethod\NYPizza;

use Toheeb\DesignPatternPhp\Factory\Example1\PizzaFactoryMethod\Pizza;


/**
 * Class NYStyleClamPizza
 *
 * @package Maksi\HeadFirstDesignPattern\Factory\PizzaFactoryMethod\NYPizza
 */
class NYStyleClamPizza extends Pizza
{

    /**
     * NYStyleClamPizza constructor.
     */
    public function __construct()
    {
        $this->name = 'NY Style Clam Pizza';
        $this->dough = 'Thin Crust Dough';
        $this->sauce = 'Marinara Sauce';

        $this->toppings[] = 'Grated Reggiano Cheese';
        $this->toppings[] = 'Fresh Clams from Long Island Sound';
    }
}
