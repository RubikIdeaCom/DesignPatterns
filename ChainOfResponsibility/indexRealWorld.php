<?php

// in a real world we must implement something like this for index file:

class index
{
    public function perform()
    {
        $tasks = [
            Lights::class,
            Locks::class,
            Alarms::class,
        ];

        foreach ($tasks as $task) {
            (new $task)->handle();
        }
    }
}