<?php

use App\Calculator;
use PHPUnit\Framework\TestCase;


class CalculatorTest extends TestCase
{
    public function testSum(): void
    {
        //Arrange
        $firstValue = 5;
        $secondValue = 8;
        $expectedResult = 13;

        //Act
        $calculator = new Calculator();
        $sum = $calculator->sum($firstValue, $secondValue);

        //Assert
        $this->assertSame(
            $expectedResult,
            $sum,
            "La méthode sum() ne fonctionne plus :-("
        );
    }

    public function testMultiplication(): void
    {
        $firstValue = 5;
        $secondValue = 8;
        $expectedResult = 40;

        $calculator = new Calculator();
        $multiplication = $calculator->multiplication($firstValue, $secondValue);

        $this->assertSame(
            $expectedResult,
            $multiplication,
            "La méthode multiplication() ne fonctionne plus :-("
        );
    }

    public function testisOdd(): void
    {
        $firstValue = 5;


        $calculator = new Calculator();
        $isOdd = $calculator->isOdd($firstValue);

        $this->assertTrue(
            $isOdd,
            "La méthode isOdd() ne fonctionne plus :-("
        );
    }
}
