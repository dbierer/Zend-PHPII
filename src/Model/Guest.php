<?php
declare(strict_types=1);

class Guest
{
    public ?string $firstName;
    public ?string $lastName;
    public bool $attending = false;
    public $replyDate;
    protected $guestID;
    const weddingTotal = 5;
    public bool $isVegetarian = false;
    public string $phoneNumber;

    public function __construct(string $firstName = null,
                                string $lastName = null,
                                string $phoneNumber,
                                bool $isVegetarian = false)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->replyDate= date('d-m-Y');
        $this->attending=true;
        $this->isVegetarian = $isVegetarian;
        $this->phoneNumber = $phoneNumber;
    }



}