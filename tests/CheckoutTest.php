<?php
/**
 * Created by PhpStorm.
 * User: nutzer08
 * Date: 20.11.18
 * Time: 17:08
 */

class CheckoutTest extends \PHPUnit\Framework\TestCase
{

    public function testCheckoutSum(){


        $checkout = new \TestingWorkshop\Checkout();

        $this->assertEquals(50, $checkout->checkoutSum('ABBA'));
        $this->assertEquals(100, $checkout->checkoutSum('ABBA'));
        $this->assertEquals(113, $checkout->checkoutSum('C'));

    }


}