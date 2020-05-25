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
        <title>F1 Teams</title>
        <link rel="stylesheet" type="text/css" href="../css/design.css">
    </head>
    <body>
        <div class=hoofddeel>
            <div class="team">
                Mercedes-AMG Petronas
                <a href="http://example.com">
                    <span class="link"></span>
                </a>
            </div>
            <div class="team">
                Scuderia Ferrari
                <a href="http://example.com">
                    <span class="link"></span>
                </a>
            </div>
            <div class="team">
                Aston Martin Red Bull Racing
                <a href="http://example.com">
                    <span class="link"></span>
                </a>
            </div>
            <div class="team">
                McLaren F1
                <a href="http://example.com">
                    <span class="link"></span>
                </a>
            </div>
            <div class="team">
                Renault F1
                <a href="http://example.com">
                    <span class="link"></span>
                </a>
            </div>
            <div class="team">
                Scuderia AlphaTauri
                <a href="http://example.com">
                    <span class="link"></span>
                </a>
            </div>
            <div class="team">
                BWT Racing Point F1
                <a href="http://example.com">
                    <span class="link"></span>
                </a>
            </div>
            <div class="team">
                Alfa Romeo Racing
                <a href="http://example.com">
                    <span class="link"></span>
                </a>
            </div>
            <div class="team">
                Haas F1 Team
                <a href="http://example.com">
                    <span class="link"></span>
                </a>
            </div>
            <div class="team">
                ROKiT Williams Racing
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