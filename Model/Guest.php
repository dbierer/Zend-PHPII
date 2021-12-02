<?php
declare(strict_types=1);

class Guest
{
    public $firstName;
    public $lastName;
    public $attending = false;
    public $replyDate;
    protected $guestID;
    const weddingTotal = 5;
    public $isVegetratian = false;
    public $phoneNumber;


    public function __construct(string $firstName = null, string $lastName = null, string $phoneNumber, bool $isVegetratian = false)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->replyDate= date('d-m-Y');
        $this->attending=true;
        $this->isVegetratian = $isVegetratian;
        $this->phoneNumber = $phoneNumber;
    }

    public function getGuestFirstName():string
    {
        return $this->firstName;
    }

    public function getDetailsEnteredDate($firstname)
    {
        return $this->replyDate;
    }



}