<?php
require_once 'Email.php';
require_once 'EmailBody.php';
require_once 'EmailBodyDecorator.php';
class YaldaEmailBody extends EmailBodyDecorator {
    public function loadBody() {
        echo 'This is the extra content for Yalda.<br />';
        $this->emailBody->loadBody();
    }
}