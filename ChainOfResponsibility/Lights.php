<?php

class Lights extends HomeChecker
{
    public function check(HomeStatus $home)
    {
        if (!$home->lightsOff) {
            throw new Exception('not locked ABORT!');
        }
        $this->next($home);
    }
}