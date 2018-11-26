<?php
/**
 * Created by PhpStorm.
 * User: nutzer08
 * Date: 20.11.18
 * Time: 15:59
 */

class CurrentTimeProviderTest extends \PHPUnit\Framework\TestCase
{
    public function testGetHour()
    {
        $timeProvider = new \TestingWorkshop\CurrentTimeProvider();

        $this->assertBetween(
            (int) date('H'),
            $timeProvider->getHour()
        );
    }

}