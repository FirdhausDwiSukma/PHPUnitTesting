<?php

use PHPUnit\Framework\TestCase;

class ExampleAssertionsTest extends TestCase
{

    public function testThatStringMatch()
    {
        $string1 = 'testing';
        $string2 = 'testing';
        $string3 = 'Testing';

        $this->assertSame($string1, $string2);
    }

    public function testThatNumbersAddUp(){
        $this->assertEquals(10, 5 + 5);
    }

    public function testThatNumberSubtraction(){
        $this->assertEquals(20, 50 - 30);
    }

}
