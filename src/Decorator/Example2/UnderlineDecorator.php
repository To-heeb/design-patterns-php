<?php

namespace Toheeb\DesignPatternPhp\Decorator\Example2;

class UnderlineDecorator extends TextDecorator
{
    private $text;

    public function __construct(Text $text)
    {
        $this->text = $text;
    }

    public function getContent(): string
    {
        return "<u>" . $this->text->getContent() . "</u>";
    }

    public function getLength(): int
    {
        return $this->text->getLength();
    }
}
