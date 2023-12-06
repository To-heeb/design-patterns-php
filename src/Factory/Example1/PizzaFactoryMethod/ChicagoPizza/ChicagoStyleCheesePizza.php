<?php

declare(strict_types=1);

namespace Toheeb\DesignPatternPhp\Factory\Example1\PizzaFactoryMethod\ChicagoPizza;

use Toheeb\DesignPatternPhp\Factory\Example1\PizzaFactoryMethod\Pizza;

/**
 * Class ChicagoStyleCheesePizza
 *
 * @package Maksi\HeadFirstDesignPattern\Factory\PizzaFactoryMethod\ChicagoPizza
 */
class ChicagoStyleCheesePizza extends Pizza
{
    /**
     * ChicagoStyleCheesePizza constructor.
     */
    public function __construct()
    {
        $this->name = 'Chicago Style Deep Dish Cheese Pizza';
        $this->dough = 'Extra Thick Crust Dough';
        $this->sauce = 'Plum Tomato Sauce';

        $this->toppings[] = 'Shredded Mozzarella Cheese';
    }

    public function cut(): void
    {
        echo 'Cutting the pizza into square slices' . PHP_EOL;
    }
}
