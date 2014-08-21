<?php
session_start();

if (isset($_POST['guess']))
{
    $_SESSION['guess'] = $_POST['guess'];
}

if (isset($_POST['play-again']))
{
    $_SESSION = array();
    header("Location: index.php");
}

if (!isset($_SESSION['number']))
{
    $_SESSION['number'] = rand(1, 100);
}

if ($_SESSION['guess'] < $_SESSION['number'])
{
    $_SESSION["left_id"] = "left";
    $_SESSION["right_id"] = "right-hidden";
    $_SESSION["still_guessing_id"] = "still-guessing";
    $_SESSION["correct_guess_id"] = "correct-guess-hidden";
}

if ($_SESSION['guess'] > $_SESSION['number'])
{
    $_SESSION["left_id"] = "left-hidden";
    $_SESSION["right_id"] = "right";
    $_SESSION["still_guessing_id"] = "still-guessing";
    $_SESSION["correct_guess_id"] = "correct-guess-hidden";
}


if ($_SESSION['guess'] == $_SESSION['number'])
{
    $_SESSION["left_id"] = "left-hidden";
    $_SESSION["right_id"] = "right-hidden";
    $_SESSION["still_guessing_id"] = "still-guessing-hidden";
    $_SESSION["correct_guess_id"] = "correct-guess";
}


header('Location: index.php');
// End of file
