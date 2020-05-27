<?php
    error_reporting(E_ALL & ~E_NOTICE);
    require('../php/database.php');
    require('../php/header.php');
    $DBverbinding = mysqli_connect($servernaam, $gebruikersnaam, $wachtwoord, $database);
    if (!$DBverbinding) {
        die("Verbinding mislukt: " . mysqli_connect_error());  
    }
?>

<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>Melbourne</title>
        <link rel="stylesheet" type="text/css" href="../css/design.css">
    </head>
    <body>
        <h1>Grand Prix van Australië</h1>
        <br>
        <h2>Albert Park:</h2>
        <table>
            <tr>
                <td>Eerste Grand Prix:</td>
                <td>1996</td>
            </tr>
            <tr>
                <td>Circuit lengte:</td>
                <td>5,303 km</td>
            </tr>
            <tr>
                <td>Aantal rondes:</td>
                <td>58</td>
            </tr>
            <tr>
                <td>Totale race lengte:</td>
                <td>307,574 km</td>
            </tr>
            <tr>
                <td>Aantal bochten:</td>
                <td>16</td>
            </tr>
            <tr>
                <td>Aantal DRS-zones:</td>
                <td>3</td>
            </tr>
            <tr>
                <td>Rijrichting:</td>
                <td>Met de klok mee</td>
            </tr>
            <tr>
                <td>Circuit type:</td>
                <td>Straatcircuit</td>
            </tr>
            <tr>
                <td>Laatste winnaar:</td>
                <td>V. Bottas, Mercedes (2019)</td>
            </tr>
            <tr>
                <td>Ronde record:</td>
                <td>1:24,125, M. Schumacher, Ferrari (2004)</td>
            </tr>
        </table>
        <br>
        <img src="../images/circuits/melbourne.png" alt="Circuit" style="width:700px; margin: 15px;">
        <p>
            De Grand Prix van Australië wordt gereden op het Albert Park circuit in Melbourne. Hiervoor werd de race gehouden in Adelaide, 
            maar in 1993 werd besloten om de Grand Prix te verplaatsten naar Melbourne. Het circuit zou grotendeels gereden worden over de 
            straten van Melbourne door het Albert Park en rond het Albert Park Lake.
        </p>
        <p>
            In 1996 werd de Grand Prix voor het eerst gereden en hij werd gewonnen door Damon Hill van Williams. Door de jaren heen zou het 
            circuit deels aangepast worden om te zorgen voor leukere en veiligere races. Maar het grootste deel van het circuit is hetzelfde 
            gebleven. Sinds de eerste race is Albert Park de eerste Grand Prix van het seizoen, waardoor het bij veel fans een speciale status heeft.
        </p>
        <p>
            Het circuit zelf wordt vaak beschreven als een snel maar makkelijk circuit. Volgens de coureurs is het redelijk makkelijk om de 
            bochten te leren en om een goede racelijn door de bochten te rijden. Tijdens de kwalificatieronde van Lewis Hamilton in 2018 
            bereikte hij een gemiddelde snelheid van wel 235 km/h. Maar omdat het circuit een straatcircuit is, is het vaak lastig om in te 
            halen, waardoor in de meeste races er weinig mooie inhaalacties worden gemaakt.
        </p>
    </body>
</html>

<?php
    require('../php/footer.php');
?>