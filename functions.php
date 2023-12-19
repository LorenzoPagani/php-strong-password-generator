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
$includeLetters = isset($_GET["include_letters"]);
$includeNumbers = isset($_GET["include_numbers"]);
$includeSymbols = isset($_GET["include_symbols"]);
$charactersArray = [];
if ($includeLetters) {
    $charactersArray = array_merge($charactersArray, $lettersArray, $capsLettersArray);
}

if ($includeNumbers) {
    $charactersArray = array_merge($charactersArray, $numbersArray);
}

if ($includeSymbols) {
    $charactersArray = array_merge($charactersArray, $symbolsArray);
}
function randomise($length, $array)
{
    $result = '';
    $count = count($array);
    if ($count === 0) {

        return "Seleziona almeno un tipo di carattere.";
    }
    for ($i = 0; $i < $length; $i++) {
        $number = rand(0, $count - 1);
        $result .= $array[$number];
    }
    return $result;
};
