<?php

class HotMenus implements FoodTypes
{
    public string $foodPrefix= "COLD";

    public function getNameFood(): string
    {
        return $this->foodPrefix;
    }

}