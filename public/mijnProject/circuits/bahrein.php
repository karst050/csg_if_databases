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
        <title>Bahrein</title>
        <link rel="stylesheet" type="text/css" href="../css/design.css">
    </head>
    <body>
        <h1>Grand Prix van Bahrein</h1>
        <br>
        <h2>Bahrain International Circuit:</h2>
        <table>
            <tr>
                <td>Eerste Grand Prix:</td>
                <td>2004</td>
            </tr>
            <tr>
                <td>Circuit lengte:</td>
                <td>5,412 km</td>
            </tr>
            <tr>
                <td>Aantal rondes:</td>
                <td>57</td>
            </tr>
            <tr>
                <td>Totale race lengte:</td>
                <td>308,238 km</td>
            </tr>
            <tr>
                <td>Aantal bochten:</td>
                <td>15</td>
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
                <td>Circuit</td>
            </tr>
            <tr>
                <td>Laatste winnaar:</td>
                <td>L. Hamilton, Mercedes (2019)</td>
            </tr>
            <tr>
                <td>Ronde record:</td>
                <td>1:31,447, P. De la Rosa, McLaren (2005)</td>
            </tr>
        </table>
        <br>
        <img src="../images/circuits/bahrein.png" alt="Circuit" style="width:700px; margin: 15px;">
        <p>
            De Grand Prix van Bahrein wordt gereden op het Bahrain International Circuit. In 2002 begon de bouw van het circuit. Omdat Bahrein 
            een grote woestijn is hadden de ontwerpers van het circuit een grote lege vlakte om mee te werken, waardoor er geen rekening gehouden 
            moest worden met bijvoorbeeld hoogteverschillen, waardoor er veel vrijheid was tijdens het ontwerpen.
        </p>
        <p>
            In 2004 werd de Grand Prix voor het eerst gereden en hiermee was het de eerste Formule 1 race in het Midden-Oosten. De race werd
            gewonnen door Michael Schumacher voor Ferrari. Het circuit heeft eigenlijk geen veranderingen gezien na de eerste race. 
            Maar sinds 2014 wordt de race vlak na zonsondergang gereden en wordt het circuit verlicht door grote schijnwerpers.
        </p>
        <p>
            Het circuit is erg lastig voor de coureurs, door de hoge temperaturen in de woestijn van Bahrein is het voor de coureurs fysiek
            erg zwaar. Maar door de vaak hoge windsnelheden die vaak van richting veranderen, het zand van de woestijn en de sterk wisselende 
            temperatuur is het vaak erg lastig om een goede set-up voor de auto te bedenken.
        </p>
        <p>
            De Grand Prix van Bahrein zorgt meestal voor erg goede races met veel inhaalacties. Dit komt door de grote, brede bochten en 
            lange rechte stukken. Vaak is de tactiek van het team ook een erg belangrijk onderdeel van de race, waardoor de race vaak 
            onverwachte uitkomsten heeft als een team de verkeerde tactiek kiest.
        </p>
    </body>
</html>

<?php
    require('../php/footer.php');
?>