<?php

use App\Calculator;
use PHPUnit\Framework\TestCase;

final class CalculatorTest extends TestCase{
    
    private $calculator;

    protected function setUp(): void{
        $this->calculator = new Calculator();
    }

    protected function tearDown(): void{
        $this->calculator = NULL;
    }
    
    public function testAdd(){
        $result = $this->calculator->add(1, 2);

        $this->assertEquals(3, $result);
    }

    public function testSubtraction(){
        $result = $this->calculator->subtraction(2,2);

        $this->assertEquals(0, $result);
    }
}