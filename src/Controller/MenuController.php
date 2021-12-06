<?php

declare(strict_types=1);

namespace View;

use LoginForm;

class MenuController
{
    private $request;

    public function loginAction()
    {
        $request = $this->request;
        if ($request->isPost()) {
            $response = $this->onPostLoginAction();
        } else {
            $response = $this->onGetLoginAction();
        }
    }

    public function onPostLoginAction()
    {
        $loginForm = new LoginForm;
    }
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
