<?php

namespace Toheeb\DesignPatternPhp\Decorator\Example2;

class PlainText extends Text
{
    private $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function getContent(): string
    {
        return $this->text;
    }

    public function getLength(): int
    {
        return strlen($this->text);
    }
}
