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
        <title>F1 Coureurs</title>
        <link rel="stylesheet" type="text/css" href="../css/design.css">
    </head>
    <body>
        <div class=keuzescherm style="height: 2000px;">
            <a>*****H O O F D D E E L*****</a>
        </div>
    </body>
</html>

<?php
 require('footer.php');
?>