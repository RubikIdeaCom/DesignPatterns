<?php
require_once 'SokanPal.php';
require_once 'PaymentAdapter.php';

class SokanPalAdapter implements PaymentAdapter { 
    private $sokanPal;
    public function __construct(SokanPal $sokanPal) {
        $this->sokanPal = $sokanPal;
    }
 
    public function pay($amount) {
        $this->sokanPal->pleaseDoPayment($amount);
    }
} 