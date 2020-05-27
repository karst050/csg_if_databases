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
        <title>Barcelona</title>
        <link rel="stylesheet" type="text/css" href="../css/design.css">
    </head>
    <body>
        <h1>Grand Prix van Spanje</h1>
        <br>
        <h2>Circuit de Barcelona-Catalunya:</h2>
        <table>
            <tr>
                <td>Eerste Grand Prix:</td>
                <td>1991</td>
            </tr>
            <tr>
                <td>Circuit lengte:</td>
                <td>4,655 km</td>
            </tr>
            <tr>
                <td>Aantal rondes:</td>
                <td>66</td>
            </tr>
            <tr>
                <td>Totale race lengte:</td>
                <td>307,104 km</td>
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
                <td>1:18,441, D. Ricciardo, Red Bull (2018)</td>
            </tr>
        </table>
        <br>
        <img src="../images/circuits/barcelona.png" alt="Circuit" style="width:700px; margin: 15px;">
        <p>
            De Grand Prix van Spanje wordt gereden op Circuit de Barcelona-Catalunya. Voordat het circuit aangelegd werd racete de Formule 1 
            op verschillende circuits in Spanje, maar nooit een vast circuit. In 1989 begon de bouw van het circuit vlak buiten Barcelona.
        </p>
        <p>
            In 1991 werd de Grand Prix gereden, de race werd gewonnen door Nigel Mansell voor Williams. Sindsdien is er elk jaar geracet op 
            het circuit. Ook wordt het circuit door de Formule 1 gebruikt voor de winter testen. De auto’s moeten namelijk voor het seizoen 
            begint getest worden, hele dagen lang rijden de teams over het circuit en doen allemaal tests om de auto te begrijpen.
        </p>
        <p>
            Het circuit heeft een goede combinatie van hoge- en langzame snelheidsbochten. Ook zijn er een paar uitdagende bochten, zo hebben 
            de coureurs in bocht 3 erg veel last van onderstuur, waardoor de auto makkelijk van de baan afschiet. Daarnaast bestaat de laatste sector
            uit een paar erg lastige bochten.
        </p>
    </body>
</html>

<?php
    require('../php/footer.php');
?>