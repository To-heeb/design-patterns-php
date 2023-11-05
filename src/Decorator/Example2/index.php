<?php

use Toheeb\DesignPatternPhp\Decorator\Example2\PlainText;
use Toheeb\DesignPatternPhp\Decorator\Example2\BoldDecorator;
use Toheeb\DesignPatternPhp\Decorator\Example2\ItalicDecorator;
use Toheeb\DesignPatternPhp\Decorator\Example2\FontSizeDecorator;
use Toheeb\DesignPatternPhp\Decorator\Example2\FontColorDecorator;

require_once '../../../vendor/autoload.php';

echo '==============|#### Decorator Design Pattern in Action ####|==================' . PHP_EOL;


echo '==============|  Plain Text  |==================' . PHP_EOL;
$plainText = new PlainText("This is just a plain text for decorator pattern");
echo "Formatted Text: " . $plainText->getContent() . PHP_EOL;

echo '==============|  Bold Decorator  |==================' . PHP_EOL;
$boldText = new BoldDecorator($plainText);
echo "Formatted Text with bold: " . $boldText->getContent() . PHP_EOL;

echo '==============|  Italics Decorator  |==================' . PHP_EOL;
$italicText = new ItalicDecorator($boldText);
echo "Formatted Text with italics: " . $italicText->getContent() . PHP_EOL;

echo '==============|  Font Color Decorator  |==================' . PHP_EOL;
$fontColorText = new FontColorDecorator($italicText, 'red');
echo "Formatted Text with font-color: " . $fontColorText->getContent() . PHP_EOL;

echo '==============|  Font Size Decorator  |==================' . PHP_EOL;
$fontSizeText = new FontSizeDecorator($fontColorText, '18px');
echo "Formatted Text: " . $fontSizeText->getContent() . PHP_EOL;
echo "Formatted Text with font-size: " . $fontSizeText->getContent() . PHP_EOL;
echo "Text Length: " . $plainText->getLength() . PHP_EOL;
