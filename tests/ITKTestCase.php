<?php
/**
 * Created by PhpStorm.
 * User: nutzer08
 * Date: 20.11.18
 * Time: 15:02
 */

abstract class ITKTestCase extends \PHPUnit\Framework\TestCase
{

    protected function assertTwoArraysHaveTheSameKeysWithSameValues($array1, $array2) {
        $this->assertEquals($array1, $array2, 'arrays are not equal');
    }
}