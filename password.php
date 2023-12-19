<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
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


?>

<body>
    <header></header>
    <main>
        <h1>
            <?php
            echo randomise($passwordLength, $charactersArray);  ?>

        </h1>
    </main>
    <footer></footer>
    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>