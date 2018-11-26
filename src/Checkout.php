<?php
/**
 * Created by PhpStorm.
 * User: nutzer08
 * Date: 20.11.18
 * Time: 17:13
 */

namespace TestingWorkshop;


class Checkout
{
    private $PersistantSum = 0;

    public function checkoutSum($items)
    {

        $article = [
            'A' => 15,
            'B' => 10,
            'C' => 13];

        $items = str_split($items,1);
        foreach($items as $value)
        {
            $this->PersistantSum += $article[$value];
        }

        return $this->PersistantSum;

    }


}