<?php

namespace Toheeb\DesignPatternPhp\Decorator\Example2;

class ItalicDecorator extends TextDecorator
{
    private $text;

    public function __construct(Text $text)
    {
        $this->text = $text;
    }

    public function getContent(): string
    {
        return "<i>" . $this->text->getContent() . "</i>";
    }

    public function getLength(): int
    {
        return $this->text->getLength();
    }
}
