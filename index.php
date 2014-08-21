<?php
session_start();

if (!isset($_SESSION['guess']))
{
    $_SESSION["left_id"] = "left-hidden";
    $_SESSION["right_id"] = "right-hidden";
    $_SESSION["still_guessing_id"] = "still-guessing";
    $_SESSION["correct_guess_id"] = "correct-guess-hidden";
    $_SESSION["guess"] = "";
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="8">
        <title>Great Number Game</title>
        <link href="style.css" rel="stylesheet" type-"text/css">
    </head>
    <body>
        <div id="container">
            <h1>Welcome to the Great Number Game!</h1>
            <p>I am thinking of a number between 1 and 100<br>Take a guess!</p>

            <div id="<?= $_SESSION["left_id"] ?>">
                <h2>Too low!</h2>
            </div>

            <div id="middle">
                <form id="<?= $_SESSION["still_guessing_id"] ?>" action="process.php" method="post">
                    <input type="text" name="guess" value="<?= $_SESSION['guess'] ?>">
                    <input type="submit" value="Submit">
                </form>
                <form id="<?= $_SESSION["correct_guess_id"] ?>" action="process.php" method="post">
                    <h2>55 was the number</h2>
                    <input type="submit" name="play-again" value="Play Again">
                </form>
            </div>

            <div id="<?= $_SESSION["right_id"] ?>">
                <h2>Too high!</h2>
            </div>

        </div>
    </body>
</html>
