<?php
require_once 'PaymentAdapter.php';
require_once 'PayPal.php';

class PayPalAdapter implements PaymentAdapter {
    private $payPal;
    public function __construct(PayPal $payPal) {
        $this->payPal = $payPal;
    }
    public function pay($amount) {
        $this->payPal->sendPayment($amount);
    }
} 