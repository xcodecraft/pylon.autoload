<?php
class LoadTC extends PHPUnit_Framework_TestCase
{
    public function testLoad() {
        $a =  new \AutoTest\A() ;
        $a2 =  new \AutoTest2\A() ;
        $this->assertTrue(true) ;
    }
}

