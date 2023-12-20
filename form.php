<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Password generator</title>
</head>
<?php include "functions.php" ?>

<body>
    <header class="text-center">
        <h1>Password generator</h1>
    </header>
    <main>
        <div class="container">
            <div class="card p-5">
                <form class="form" action="" method="GET">
                    <input class="form-control mb-3" name="numeri" min="1" type="number" required placeholder="seleziona la lunghezza della password">
                    <div class="card-body">
                        <label for="letters">Lettere</label>
                        <input type="checkbox" checked name="include_letters" id="letters" action="" method="GET">
                        <label for="numbers">numeri</label>
                        <input type="checkbox" name="include_numbers" id="numbers" action="" method="GET">
                        <label for="symbols">Simboli</label>
                        <input type="checkbox" name="include_symbols" id="symbols" action="" method="GET">
                    </div>
                    <div class="card-body">
                        <h5>consenti caratteri ripetuti</h5>
                        <label>
                            <input type="radio" checked name="repetition" id="" action="password.php" method="GET" value="yes">Si

                        </label>
                        <label>
                            <input type="radio" name="repetition" id="" action="password.php" method="GET" value="no">No
                        </label>
                    </div>

                    <button class="btn btn-primary" type="submit">Genera password!</button>
                </form>
            </div>

            <?php
            if ($passwordLength > 0) {
                include "password_card.php";
            }
            ?>


        </div>
    </main>
    <footer></footer>
    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>