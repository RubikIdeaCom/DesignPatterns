<?php
namespace App\DesignPatterns\States\Elevator\State;

require 'Elevator.php';
require 'ElevatorStateInterface.php';

require 'states/close.php';
require 'states/open.php';
require 'states/Stop.php';

use App\DesignPatterns\States\Elevator\Elevator;

class index
{
    public function elevator()
    {
        // The elevator is initially stop
        $elevator = new Elevator();

        $elevator->open();

        $elevator->move();

        $elevator->close();

        $elevator->stop();
    }
}

echo '<pre>';
$obj = new index();
$obj->elevator();