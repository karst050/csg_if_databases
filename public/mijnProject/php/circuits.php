<?php
error_reporting(E_ALL & ~E_NOTICE);
require('database.php');
require('header.php');
$id = $_GET["id"];


?>

<?php 
    if($id==0) {
?>

<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>F1 Circuits</title>
        <link rel="stylesheet" type="text/css" href="../css/design.css">
    </head>
    <body>
        <div class=hoofddeel>
            <div class="circuit">
                Melbourne
                <a href="circuits.php?id=1">
                    <span class="link"></span>
                
            </div>
            <div class="circuit">
                Bahrein
                <a href="circuits.php?id=2">
                    <span class="link"></span>
                </a>
            </div>
            <div class="circuit">
                Hanoi
                <a href="circuits.php?id=3">
                    <span class="link"></span>
                </a>
            </div>
            <div class="circuit">
                Shanghai
                <a href="circuits.php?id=4">
                    <span class="link"></span>
                </a>
            </div>
            <div class="circuit">
                Zandvoort
                <a href="circuits.php?id=5">
                    <span class="link"></span>
                </a>
            </div>
            <div class="circuit">
                Barcelona
                <a href="circuits.php?id=6">
                    <span class="link"></span>
                </a>
            </div>
            <div class="circuit">
                Monaco
                <a href="circuits.php?id=7">
                    <span class="link"></span>
                </a>
            </div>
            <div class="circuit">
                Baku
                <a href="circuits.php?id=8">
                    <span class="link"></span>
                </a>
            </div>
            <div class="circuit">
                Montreal
                <a href="circuits.php?id=9">
                    <span class="link"></span>
                </a>
            </div>
            <div class="circuit">
                Marseille
                <a href="circuits.php?id=10">
                    <span class="link"></span>
                </a>
            </div>
            <div class="circuit">
                Spielberg
                <a href="circuits.php?id=11">
                    <span class="link"></span>
                </a>
            </div>
            <div class="circuit">
                Silverstone
                <a href="circuits.php?id=12">
                    <span class="link"></span>
                </a>
            </div>
            <div class="circuit">
                Budapest
                <a href="circuits.php?id=13">
                    <span class="link"></span>
                </a>
            </div>
            <div class="circuit">
                Spa-Franchorchamps
                <a href="circuits.php?id=14">
                    <span class="link"></span>
                </a>
            </div>
            <div class="circuit">
                Monza
                <a href="circuits.php?id=15">
                    <span class="link"></span>
                </a>
            </div>
            <div class="circuit">
                Singapore
                <a href="circuits.php?id=16">
                    <span class="link"></span>
                </a>
            </div>
            <div class="circuit">
                Sochi
                <a href="circuits.php?id=17">
                    <span class="link"></span>
                </a>
            </div>
            <div class="circuit">
                Suzuka
                <a href="circuits.php?id=18">
                    <span class="link"></span>
                </a>
            </div>
            <div class="circuit">
                Austin
                <a href="circuits.php?id=19">
                    <span class="link"></span>
                </a>
            </div>
            <div class="circuit">
                Mexico-city
                <a href="circuits.php?id=20">
                    <span class="link"></span>
                </a>
            </div>
            <div class="circuit">
                São Paulo
                <a href="circuits.php?id=21">
                    <span class="link"></span>
                </a>
            </div>
            <div class="circuit">
                Abu Dhabi
                <a href="circuits.php?id=22">
                    <span class="link"></span>
                </a>
            </div>

        </div>
    </body>
</html>

<?php
    }

    else {
?>
    <?php
    $sql = "SELECT land FROM circuits WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $land = mysqli_fetch_array($record);

    $sql = "SELECT naam FROM circuits WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $naam = mysqli_fetch_array($record);

    $sql = "SELECT eerste FROM circuits WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $eerste = mysqli_fetch_array($record);

    $sql = "SELECT lengte FROM circuits WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $lengte = mysqli_fetch_array($record);

    $sql = "SELECT rondes FROM circuits WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $rondes = mysqli_fetch_array($record);

    $sql = "SELECT totaal FROM circuits WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $totaal = mysqli_fetch_array($record);

    $sql = "SELECT bochten FROM circuits WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $bochten = mysqli_fetch_array($record);

    $sql = "SELECT drs FROM circuits WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $drs = mysqli_fetch_array($record);

    $sql = "SELECT richting FROM circuits WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $richting = mysqli_fetch_array($record);

    $sql = "SELECT soort FROM circuits WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $soort = mysqli_fetch_array($record);

    $sql = "SELECT winnaar FROM circuits WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $winnaar = mysqli_fetch_array($record);

    $sql = "SELECT snelste FROM circuits WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $snelste = mysqli_fetch_array($record);

    $sql = "SELECT foto FROM circuits WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $foto = mysqli_fetch_array($record);

    $sql = "SELECT tekst1 FROM circuits WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $tekst1 = mysqli_fetch_array($record);

    $sql = "SELECT tekst2 FROM circuits WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $tekst2 = mysqli_fetch_array($record);

    $sql = "SELECT tekst3 FROM circuits WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $tekst3 = mysqli_fetch_array($record);

    $sql = "SELECT tekst4 FROM circuits WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $tekst4 = mysqli_fetch_array($record);

    $sql = "SELECT tekst5 FROM circuits WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $tekst5 = mysqli_fetch_array($record);

    $sql = "SELECT tekst6 FROM circuits WHERE id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $tekst6 = mysqli_fetch_array($record);
?>

<!DOCTYPE html>
<html lang="nl">

    <head>
        <title> <?php echo $foto[0]; ?> </title>
        <link rel="stylesheet" type="text/css" href="../css/design.css">
    </head>

    <body>
        <h1>Grand Prix van <?php echo $land[0]; ?> </h1>
        <br>
        <h2> <?php echo $naam[0]; ?> : </h2>

        <table>
            <tr>
                <td>Eerste Grand Prix:</td>
                <td> <?php echo $eerste[0]; ?> </td>
            </tr>
            <tr>
                <td>Circuit lengte:</td>
                <td> <?php echo $lengte[0]; ?> </td>
            </tr>
            <tr>
                <td>Aantal rondes:</td>
                <td> <?php echo $rondes[0]; ?> </td>
            </tr>
            <tr>
                <td>Totale race lengte:</td>
                <td> <?php echo $totaal[0]; ?> </td>
            </tr>
            <tr>
                <td>Aantal bochten:</td>
                <td> <?php echo $bochten[0]; ?> </td>
            </tr>
            <tr>
                <td>Aantal DRS-zones:</td>
                <td> <?php echo $drs[0]; ?> </td>
            </tr>
            <tr>
                <td>Rijrichting:</td>
                <td> <?php echo $richting[0]; ?> </td>
            </tr>
            <tr>
                <td>Circuit type:</td>
                <td> <?php echo $soort[0]; ?> </td>
            </tr>
            <tr>
                <td>Laatste winnaar:</td>
                <td> <?php echo $winnaar[0]; ?> </td>
            </tr>
            <tr>
                <td>Ronde record:</td>
                <td> <?php echo $snelste[0]; ?> </td>
            </tr>
        </table>

        <br>
        <img src="../images/circuits/<?= $foto[0]?>.png" alt="Circuit" style="width:700px; margin: 15px;">
        <br>

        <p>
            <?php echo $tekst1[0]; ?>
        </p>
        <p>
            <?php echo $tekst2[0]; ?>
        </p>
        <p>
            <?php echo $tekst3[0]; ?>
        </p>
        <p>
            <?php echo $tekst4[0]; ?>
        </p>
        <p>
            <?php echo $tekst5[0]; ?>
        </p>
        <p>
            <?php echo $tekst6[0]; ?>
        </p>

    </body>

</html>

<?php
    }
?>

<?php
 require('footer.php');
?>

