<?php

declare(strict_types=1);

class addGuest
{
    public ?string $firstName;
    public ?string $lastName;
    public bool $attending = false;
    public $replyDate;
    protected $guestID;
    const weddingTotal = 5;
    public bool $isVegetarian = false;
    public string $phoneNumber;

    public function getGuestFirstName():string
    {
        return $this->firstName;
    }

    public function getDetailsEnteredDate($firstname)
    {
        return $this->replyDate;
    }
}