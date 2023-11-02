<?php

namespace Toheeb\DesignPatternPhp\Strategy\Example2;

class RegularCustomerDiscount implements DiscountStrategy
{


    public function calculateDiscount(int $cart_total): float
    {
        return $cart_total * 0.05;
    }
}
