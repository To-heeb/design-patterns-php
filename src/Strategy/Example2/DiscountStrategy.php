<?php

namespace Toheeb\DesignPatternPhp\Strategy\Example2;

interface DiscountStrategy
{
    public function calculateDiscount(int $cart_total): float;
}
