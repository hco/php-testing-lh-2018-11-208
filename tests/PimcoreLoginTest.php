<?php

use PHPUnit\Framework\TestCase;

/**
 * Created by PhpStorm.
 * User: nutzer08
 * Date: 20.11.18
 * Time: 16:05
 */

class PimcoreLoginTest extends TestCase
{
    public function testThatLoginScreenIsShown()
    {
        $driver = new \Behat\Mink\Driver\GoutteDriver();
        $session = new \Behat\Mink\Session($driver);

        $session->visit('https://demo-basic.pimcore.org/admin/login');

        $this->assertNotNull($session->getPage()->findField('username'));

    }

    public function testThatPimcoreIsShownAfterSubmittingLoginForm()
    {
        $driver = new \Behat\Mink\Driver\GoutteDriver();
        $session = new \Behat\Mink\Session($driver);

        $session->visit('https://demo-basic.pimcore.org/admin/login');

        $page = $session->getPage();
        $page->fillField('username', 'admin');
        $page->fillField('password', 'demo');

        $page->find('css', 'div#loginform')->find('css', 'form')->submit();


        $this->assertContains(
            "demo-basic.pimcore.org :: Pimcore",
            $session->getPage()->find('css', 'title')->getHtml()
        );

    }

}