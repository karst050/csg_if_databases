<?php
error_reporting(E_ALL & ~E_NOTICE);
require('database.php');
//maak databaseverbinding met de gegevens uit database.php
$DBverbinding = mysqli_connect($servernaam, $gebruikersnaam, $wachtwoord, $database);
// Controleer de verbinding
if (!$DBverbinding) {
// Geef de foutmelding die de server teruggeeft en stop met de uitvoer van PHP (die)
die("Verbinding mislukt: " . mysqli_connect_error());
}
require('header.php');
?>

<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>F1 Circuits</title>
        <link rel="stylesheet" type="text/css" href="../css/design.css">
    </head>
    <body>
        <div class=hoofddeel>
        
            <div class="circuit">
                Melbourne
                <a href="../circuits/melbourne.php">
                    <span class="link"></span>
                </a>
            </div>
            <div class="circuit">
                Bahrein
                <a href="../circuits/bahrein.php">
                    <span class="link"></span>
                </a>
            </div>
            <div class="circuit">
                Hanoi
                <a href="../circuits/hanoi.php">
                    <span class="link"></span>
                </a>
            </div>
            <div class="circuit">
                Shanghai
                <a href="../circuits/shanghai.php">
                    <span class="link"></span>
                </a>
            </div>
            <div class="circuit">
                Zandvoort
                <a href="../circuits/zandvoort.php">
                    <span class="link"></span>
                </a>
            </div>
            <div class="circuit">
                Barcelona
                <a href="../circuits/barcelona.php">
                    <span class="link"></span>
                </a>
            </div>
            <div class="circuit">
                Monaco
                <a href="../circuits/monaco.php">
                    <span class="link"></span>
                </a>
            </div>
            <div class="circuit">
                Baku
                <a href="http://example.com">
                    <span class="link"></span>
                </a>
            </div>
            <div class="circuit">
                Montreal
                <a href="http://example.com">
                    <span class="link"></span>
                </a>
            </div>
            <div class="circuit">
                Marseille
                <a href="http://example.com">
                    <span class="link"></span>
                </a>
            </div>
            <div class="circuit">
                Spielberg
                <a href="http://example.com">
                    <span class="link"></span>
                </a>
            </div>
            <div class="circuit">
                Silverstone
                <a href="http://example.com">
                    <span class="link"></span>
                </a>
            </div>
            <div class="circuit">
                Budapest
                <a href="http://example.com">
                    <span class="link"></span>
                </a>
            </div>
            <div class="circuit">
                Spa-Franchorchamps
                <a href="http://example.com">
                    <span class="link"></span>
                </a>
            </div>
            <div class="circuit">
                Monza
                <a href="http://example.com">
                    <span class="link"></span>
                </a>
            </div>
            <div class="circuit">
                Singapore
                <a href="http://example.com">
                    <span class="link"></span>
                </a>
            </div>
            <div class="circuit">
                Sochi
                <a href="http://example.com">
                    <span class="link"></span>
                </a>
            </div>
            <div class="circuit">
                Suzuka
                <a href="http://example.com">
                    <span class="link"></span>
                </a>
            </div>
            <div class="circuit">
                Austin
                <a href="http://example.com">
                    <span class="link"></span>
                </a>
            </div>
            <div class="circuit">
                Mexico-city
                <a href="http://example.com">
                    <span class="link"></span>
                </a>
            </div>
            <div class="circuit">
                São Paulo
                <a href="http://example.com">
                    <span class="link"></span>
                </a>
            </div>
            <div class="circuit">
                Abu Dhabi
                <a href="http://example.com">
                    <span class="link"></span>
                </a>
            </div>

        </div>
    </body>
</html>

<?php
 require('footer.php');
?>