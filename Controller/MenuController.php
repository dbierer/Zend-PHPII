<?php

declare(strict_types=1);

namespace View;

class MenuController
{
    public function menu()
    {
        $guests = include '../GuestList.php';
        if ($guests[0]->isVegetratian) {
            //return veg menu
        }
        else {
            // return veg and meet menu
        }
    }
}
