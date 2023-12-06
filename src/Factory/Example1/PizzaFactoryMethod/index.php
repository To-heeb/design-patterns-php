<?php

declare(strict_types=1);

require_once '../../../../vendor/autoload.php';

use Toheeb\DesignPatternPhp\Factory\Example1\PizzaFactoryMethod\NYPizzaStore;
use Toheeb\DesignPatternPhp\Factory\Example1\PizzaFactoryMethod\ChicagoPizzaStore;


$nyStore = new NYPizzaStore();
$chicagoStore = new ChicagoPizzaStore();

$pizza = $nyStore->orderPizza('cheese');
echo 'Ethan ordered a ' . $pizza->getName() . PHP_EOL;
echo '----------------------' . PHP_EOL;

$pizza = $chicagoStore->orderPizza('cheese');
echo 'Joel ordered a ' . $pizza->getName() . PHP_EOL;
echo '----------------------' . PHP_EOL;

$pizza = $nyStore->orderPizza('clam');
echo 'Ethan ordered a ' . $pizza->getName() . PHP_EOL;


$pizza = $chicagoStore->orderPizza('clam');
echo 'Joel ordered a ' . $pizza->getName() . PHP_EOL;
echo '----------------------' . PHP_EOL;

$pizza = $nyStore->orderPizza('pepperoni');
echo 'Ethan ordered a ' . $pizza->getName() . PHP_EOL;
echo '----------------------' . PHP_EOL;

$pizza = $chicagoStore->orderPizza('pepperoni');
echo 'Joel ordered a ' . $pizza->getName() . PHP_EOL;
echo '----------------------' . PHP_EOL;

$pizza = $nyStore->orderPizza('veggie');
echo 'Ethan ordered a ' . $pizza->getName() . PHP_EOL;
echo '----------------------' . PHP_EOL;

$pizza = $chicagoStore->orderPizza('veggie');
echo 'Joel ordered a ' . $pizza->getName() . PHP_EOL;
echo '----------------------' . PHP_EOL;
