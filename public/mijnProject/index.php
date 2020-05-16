<?php
error_reporting(E_ALL & ~E_NOTICE);
require('php/database.php');

//maak databaseverbinding met de gegevens uit database.php
$DBverbinding = mysqli_connect($servernaam, $gebruikersnaam, $wachtwoord, $database);
// Controleer de verbinding
if (!$DBverbinding) {
// Geef de foutmelding die de server teruggeeft en stop met de uitvoer van PHP (die)
die("Verbinding mislukt: " . mysqli_connect_error());
}

?>

<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>Startpagina</title>
    </head>
    <body>
        <a href="https://8001-b639f778-3a3b-412f-90a0-2f90d268f70a.ws-eu01.gitpod.io/mijnProject/php/circuits.php">C I R C U I T S</a>
        <a href="https://8001-b639f778-3a3b-412f-90a0-2f90d268f70a.ws-eu01.gitpod.io/mijnProject/php/coureurs.php">C O U R E U R S</a>
        <a href="https://8001-b639f778-3a3b-412f-90a0-2f90d268f70a.ws-eu01.gitpod.io/mijnProject/php/teams.php">T E A M S</a>
    </body>
</html>