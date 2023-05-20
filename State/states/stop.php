<?php

namespace App\DesignPatterns\States\Elevator\State;

use App\DesignPatterns\States\Elevator\ElevatorStateInterface;

class Stop implements ElevatorStateInterface
{
    public function open()
    {
        return new Open();
    }

    public function close()
    {
        return new Close();
    }

    public function move()
    {
        return new Move();
    }

    public function stop()
    {
        echo "Already Stopped" . PHP_EOL;
        return new Stop();
    }
}