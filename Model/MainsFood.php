<?php


class MainsFood extends FoodItem implements INamedItem
{
    private $calaories;

    public function setCalories($value)
    {
        $this->calaories = $value;
    }

    public function setIsMeat(bool $value)
    {
        // TODO: Implement setIsMeat() method.
    }

    public function setIsHot(bool $value)
    {
        // TODO: Implement setIsHot() method.
    }

    public function getName(): string
    {
        return "HOOOOOT".$this->name;
    }
}