<?php
session_start();
?>

<!DOCTYPE html>
<html lang="nl-NL">

<head>
    <link href="style.css" rel="stylesheet">
    <link href="rps.png" rel="icon" type="icon.png" />
    <meta charset="UTF-8">
    <title>Steen, Papier, Schaar</title>
</head>

<body>
    <H1>Steen, Papier, Schaar</H1>

    <?php
$player1Won = print("<h2>Speler 1 heeft Gewonnen!</h2>");

$player2Won = print("<h2>Speler 2 heeft Gewonnen!</h2>");

    if ($_COOKIE['player1'] !== $_COOKIE['player2']) {
        if ($_COOKIE['player1'] == 'steen' and $_COOKIE['player2'] == 'papier'){
            $player2Won . PHP_EOL;
            echo "Player 1 had: " . $_COOKIE['player1'] . PHP_EOL;
            echo "Player 2 had: " . $_COOKIE['player2'] . PHP_EOL;
        }
    }