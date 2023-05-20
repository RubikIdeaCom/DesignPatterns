<?php

namespace App\DesignPatterns\States\Elevator\State;

use App\DesignPatterns\States\Elevator\ElevatorStateInterface;

class Close implements ElevatorStateInterface
{
    public function close()
    {
        echo "Already Closed". PHP_EOL;
        return new Close();
    }

    public function open()
    {
        return new Open();
    }

    public function move()
    {
        return new Move();
    }

    public function stop()
    {
        echo "cannot change position from close to stop" . PHP_EOL;
        return new Close();
    }
}