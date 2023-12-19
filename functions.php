<?php
$passwordLength = $_GET["numeri"];
$letters = "qwertyuioiplkjhgfdsazxcvbnm";
$capsLetters = "QWERTYUIOPLKJHGFDSAZXCVBNM";
$numbers = "0123456789";
$symbols = "\%&/()=?'^+*.:<>[]{}-_";
$lettersArray = str_split($letters, 1);
$capsLettersArray = str_split($capsLetters, 1);
$numbersArray = str_split($numbers, 1);
$symbolsArray = str_split($symbols, 1);
$charactersArray = array_merge($lettersArray, $capsLettersArray, $numbersArray, $symbolsArray);
function randomise($length, $array)
{
    $result = '';
    $count = count($array);
    for ($i = 0; $i < $length; $i++) {
        $number = rand(0, $count - 1);
        $result .= $array[$number];
    }
    return $result;
};
