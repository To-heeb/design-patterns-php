<?php

namespace Toheeb\DesignPatternPhp\Decorator\Example1;


abstract class Beverage
{

    abstract public function getDescription(): string;

    abstract public function cost(): float;
}
