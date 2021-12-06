<?php

declare(strict_types=1);

use Models\Guest;




use LoginForm;

class MenuController
{
    private $request;

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
