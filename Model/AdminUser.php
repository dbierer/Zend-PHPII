<?php
declare(strict_types=1);

namespace Model;

class AdminUser extends Guest
{
    protected function deleteGuests($firstName, $lastName)
    {
        $this->attending=false;

    }
}