<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Service\Calc;

class CalcTest extends TestCase
{
    public function testSomething(): void
    {
        $this->assertTrue(true);
    }

    public function testAddition(): void
    {
        $calc = new Calc();
        $result = $calc->addition(2, 3);
        $this->assertEquals(5, $result);
    }

    public function testSoustraction(): void
    {
        $calc = new Calc();
        $result = $calc->soustraction(5, 3);
        $this->assertEquals(2, $result);
    }

    public function testMultiplication(): void
    {
        $calc = new Calc();
        $result = $calc->multiplication(2, 3);
        $this->assertEquals(6, $result);
    }

    public function testDivision(): void
    {
        $calc = new Calc();
        $result = $calc->division(6, 3);
        $this->assertEquals(2, $result);
    }

    public function testDivisionByZero(): void
    {
        $calc = new Calc();
        $result = $calc->division(6, 0);
        $this->assertEquals("Division par zéro impossible", $result);
    }
}
