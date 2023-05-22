<?php
require_once 'EmailBody.php';
class Email implements EmailBody {
    public function loadBody() {
        echo "This is the main Email body.<br />";
    } 
} 