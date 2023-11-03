<?php

use Toheeb\DesignPatternPhp\Strategy\Example2\Item;
use Toheeb\DesignPatternPhp\Strategy\Example2\ShoppingCart;
use Toheeb\DesignPatternPhp\Strategy\Example2\GuestDiscount;
use Toheeb\DesignPatternPhp\Strategy\Example2\PremiumMemberDiscount;
use Toheeb\DesignPatternPhp\Strategy\Example2\RegularCustomerDiscount;


require_once '../../../vendor/autoload.php';

$regularCustomer = new RegularCustomerDiscount();
$premiumMember = new PremiumMemberDiscount();
$guest = new GuestDiscount();

echo '==============|#### Strategy Design Pattern in Action ####|==================' . PHP_EOL;


echo '==============|  Regular customer discount  |==================' . PHP_EOL;

$cart = new ShoppingCart($regularCustomer);
$cart->addItem(new Item("Product 1", 100));
$cart->addItem(new Item("Product 2", 50));
echo "Total amount with discount: $" . $cart->applyDiscount() . "\n";


echo '==============|  Premium member discount  |==================' . PHP_EOL;
$cart = new ShoppingCart($premiumMember);
$cart->addItem(new Item("Product 1", 100));
$cart->addItem(new Item("Product 2", 50));
echo "Total amount with discount: $" . $cart->applyDiscount() . "\n";


echo '==============|  Guest discount |==================' . PHP_EOL;
$cart = new ShoppingCart($guest);
$cart->addItem(new Item("Product 1", 100));
$cart->addItem(new Item("Product 2", 50));
echo "Total amount with discount: $" . $cart->applyDiscount() . "\n";
