<?php
declare(strict_types=1);

namespace Model;

class FoodSelection extends Guest
{
    public function showDateWhenEntered(){
        return $this->getDetailsEnteredDate();
    }


}