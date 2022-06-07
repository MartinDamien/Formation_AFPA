<?php
require 'Calculator.php';

use PHPUnit\Framework\TestCase;

final class ClassHasAttributeTest extends TestCase
{
    public function testFailure(): void
    {
        $this->assertClassHasAttribute('toto', Calculator::class);
    }
}

