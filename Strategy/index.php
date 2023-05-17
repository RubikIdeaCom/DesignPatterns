<?php
require_once 'ShoppingCart.php';
$cart = new ShoppingCart(499999);
$cart->payAmount();

echo '<br />';

$cart = new ShoppingCart(510000);
$cart->payAmount();

echo '<br />';

$cart = new ShoppingCart(1000000);
$cart->payAmount();