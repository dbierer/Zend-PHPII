<?php


class StarterFood extends FoodItem implements INamedItem
{

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
        return "COOOOOLLL".$this->name;
    }
}