<?php
require 'Calculator.php';
use PHPUnit\Framework\TestCase;
 
class CalculatorTest extends TestCase
{
    private $calculator;
 
    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }
 
    public function testAdd(): void 
    {
        $result = $this->calculator->add(1, 2);
        $this->assertEquals(3, $result);
    }
 
}
?>
