<?php

namespace Toheeb\DesignPatternPhp\Decorator\Example2;

class UnderlineDecorator extends TextDecorator
{
    private $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function getContent(): string
    {
        return "<u>" . $this->text->getContent() . "</u>";
    }

    public function getLength(): int
    {
        return strlen($this->text);
    }
}
