<?php

namespace Toheeb\DesignPatternPhp\Decorator\Example2;

abstract class Text
{
    abstract public function getContent(): string;

    abstract public function getLength(): int;
}
