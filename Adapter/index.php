<?php
// require_once 'PayPalAdapter.php';
// $payPal = new PayPalAdapter(new PayPal());
// $payPal->pay('26000');
require_once 'SokanPalAdapter.php'; 
$sokanPal = new SokanPalAdapter(new SokanPal());
$sokanPal->pay('100000');