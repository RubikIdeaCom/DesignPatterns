<?php
require_once 'Twitter.php';
require_once 'Facebook.php';
require_once 'GooglePlus.php';
require_once 'SocialMedia.php';
$socialMedia = new SocialMedia(new Twitter(), new Facebook(), new GooglePlus());
$socialMedia->shareMessage('Facade Design Pattern')->shareonSocial();