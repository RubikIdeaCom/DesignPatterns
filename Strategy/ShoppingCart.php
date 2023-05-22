<?php
require_once 'PayByPayPal.php';
require_once 'PayByCC.php';
require_once 'PayBySokanPal.php';

class ShoppingCart {
    public $amount = 0;
    public function __construct($amount = 0) {
        $this->amount = $amount;
    }
     
    public function getAmount() {
        return $this->amount;
    }
     
    public function setAmount($amount = 0) {
        $this->amount = $amount;
    }
 
    public function payAmount() {
        if($this->amount > 1000000) {
            $payment = new PayBySokanPal();
        } elseif($this->amount >= 500000) {
            $payment = new PayByCC();
        } else {
            $payment = new PayByPayPal();
        }
        $payment->pay($this->amount);
    }
} 