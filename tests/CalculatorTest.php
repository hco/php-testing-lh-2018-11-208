<?php

class CalculatorTest extends \PHPUnit\Framework\TestCase
{
    public function testHelloWorld()
    {
        $this->assertTrue(true);
    }

    public function testTwoPlusTwoIsFour()
    {
        $calculator = new TestingWorkshop\Calculator();

        $sum = $calculator->sum(2, 2);

        $this->assertSame(4, $sum);
    }

    public function testTwoPlusThreeIsFive()
    {
        $calculator = new TestingWorkshop\Calculator();

        $sum = $calculator->sum(2.5, 3);

        $this->assertSame(5, $sum);
    }

    public function testThatDivisionByZeroRaisesAnException()
    {
        $calculator = new \TestingWorkshop\Calculator();

        $this->expectException(\TestingWorkshop\DivisionByZeroException::class);
        $calculator->divide(2, 0);
    }


    public function testFourDividedByTwoIsTwo()
    {
        $calculator = new TestingWorkshop\Calculator();

        $number = $calculator->divide(4, 2);

        $this->assertSame(2, $number);
    }

    public function testSixDividedByTwoIsThree()
    {
        $calculator = new TestingWorkshop\Calculator();

        $number = $calculator->divide(6, 2);

        $this->assertSame(3, $number);
    }

    public function testFiveDividedByTwoIsTwoAndAHalf()
    {
        $calculator = new TestingWorkshop\Calculator();

        $number = $calculator->divide(5, 2);

        $this->assertSame(2.5, $number);
    }

    public function testTenDividedByThreeIsThreePointThree()
    {
        $calculator = new TestingWorkshop\Calculator();

        $number = $calculator->divide(10, 3);

        $this->assertEquals(3.3333, $number, '', 0.0001);
    }


}