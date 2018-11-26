<?php
/**
 * Created by PhpStorm.
 * User: nutzer08
 * Date: 20.11.18
 * Time: 12:23
 */

namespace TestingWorkshop;


class Greeter
{
    /**
     * @var TimeProvider
     */
    private $timeProvider;

    public function __construct(TimeProvider $timeProvider)
    {
        $this->timeProvider = $timeProvider;
    }


    public function greet($name)
    {
        $name = ucfirst(trim($name));

        if ($this->timeProvider->getHour() >= 6 && $this->timeProvider->getHour() < 12) {
            return 'Good morning ' . $name;
        }

        if ($this->timeProvider->getHour() >= 18 && $this->timeProvider->getHour() < 22) {
            return 'Good evening ' . $name;
        }


        if($this->timeProvider->getHour() < 6 || $this->timeProvider->getHour() >= 22) {
            return 'Good night ' . $name;
        }

        return "Hello " . $name;
    }



}