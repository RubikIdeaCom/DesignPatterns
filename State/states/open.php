<?php

namespace App\DesignPatterns\States\Elevator\State;

use App\DesignPatterns\States\Elevator\ElevatorStateInterface;

class Open implements ElevatorStateInterface
{
    public function open()
    {
        echo "Already Opened". PHP_EOL;
        return new Open();
    }

    public function close()
    {
        return new Close();
    }

    public function move()
    {
        echo "cannot change state from open to move". PHP_EOL;
        return new Open();

    }

    public function stop()
    {
        echo "cannot change state from open to stop". PHP_EOL;
        return new Open();
    }
}