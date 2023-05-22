<?php
require_once 'EmailBody.php';
require_once 'Email.php';
abstract class EmailBodyDecorator implements EmailBody {
    protected $emailBody;
    public function __construct(EmailBody $emailBody) {
        $this->emailBody = $emailBody;
    }
    abstract public function loadBody();
} 