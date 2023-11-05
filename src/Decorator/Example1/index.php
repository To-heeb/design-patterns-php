<?php

use Toheeb\DesignPatternPhp\Decorator\Example1\Decorator\Soy;
use Toheeb\DesignPatternPhp\Decorator\Example1\Decorator\Whip;
use Toheeb\DesignPatternPhp\Decorator\Example1\Decorator\Mocha;
use Toheeb\DesignPatternPhp\Decorator\Example1\Beverage\Espresso;
use Toheeb\DesignPatternPhp\Decorator\Example1\Beverage\DarkRoast;
use Toheeb\DesignPatternPhp\Decorator\Example1\Beverage\HouseBlend;


require_once '../../../vendor/autoload.php';

echo '==============|#### Decorator Design Pattern in Action ####|==================' . PHP_EOL;


echo '==============|  Espresso  |==================' . PHP_EOL;
$beverage = new Espresso();
echo $beverage->getDescription() . ' is  $' . $beverage->cost() . PHP_EOL;


echo '==============|  DarkRoast  |==================' . PHP_EOL;
$beverage2 = new DarkRoast();
$beverage2 = new Mocha($beverage2);
$beverage2 = new Mocha($beverage2);
$beverage2 = new Whip($beverage2);
echo $beverage2->getDescription() . ' is $' . $beverage2->cost() . PHP_EOL;


echo '==============|  HouseBlend  |==================' . PHP_EOL;
$beverage3 = new HouseBlend();
$beverage3 = new Soy($beverage3);
$beverage3 = new Mocha($beverage3);
$beverage3 = new Whip($beverage3);
echo $beverage3->getDescription() . ' is $' . $beverage3->cost() . PHP_EOL;
