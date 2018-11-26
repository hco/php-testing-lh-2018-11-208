<?php

class GreeterTest extends \PHPUnit\Framework\TestCase
{

    /*
    public function testGreet()
    {

        $greeter = new TestingWorkshop\Greeter(new \TestingWorkshop\StaticTimeProvider(13));

        $this->assertInstanceOf(TestingWorkshop\Greeter::class, $greeter);
        $greet = $greeter->greet('testString');
        $this->assertEquals('Hello TestString', $greet);
    }
    */

    public function testGreetWithOtherName()
    {
        $greeter = new TestingWorkshop\Greeter(new \TestingWorkshop\StaticTimeProvider(13));

        $this->assertEquals('Hello Manfred', $greeter->greet('Manfred'));
    }

    public function testGreetWithSpaces()
    {
        $greeter = new TestingWorkshop\Greeter(new \TestingWorkshop\StaticTimeProvider(13));

        $this->assertEquals('Hello Manfred', $greeter->greet('  Manfred  '));

    }

    public function testGreetWithLowerCaseName()
    {
        $greeter = new TestingWorkshop\Greeter(new \TestingWorkshop\StaticTimeProvider(13));

        $this->assertContains('Manfred', $greeter->greet('manfred'));

    }

    public function testGreetWithGoodMorning()
    {
        returN;
        $greeter = new TestingWorkshop\Greeter(new \TestingWorkshop\StaticTimeProvider(7));

        $this->assertEquals('Good morning Manfred', $greeter->greet('manfred'));

    }

    public function testGreetWithGoodEvening()
    {
        $greeter = new TestingWorkshop\Greeter(new \TestingWorkshop\StaticTimeProvider(20));

        $this->assertEquals('Good evening Manfred', $greeter->greet('manfred'));

    }

    public function testGreetWithGoodNight()
    {
        $greeter = new TestingWorkshop\Greeter(new \TestingWorkshop\StaticTimeProvider(23));

        $this->assertEquals('Good night Manfred', $greeter->greet('manfred'));

    }

}