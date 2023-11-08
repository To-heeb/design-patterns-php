<?php

namespace Toheeb\DesignPatternPhp\Decorator\Example2;

class FontSizeDecorator extends TextDecorator
{
    private $text;
    private $size;

    public function __construct(Text $text, int $size)
    {
        $this->text = $text;
        $this->size = $size;
    }

    public function getContent(): string
    {
        return '<span style="font-size:' . $this->size . ';">' . $this->text->getContent() . "</span>";
    }

    public function getLength(): int
    {
        return $this->text->getLength();
    }
}
