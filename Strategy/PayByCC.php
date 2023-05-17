<?php
require_once 'PayStrategy.php';
class PayByCC implements PayStrategy {    
    public function pay($amount = 0) {
        echo "Paying " . $amount . " using Credit Card";
    }  
}