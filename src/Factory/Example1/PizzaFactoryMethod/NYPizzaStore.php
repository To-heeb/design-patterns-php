<?php

declare(strict_types=1);

namespace Toheeb\DesignPatternPhp\Factory\Example1\PizzaFactoryMethod;

use Toheeb\DesignPatternPhp\Factory\Example1\PizzaFactoryMethod\PizzaStore;
use Toheeb\DesignPatternPhp\Factory\Example1\PizzaFactoryMethod\CreatePizzaException;
use Toheeb\DesignPatternPhp\Factory\Example1\PizzaFactoryMethod\NYPizza\NYStyleClamPizza;
use Toheeb\DesignPatternPhp\Factory\Example1\PizzaFactoryMethod\NYPizza\NYStyleCheesePizza;
use Toheeb\DesignPatternPhp\Factory\Example1\PizzaFactoryMethod\NYPizza\NYStyleVeggiePizza;
use Toheeb\DesignPatternPhp\Factory\Example1\PizzaFactoryMethod\NYPizza\NYStylePepperoniPizza;

/**
 * Class NYPizzaStore
 *
 * @package Maksi\HeadFirstDesignPattern\Factory\PizzaFactoryMethod
 */
class NYPizzaStore extends PizzaStore
{
    /**
     * @param string $item
     *
     * @return Pizza
     * @throws CreatePizzaException
     */
    public function createPizza(string $item): Pizza
    {
        switch ($item) {
            case 'cheese':
                return new NYStyleCheesePizza();
            case 'veggie':
                return new NYStyleVeggiePizza();
            case 'clam':
                return new NYStyleClamPizza();
            case 'pepperoni':
                return new NYStylePepperoniPizza();
        }
        throw new CreatePizzaException('Pizza type: ' . $item . ' is not support');
    }
}
