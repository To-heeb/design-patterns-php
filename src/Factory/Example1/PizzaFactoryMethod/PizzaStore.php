<?php


namespace Toheeb\DesignPatternPhp\Factory\Example1\PizzaFactoryMethod;


abstract class PizzaStore
{

    abstract protected function createPizza(string $type): Pizza;


    public function orderPizza(string $type): Pizza
    {
        $pizza = $this->createPizza($type);
        echo '--- Making a ' . $pizza->getName() . ' ---' . PHP_EOL;
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }
}
