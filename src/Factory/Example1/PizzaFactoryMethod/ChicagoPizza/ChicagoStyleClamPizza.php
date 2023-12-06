<?php

declare(strict_types=1);

namespace Toheeb\DesignPatternPhp\Factory\Example1\PizzaFactoryMethod\ChicagoPizza;

use Toheeb\DesignPatternPhp\Factory\Example1\PizzaFactoryMethod\Pizza;

/**
 * Class ChicagoStyleClamPizza
 *
 * @package Maksi\HeadFirstDesignPattern\Factory\PizzaFactoryMethod\ChicagoPizza
 */
class ChicagoStyleClamPizza extends Pizza
{
    /**
     * ChicagoStyleClamPizza constructor.
     */
    public function __construct()
    {
        $this->name = 'Chicago Style Clam Pizza';
        $this->dough = 'Extra Thick Crust Dough';
        $this->sauce = 'Plum Tomato Sauce';

        $this->toppings[] = 'Shredded Mozzarella Cheese';
        $this->toppings[] = 'Frozen Clams from Chesapeake Bay';
    }

    public function cut(): void
    {
        echo 'Cutting the pizza into square slices';
    }
}
