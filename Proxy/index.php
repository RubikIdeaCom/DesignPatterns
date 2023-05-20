<?php

require 'ImageProxyInterface.php';
require 'ProxyImage.php';
require 'RealImage.php';

class index
{
    public function run()
    {

	$filename = 'test.png';


        $image2 = new ProxyImage($filename); 

        // Call some other methods to attach image to related user. 

        echo 'image object attached to user object. </br>';


        echo $image2->display(); //loading  image and use system resource	

    }
}

echo '<pre>';
$obj = new index();
$obj->run();