<?php

namespace App\DesignPatterns\States\Elevator\State;

use App\DesignPatterns\States\Elevator\ElevatorStateInterface;

class Move implements ElevatorStateInterface
{
    public function move()
    {
        echo "Already Moving. PHP_EOL ";
        return new Move();
    }

    public function stop()
    {
        return new Stop();
    }

    public function close()
    {
        echo "cannot change state from move to close". PHP_EOL;
        return new Move();

    }

    public function open()
    {
        echo "cannot change state from move to open". PHP_EOL;
        return new Move();

    }
}