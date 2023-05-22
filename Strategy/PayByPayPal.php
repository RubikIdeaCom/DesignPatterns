<?php
require_once 'PayStrategy.php';
class PayByPayPal implements PayStrategy {
   public function pay($amount = 0) {
       echo "Paying ". $amount. " using PayPal";
   }
} 