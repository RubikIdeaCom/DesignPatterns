<?php

class AddedComment implements SplSubject
{
    protected $observers = [];


    public $comment_text;


    public $post_id;


    public function __construct($comment_text, $post_id)
    {
        $this->comment_text = $comment_text;
        $this->post_id = $post_id;
    }


    public function attach(SplObserver $observer)
    {
        $key = spl_object_hash($observer);
        $this->observers[$key] = $observer;

        return $this;
    }


    public function detach(SplObserver $observer)
    {
        $key = spl_object_hash($observer);
        unset($this->observers[$key]);
    }


    public function notify()
    {
       foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}
