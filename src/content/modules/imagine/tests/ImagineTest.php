<?php
use Imagine\Imagick\Image;

class ImagineTest extends PHPUnit_Framework_TestCase
{

    // Test if Imagine is correctly installed
    public function testImagineInstalled()
    {
        $this->assertTrue(class_exists('\Imagine\Imagick\Image'));
    }
}
