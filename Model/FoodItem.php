<?php

abstract class FoodItem
{
    public $isMeat;
    public $name;
    public $isHot;

    public function __construct($name){
        $this->name = $name;
    }

    abstract public function setIsMeat(bool $value);
    abstract public function setIsHot(bool $value);

}