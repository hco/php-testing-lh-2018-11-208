<?php
/**
 * Created by PhpStorm.
 * User: nutzer08
 * Date: 20.11.18
 * Time: 14:32
 */

namespace TestingWorkshop;


class CurrentTimeProvider extends TimeProvider
{

    public function getHour()
    {
        return (int) date('H');
    }
}