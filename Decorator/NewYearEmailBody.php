<?php
require_once 'Email.php';
require_once 'EmailBody.php';
require_once 'EmailBodyDecorator.php';
class NewYearEmailBody extends EmailBodyDecorator {
    public function loadBody() {
        echo 'This is the extra content for the New Year.<br />';
        $this->emailBody->loadBody();
    }
}