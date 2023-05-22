<?php
require_once 'Email.php';
// $email = new Email(); // normal mail
// $email->loadBody();
/** ************************** */
require_once 'YaldaEmailBody.php';
$email = new Email();
$email = new YaldaEmailBody($email);
$email->loadBody();
/** ************************** */
require_once 'NewYearEmailBody.php';
$email = new Email();
$email = new NewYearEmailBody($email);
$email->loadBody();
/** ************************** */
require_once 'NewYearEmailBody.php';
$email = new Email();
$email = new YaldaEmailBody($email);
$email = new NewYearEmailBody($email);
$email->loadBody(); 