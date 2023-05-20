<?php

class ProxyImage implements ImageProxyInterface
{
    protected $id;
    protected $image;
    protected $filename;

    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function display()
    {
        if (null === $this->image) {
            $this->image = new RealImage($this->filename);
        }
        return $this->image->display();
    }
}