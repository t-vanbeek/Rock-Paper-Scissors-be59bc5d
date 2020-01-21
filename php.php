<?php
session_start();

?>

<!DOCTYPE html>
<link href="style.css" rel="stylesheet">
<link href="rps.png" rel="icon" type="icon.png" />
<html lang="nl-NL">
<meta charset="UTF-8">
<title>Steen, Papier, Schaar</title>

<head>
    <H1>Steen, Papier, Schaar</H1>

<body>
    <h3>Speler 1</h3>
    <?php
    if (isset($_POST['RPS'])) {
        $p1 = false;
    } else {
        $p1 = true;
    }
    if ($p1 === true) {
        echo ("<form id='p1' action='php.php' method='POST'>
        <input type='radio' name='RPS' value='Steen'>Steen<br>
        <input type='radio' name='RPS' value='Papier'>Papier<br>
        <input type='radio' name='RPS' value='Schaar'>Schaar<br>
        <input type='submit' value='Submit'>
    </form>");

        if (isset($_POST['RPS'])) {
            setcookie("player1", $_POST['RPS']);
            $p1 = false;
        }
    } else
        echo "";
    ?>
    <h3>Speler 2</h3>
    <?php
    $p2 = false;
    if ($p1 === false) {
        echo ("<form id='p2' action='php.php' method='POST'>
        <input type='radio' name='RPS2' value='Steen'>Steen<br>
        <input type='radio' name='RPS2' value='Papier'>Papier<br>
        <input type='radio' name='RPS2' value='Schaar'>Schaar<br>
        <input type='submit' value='Submit'>
    </form>");

        if (isset($_POST['RPS2'])) {
            setcookie("player2", $_POST['RPS2']);
            $p2 = false;
        }
    } else
        echo "";
    ?>
</body>
</head>

</html>