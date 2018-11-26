<?php
require_once __DIR__ . '/ITKTestCase.php';

class AssertionTest extends ITKTestCase
{
    public function testAssertions() {
        $this->assertTwoArraysHaveTheSameKeysWithSameValues(
            ['a' => 1, 'bx' => 2],
            ['b' => 2, 'a' => 1]
        );

    }
}