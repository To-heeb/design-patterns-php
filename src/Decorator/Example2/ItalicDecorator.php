<?php

namespace Toheeb\DesignPatternPhp\Decorator\Example2;

class ItalicDecorator extends TextDecorator
{
    private $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function getContent(): string
    {
        return "<i>" . $this->text->getContent() . "</i>";
    }

    public function getLength(): int
    {
        return strlen($this->text);
    }
}
