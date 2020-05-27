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
        <title>Monaco</title>
        <link rel="stylesheet" type="text/css" href="../css/design.css">
    </head>
    <body>
        <h1>Grand Prix van Monaco</h1>
        <br>
        <h2>Circuit de Monaco:</h2>
        <table>
            <tr>
                <td>Eerste Grand Prix:</td>
                <td>1950</td>
            </tr>
            <tr>
                <td>Circuit lengte:</td>
                <td>3,337 km</td>
            </tr>
            <tr>
                <td>Aantal rondes:</td>
                <td>78</td>
            </tr>
            <tr>
                <td>Totale race lengte:</td>
                <td>260,286 km</td>
            </tr>
            <tr>
                <td>Aantal bochten:</td>
                <td>19</td>
            </tr>
            <tr>
                <td>Aantal DRS-zones:</td>
                <td>1</td>
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
                <td>L. Hamilton, Mercedes (2019)</td>
            </tr>
            <tr>
                <td>Ronde record:</td>
                <td>1:14,260, M. Verstappen, Red Bull (2018)</td>
            </tr>
        </table>
        <br>
        <img src="../images/circuits/monaco.png" alt="Circuit" style="width:700px; margin: 15px;">
        <p>
            De Grand Prix van Monaco wordt gereden op Circuit de Monaco. De eerste race die hier werd gereden was in 1929, en tijdens het 
            eerste seizoen van de Formule 1 werd de Grand Prix van Monaco al gereden.
        </p>
        <p>
            De eerste Formule 1 race in Monaco werd gewonnen door Juan Manuel Fangio voor Alfa Romeo. Sindsdien heeft de Formule 1 hier maar 
            een paar keer niet geracet en 2020 is de eerste keer sinds 65 jaar dat de race niet door gaat.
        </p>
        <p>
            Het circuit is het lastigste circuit waar gereden wordt. Het circuit gaat door de smalle straatjes van Monte Carlo met erg veel 
            hoogteverschillen. Elk klein foutje die de coureur maakt zal ervoor zorgen dat de auto de finish waarschijnlijk niet haalt, 
            elke fout wordt meteen afgestraft. Ook wordt er met hoge snelheid door een tunnel gereden, waardoor het erg lastig is om te zien 
            zodra de coureurs de tunnel uitkomen. De Grand Hotel hairpin is de langzaamste bocht op de Formule 1 kalender, de coureurs maken 
            met een snelheid van minder dan 40 km/h een bocht van bijna 180 graden.
        </p>
        <p>
            Vaak wordt gezegd dat een overwinning in Monaco veel beter voelt dan een overwinning ergens anders. Elke grote naam in de 
            Formule 1 heeft dan ook gewonnen in Monaco van Prost tot Rosberg. Maar de grootste winnaar van Monaco is Aryton Senna met 6 
            overwinningen. In slechte weersomstandigheden bereiken meestal meer auto’s de finish niet dan wel, zo wist in 1982 maar 1 auto 
            de finish te halen.
        </p>
        <p>
            Meestal is bij de Grand Prix van Monaco de kwalificatie belangrijker dan de race zelf, omdat er bijna niet ingehaald kan worden.
            Maar alsnog is de race een erg leuke om te kijken door de spanning van de race en de limieten die de coureurs zoeken.
        </p>
    </body>
</html>

<?php
    require('../php/footer.php');
?>