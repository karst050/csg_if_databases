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
        <title>Zandvoort</title>
        <link rel="stylesheet" type="text/css" href="../css/design.css">
    </head>
    <body>
        <h1>Grand Prix van Nederland</h1>
        <br>
        <h2>Zandvoort Circuit:</h2>
        <table>
            <tr>
                <td>Eerste Grand Prix:</td>
                <td>1952</td>
            </tr>
            <tr>
                <td>Circuit lengte:</td>
                <td>4,259 km</td>
            </tr>
            <tr>
                <td>Aantal rondes:</td>
                <td>72</td>
            </tr>
            <tr>
                <td>Totale race lengte:</td>
                <td>306,648 km</td>
            </tr>
            <tr>
                <td>Aantal bochten:</td>
                <td>15</td>
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
                <td>N. Lauda, McLaren (1985)</td>
            </tr>
            <tr>
                <td>Ronde record:</td>
                <td>1:16,538, A. Prost, McLaren (1985)</td>
            </tr>
        </table>
        <br>
        <img src="../images/circuits/zandvoort.png" alt="Circuit" style="width:700px; margin: 15px;">
        <p>
            De Grand Prix van Nederland wordt gereden in de duinen van Zandvoort. In 1948 werd het circuit aangelegd, voor het circuit werden 
            wegen gebruikt die de Duitsers in de Tweede Wereldoorlog hadden aangelegd door de duinen. De wegen werden met elkaar verbonden 
            en soms met elkaar verbonden om zo het circuit te vormen. Maar dit was nog voordat de Formule 1 bestond.
        </p>
        <p>
            In 1952 werd de Grand Prix voor het eerst gereden, de race werd gewonnen door Alberto Ascari voor Ferrari. De race was een van 
            de gevaarlijkste Formule 1 races en heeft meerdere coureurs het leven gekost in de 33 jaar dat er geracet werd. In 1985 werd de 
            laatste Formule 1 race in Zandvoort gehouden, wat resulteerde in een van de meest legendarische podiums die de Formule 1 ooit 
            heeft gezien: Niki Lauda op P1, Alain Prost op P2 en Aryton Senna op P3.
        </p>
        <p>
            Nadat Max Verstappen een enorme hoeveelheid fans heeft verkregen in Nederland in de afgelopen jaren is besloten om de Formule 1 
            terug te laten keren naar Zandvoort. Het circuit werd wel helemaal aangepast om te voldoen aan de nieuwe eisen van de Formule 1.
        </p>
        <p>
            Het circuit zal een van de meest uitdagende races worden, zo beschreven de coureurs het circuit als ‘Really quick’, 
            ‘pretty insane’ en ‘crazy’. Twee bochten zijn omgebouwd tot zogenaamde ‘kombochten’, waar de auto als ware door een komvorm rijd. 
            Het circuit zal waarschijnlijk voor erg goede races zorgen, maar het is onduidelijk wanneer de race gereden wordt. Hij stond 
            gepland voor 20 mei, maar is door de corona-pandemie uitgesteld naar een onbepaalde datum.
        </p>
    </body>
</html>

<?php
    require('../php/footer.php');
?>