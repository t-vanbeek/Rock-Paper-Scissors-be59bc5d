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


    <h3>Speler 1</h3>
    <?php

    if (isset($_POST['RPS'])) {
        $input = false;
    } else {
        $input = true;
    }
    if ($input === true) {
        echo ("<form id='input' method='POST'>
        <input type='radio' name='RPS' value='Steen'>Steen<br>
        <input type='radio' name='RPS' value='Papier'>Papier<br>
        <input type='radio' name='RPS' value='Schaar'>Schaar<br>
        <input type='submit' value='Submit'>
    </form>");

        if (isset($_POST['RPS'])) {
            $_SESSION['player1'] = $_POST['RPS'];
            setcookie("player1", $_POST['RPS']);
            $input = false;
        }
    } else
        echo "";
    ?>
    <h3>Speler 2</h3>
    <?php
    $p2 = false;
    if ($input === false) {
        echo ("<form id='p2' action='spel.php' method='POST'>
        <input type='radio' name='RPS2' value='Steen'>Steen<br>
        <input type='radio' name='RPS2' value='Papier'>Papier<br>
        <input type='radio' name='RPS2' value='Schaar'>Schaar<br>
        <input type='submit' value='Submit'>
    </form>");

        if (isset($_POST['RPS2'])) {
            $_SESSION['player2'] = $_POST['RPS2'];
            setcookie("player2", $_POST['RPS2']);
            $p2 = false;
        }
    } else {
        echo "";
    }
    ?>
</body>


</html>