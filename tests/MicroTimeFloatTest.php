<?php

use PHPUnit\Framework\TestCase;

class MicroTimeFloatTest extends TestCase{

    public function testGetMicrotime(){
        $time = ratacibernetica\MicroTimeFloat::microtime_float();
        sleep(1);
        $time2 = ratacibernetica\MicroTimeFloat::microtime_float();
        $this->assertTrue( $time2-$time > 1.00000000000);
    }
}

?>