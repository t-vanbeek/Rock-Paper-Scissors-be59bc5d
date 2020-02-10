<!DOCTYPE html>
<html class="backgroundcolor">
<?php session_start(); ?>
<head>
    <title>
        steen_papier_schaar
    </title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="color">
    <h1>
        Steen_Papier_Schaar!
    </h1>

    <?php
            if(isset($_POST['steen'])){
                $_SESSION['player:1'] = 'steen';
            }
            if(isset($_POST['papier'])){
                $_SESSION['player:1'] = 'papier';
            }
            if(isset($_POST['schaar'])){
                $_SESSION['player:1'] = 'schaar';
            }
            if(isset($_POST['steen2'])){
                $_SESSION['player:2'] = 'steen';
            }
            if(isset($_POST['papier2'])){
                $_SESSION['player:2'] = 'papier';
            }
            if(isset($_POST['schaar2'])){
                $_SESSION['player:2'] = 'schaar';
            }
    ?>

    <div>
            <?php 
                if($_SESSION['player:1'] == $_SESSION['player:2'] && isset($_POST['winnaarbekijken'])){
                    echo "Gelijkspel";
                }
                if($_SESSION['player:1'] == 'steen' && $_SESSION['player:2'] == 'papier' && isset($_POST['Gewonnen'] )){
                    echo "Player:2 Heeft_Gewonnen";
                }
                if($_SESSION['player:1'] == 'papier' && $_SESSION['player:2'] == 'schaar' && isset($_POST['Gewonnen'] )){
                    echo "Player:2 Heeft_Gewonnen";
                }
                if($_SESSION['player:1'] == 'schaar' && $_SESSION['player:2'] == 'steen' && isset($_POST['Gewonnen'] )){
                    echo "Player:2 Heeft_Gewonnen";
                }
                if($_SESSION['player:2'] == 'steen' && $_SESSION['player:1'] == 'papier' && isset($_POST['Gewonnen'] )){
                    echo "Player:1 Heeft_Gewonnen";
                }
                if($_SESSION['player:2'] == 'papier' && $_SESSION['player:1'] == 'schaar' && isset($_POST['Gewonnen'] )){
                    echo "Player:1 Heeft_Gewonnen";
                }
                if($_SESSION['player:2'] == 'schaar' && $_SESSION['player:1'] == 'steen' && isset($_POST['Gewonnen'] )){
                    echo "Player:1 Heeft_Gewonnen";
                }
                

            ?>
    </div>

    <div>
        <?php if(isset($_POST['winnaarbekijken'])) {
            echo "Speler 1:". $_SESSION['player:1'];
        }else{
            echo "Speler 1:";
        }
        ?>
        <br>
        <br>
        <?php if(isset($_POST['winnaarbekijken'])) {
        echo "Speler 2:". $_SESSION['player:2'];
        }else{
            echo "Speler 2:";
        }
        ?>
    </div>

<form  method="POST">
    <div class="playereen">
        <h3>Speler_1</h3>
            <input name="steen" type="submit" value="steen">
            <input name="papier" type="submit" value="papier">
            <input name="schaar" type="submit" value="schaar">
    </div>
    <div class="playertwee">
        <h3>Speler_2</h3>
            <input name="steen2" type="submit" value="steen">
            <input name="papier2" type="submit" value="papier">
            <input name="schaar2" type="submit" value="schaar">
    </div>
    <div class="showbutton">
            <h3>Winnaar_Weergeven</h3>
            <input name="winnaarbekijken" type="submit" value="Winnaar_Bekijken">
    </div>
</form>
</body>

</html>