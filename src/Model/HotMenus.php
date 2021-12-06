<?php

class HotMenus implements FoodTypes
{
    public string $foodPrefix= "HOT";

    public function getNameFood(): string
    {
        return $this->foodPrefix;
    }

}