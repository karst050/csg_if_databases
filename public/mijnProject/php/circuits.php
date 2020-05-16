<?php
error_reporting(E_ALL & ~E_NOTICE);
require('database.php');
require('header.php');

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
        <title>F1 Circuits</title>
        <link rel="stylesheet" type="text/css" href="../css/design.css">
    </head>
    <body>
        <div class=hoofddeel style="height: 2000px;">
            <div class="circuit">1</div>
            <div class="circuit">2</div>
            <div class="circuit">3</div>
            <div class="circuit">4</div>
            <div class="circuit">5</div>
            <div class="circuit">6</div>
            <div class="circuit">7</div>
            <div class="circuit">8</div>
            <div class="circuit">9</div>
            <div class="circuit">10</div>
            <div class="circuit">11</div>
            <div class="circuit">12</div>
            <div class="circuit">13</div>
            <div class="circuit">14</div>
            <div class="circuit">15</div>
            <div class="circuit">16</div>
            <div class="circuit">17</div>
            <div class="circuit">18</div>
            <div class="circuit">19</div>
            <div class="circuit">20</div>
            <div class="circuit">21</div>
            <div class="circuit">22</div>

        </div>
    </body>
</html>

<?php
 require('footer.php');
?>