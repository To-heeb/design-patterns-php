<?php

declare(strict_types=1);

namespace Toheeb\DesignPatternPhp\Factory\Example1\PizzaFactoryMethod;

use Toheeb\DesignPatternPhp\Factory\Example1\PizzaFactoryMethod\PizzaStore;
use Toheeb\DesignPatternPhp\Factory\Example1\PizzaFactoryMethod\ChicagoPizza\ChicagoStyleClamPizza;
use Toheeb\DesignPatternPhp\Factory\Example1\PizzaFactoryMethod\ChicagoPizza\ChicagoStyleCheesePizza;
use Toheeb\DesignPatternPhp\Factory\Example1\PizzaFactoryMethod\ChicagoPizza\ChicagoStyleVeggiePizza;
use Toheeb\DesignPatternPhp\Factory\Example1\PizzaFactoryMethod\ChicagoPizza\ChicagoStylePepperoniPizza;



/**
 * Class ChicagoPizzaStore
 *
 * @package Maksi\HeadFirstDesignPattern\Factory\PizzaFactoryMethod
 */
class ChicagoPizzaStore extends PizzaStore
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
                return new ChicagoStyleCheesePizza();
            case 'veggie':
                return new ChicagoStyleVeggiePizza();
            case 'clam':
                return new ChicagoStyleClamPizza();
            case 'pepperoni':
                return new ChicagoStylePepperoniPizza();
        }

        throw new CreatePizzaException('Pizza type: ' . $item . ' is not support');
    }
}
