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
        <title>Shanghai</title>
        <link rel="stylesheet" type="text/css" href="../css/design.css">
    </head>
    <body>
        <h1>Grand Prix van China</h1>
        <br>
        <h2>Shanghai International Circuit:</h2>
        <table>
            <tr>
                <td>Eerste Grand Prix:</td>
                <td>2004</td>
            </tr>
            <tr>
                <td>Circuit lengte:</td>
                <td>5,451 km</td>
            </tr>
            <tr>
                <td>Aantal rondes:</td>
                <td>56</td>
            </tr>
            <tr>
                <td>Totale race lengte:</td>
                <td>305,066 km</td>
            </tr>
            <tr>
                <td>Aantal bochten:</td>
                <td>16</td>
            </tr>
            <tr>
                <td>Aantal DRS-zones:</td>
                <td>2</td>
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
                <td>1:32,238, M. Schumacher, Ferrari (2004)</td>
            </tr>
        </table>
        <br>
        <img src="../images/circuits/shanghai.png" alt="Circuit" style="width:700px; margin: 15px;">
        <p>
            De Grand Prix van China wordt gereden op het Shanghai International Circuit. In 2003 begon de constructie van een van de 
            duurste circuits in de Formule 1. In het Jiading District in Shanghai werd het circuit gebouwd, maar toch is het geen 
            straatcircuit.
        </p>
        <p>
            In 2004 werd de Grand Prix voor het eerst gereden, waarna deze werd gewonnen door Rubens Barrichello voor Ferrari. Het circuit heeft 
            sinds zijn introductie vaak grote geldproblemen gehad. En in de afgelopen 15 jaar leek het er meerdere keren op dat het circuit 
            failliet zou gaan en geen Formule 1 race zou kunnen organiseren. Maar tot nu toe blijft de race op de kalender staan. In 2019 had
            het circuit de eer om de duizendste Formule 1 race te organiseren.
        </p>
        <p>
            Het circuit heeft een paar erg lastige bochten, de combinatie van bochten 1, 2, 3 en 4 zorgt vaak voor indrukwekkende gevechten. 
            Bij de start is deze combinatie van bochten vaak erg chaotisch en gaat er vaak iemand van de baan af. Sector 2 bestaat bijna 
            volledig uit een combinatie van erg snelle bochten en de laatste sector bestaat uit 2 lange rechte stukken waar erg hoge snelheden
            worden behaald.
        </p>
        <p>
            De Grand Prix van China zorgt meestal voor leuke races. Dit komt deels door de lange rechte stukken, waar vaak inhaalacties 
            op hoge snelheid worden gemaakt, waarna de coureurs vaak zij aan zij met 330 km/h een haarspeldbocht in rijden. Daarnaast worden 
            er in de combinatie van bocht 1 tot 4 vaak gewaagde inhaalacties gemaakt. Dit zorgt vaak voor spectaculaire gevechten.
        </p>
    </body>
</html>

<?php
    require('../php/footer.php');
?>