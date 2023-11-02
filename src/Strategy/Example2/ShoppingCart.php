<?php

namespace Toheeb\DesignPatternPhp\Strategy\Example2;

class ShoppingCart
{

    private $cart_item = [];

    private DiscountStrategy $discountStrategy;

    public function __construct(DiscountStrategy $discountStrategy)
    {
        $this->discountStrategy = $discountStrategy;
    }

    public function addItem(Item $item)
    {
        $this->cart_item[] = $item;
    }

    public function removeItem(Item $item)
    {
        $index = array_search($item, $this->cart_item);
        if ($index != false) {
            unset($this->cart_item[$item]);
        }
    }

    public function calculateTotal()
    {
        $total = 0;
        foreach ($this->cart_item as $item) {
            $total += $item->getPrice();
        }

        return $total;
    }

    public function applyDiscount()
    {
        $cart_total = $this->calculateTotal();
        $discount = $this->discountStrategy->calculateDiscount($cart_total);
        return $cart_total - $discount;
    }

    public function setDiscountStrategy(DiscountStrategy $discountStrategy)
    {
        $this->discountStrategy = $discountStrategy;
    }
}
