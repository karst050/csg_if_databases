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
        <title>F1 Coureurs</title>
        <link rel="stylesheet" type="text/css" href="../css/design.css">
    </head>
    <body>
         <div class=hoofddeel>
            <div class="coureur">
                Lewis Hamilton
                <a href="http://example.com">
                    <span class="link"></span>
                </a>
            </div>
            <div class="coureur">
                Valtteri Bottas
                <a href="http://example.com">
                    <span class="link"></span>
                </a>
            </div>
            <div class="coureur">
                Sebastian Vettel
                <a href="http://example.com">
                    <span class="link"></span>
                </a>
            </div>
            <div class="coureur">
                Charles Leclerc
                <a href="http://example.com">
                    <span class="link"></span>
                </a>
            </div>
            <div class="coureur">
                Max Verstappen
                <a href="http://example.com">
                    <span class="link"></span>
                </a>
            </div>
            <div class="coureur">
                Alexander Albon
                <a href="http://example.com">
                    <span class="link"></span>
                </a>
            </div>
            <div class="coureur">
                Carlos Sainz
                <a href="http://example.com">
                    <span class="link"></span>
                </a>
            </div>
            <div class="coureur">
                Lando Norris
                <a href="http://example.com">
                    <span class="link"></span>
                </a>
            </div>
            <div class="coureur">
                Daniel Ricciardo
                <a href="http://example.com">
                    <span class="link"></span>
                </a>
            </div>
            <div class="coureur">
                Esteban Ocon
                <a href="http://example.com">
                    <span class="link"></span>
                </a>
            </div>
            <div class="coureur">
                Pierre Gasly
                <a href="http://example.com">
                    <span class="link"></span>
                </a>
            </div>
            <div class="coureur">
                Daniil Kvyat
                <a href="http://example.com">
                    <span class="link"></span>
                </a>
            </div>
            <div class="coureur">
                Sergio Perez
                <a href="http://example.com">
                    <span class="link"></span>
                </a>
            </div>
            <div class="coureur">
                Lance Stroll
                <a href="http://example.com">
                    <span class="link"></span>
                </a>
            </div>
            <div class="coureur">
                Kimi Räikkönen
                <a href="http://example.com">
                    <span class="link"></span>
                </a>
            </div>
            <div class="coureur">
                Antonio Giovinazzi
                <a href="http://example.com">
                    <span class="link"></span>
                </a>
            </div>
            <div class="coureur">
                Romain Grosjean
                <a href="http://example.com">
                    <span class="link"></span>
                </a>
            </div>
            <div class="coureur">
                Kevin Magnussen
                <a href="http://example.com">
                    <span class="link"></span>
                </a>
            </div>
            <div class="coureur">
                George Russell
                <a href="http://example.com">
                    <span class="link"></span>
                </a>
            </div>
            <div class="coureur">
                Nicholas Latifi
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