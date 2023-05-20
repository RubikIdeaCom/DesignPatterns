<?php
class Locks extends HomeChecker
{
    public function check(HomeStatus $home)
    {
        if (!$home->locks) {
            throw new Exception('not locked ABORT!');
        }
        $this->next($home);
    }
}