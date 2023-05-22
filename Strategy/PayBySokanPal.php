<?php
require_once 'PayStrategy.php';
class PayBySokanPal implements PayStrategy {
    public function pay($amount = 0) {
        echo "Paying ". $amount. " using SokanPal";
    }
} 