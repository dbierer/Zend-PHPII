<?php
declare(strict_types=1);

include 'GuestList.php';

include_once 'Model/Guest.php';

function input(string $prompt = null)
{
    echo $prompt;
    $handle = fopen('php://stdin','r');
    $response = fgets($handle);
    fclose($handle);
    return trim($response);
}

$halt = false;
while ($halt === false)
{
    $userInput = input('D = Delete guest, S = Show all Guests, C = Change guest, F = Change food menu details, H = end , A  = Add new guest');
    switch ($userInput) {
        case 'H' :
            $halt = true;
            break;
        case 'A' :
            $newGuest = new Guest(
                input('Enter in first name'),
                input('Enter in surname name'),
                input('Enter in phone number'),
                strtolower(input('Are they vegetarian')) == 'yes'
            );
            array_push($guests,$newGuest);
            break;
        case 'S':
            foreach ($guests as $guest){
                 echo "$guest->firstName $guest->lastName  $guest->isVegetarian \n";
            }
            break;
    }



}