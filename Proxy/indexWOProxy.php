<?php

class index
{
    public function run()
    {

	$filename = 'test.png';

        $image1 = new RealImage($filename);//loading  image and use system resource	

        // Call some other methods to attach image to related user. 

        echo 'image object attached to user object .';

        echo $image1->display();

    }
}