<?php

require 'HomeChecker.php';
require 'HomeStatus.php';
require 'Locks.php';
require 'Alarms.php';
require 'Lights.php';


$locks = new Locks();
$lights = new Lights();
$alarm = new Alarms();

$locks->succeedWith($lights);
$lights->succeedWith($alarm);

$locks->check(new HomeStatus);
