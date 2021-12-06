<?php
namespace View;
//    require __DIR__ . '../Model/Guest.php';
//
//
//    $firstName = $lastName = $phoneNumber = $isVegetarian = "";

//    if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    if (empty($_POST["firstname"])) {
//    $nameErr = "Name of guest is required";
//    } else {
//        $firstName = ($_POST["firstName"]);
//        // check if name only contains letters and whitespace
//        if (!preg_match("/^[a-zA-Z-' ]*$/",$firstName)) {
//            $nameErr = "Only letters and white space allowed";
//        }
//    }
//    if (empty($_POST["lastName"])) {
//        $nameErr = "Surname name of guest is required";
//    } else {
//        $lastName = input($_POST["lastName"]);
//        // check if name only contains letters and whitespace
//        if (!preg_match("/^[a-zA-Z-']*$/",$lastName)) {
//            $nameErr = "Only letters and white space allowed";
//        }
//    }
//    if (empty($_POST["phoneNumber"])) {
//        $nameErr = "Telephone number of guest is required";
//    } else {
//        $phoneNumber = input($_POST["name"]);
//        // check if name only contains letters and whitespace
//        if (!preg_match("/^[0-9]*$/",$phoneNumber)) {
//            $nameErr = "Only numbers allowed for phone numbers";
//        }
//    }
//    if (empty($_POST["isVegetarian"])) {
//        $nameErr = "Is the guest a Vegetarian - yes or no ";
//    } else {
//        $isVegetarian = input($_POST["isVegetarian"]);
//        // check this field is only Yes or No
//        if ((!strtolower($isVegetarian) == 'yes' ) && (!strtolower($isVegetarian) == 'no' )) {
//            $nameErr = "Only yes or no allowed for vegetarian choice";
//        }
//    }
//}
//
class DisplayUsers
{
    public function display()
    {
    	return <<<XYZ
        <h3>List of users</h3>
        <table>
            <thead>
                <tr>
                    <td>firstName</td>
                    <td>lastName</td>
                    <td>attending</td>
                    <td>replyDate</td>
                    <td>isVegetarian</td>
                    <td>phoneNumber</td>
                </tr>
            </thead>
            <tbody>
            <!-- this will come from the database -->
            </tbody>
        </table>
XYZ;
    }
}

