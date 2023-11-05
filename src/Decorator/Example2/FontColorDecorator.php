<?php

namespace Toheeb\DesignPatternPhp\Decorator\Example2;

class FontColorDecorator extends TextDecorator
{
    private $text;
    private $color;

    public function __construct($text, $color)
    {
        $this->text = $text;
        $this->color = $color;
    }

    public function getContent(): string
    {
        return '<span style="font-color:' . $this->color . ';">' . $this->text->getContent() . "</span>";
    }

    public function getLength(): int
    {
        return strlen($this->text);
    }
}
