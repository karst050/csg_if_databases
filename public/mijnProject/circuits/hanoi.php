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
        <title>Hanoi</title>
        <link rel="stylesheet" type="text/css" href="../css/design.css">
    </head>
    <body>
        <h1>Grand Prix van Vietnam</h1>
        <br>
        <h2>Hanoi Circuit:</h2>
        <table>
            <tr>
                <td>Eerste Grand Prix:</td>
                <td>2020 (voolopig uitgesteld)</td>
            </tr>
            <tr>
                <td>Circuit lengte:</td>
                <td>5,613 km</td>
            </tr>
            <tr>
                <td>Aantal rondes:</td>
                <td>55</td>
            </tr>
            <tr>
                <td>Totale race lengte:</td>
                <td>308,715 km</td>
            </tr>
            <tr>
                <td>Aantal bochten:</td>
                <td>23</td>
            </tr>
            <tr>
                <td>Aantal DRS-zones:</td>
                <td>3</td>
            </tr>
            <tr>
                <td>Rijrichting:</td>
                <td>Tegen de klok in</td>
            </tr>
            <tr>
                <td>Circuit type:</td>
                <td>Half straatcircuit</td>
            </tr>
            <tr>
                <td>Laatste winnaar:</td>
                <td>X</td>
            </tr>
            <tr>
                <td>Ronde record:</td>
                <td>X</td>
            </tr>
        </table>
        <br>
        <img src="../images/circuits/hanoi.png" alt="Circuit" style="width:700px; margin: 15px;">
        <p>
            De Grand Prix van Vietnam zal worden gereden op het Hanoi Circuit in Hanoi. In november van 2018 werd aangekondigd dat de 
            Formule 1 naar Vietnam zou gaan. Hierna begon de bouw in de straten van de Vietnamese hoofdstad. Veel straten moesten opnieuw 
            geasfalteerd worden om aan de eisen van de Formule 1 te voldoen. Daarnaast werden er ook nieuwe straten aangelegd om het 
            circuit compleet te maken.
        </p>
        <p>
            De race op het Hanoi Circuit zou de eerste Grand Prix zijn die in Vietnam werd gereden en stond gepland voor 5 april 2020. 
            Maar door de corona-pandemie is de race uitgesteld en is er geen zekerheid dat de race nog in 2020 gereden zal worden.
        </p>
        <p>
            Het circuit heeft een bijzondere samenstelling, er zijn erg lange rechte stukken waar snelheden tot 335 km/h worden verwacht, 
            maar er zijn ook meerdere haarspeldbochten. Naast snelle rechte stukken en langzame bochten zijn er ook hogesnelheidsbochten. 
            Het circuit is dus een combinatie van snelheid en langzame bochten. Daarnaast staan de muren op veel plekken dicht bij het 
            circuit, waardoor er geen ruimte is voor fouten.
        </p>
        <p>
            Het is nog niet zeker wat er verwacht moet worden van de Grand Prix van Vietnam, maar waarschijnlijk zal het een spectaculaire 
            race worden met een grote kans op safety cars.
        </p>
    </body>
</html>

<?php
    require('../php/footer.php');
?>