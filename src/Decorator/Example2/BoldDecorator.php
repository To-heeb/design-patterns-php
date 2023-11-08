<?php

namespace Toheeb\DesignPatternPhp\Decorator\Example2;

class BoldDecorator extends TextDecorator
{
    private $text;

    public function __construct(Text $text)
    {
        $this->text = $text;
    }

    public function getContent(): string
    {
        return "<b>" . $this->text->getContent() . "</b>";
    }

    public function getLength(): int
    {
        return $this->text->getLength();
    }
}
