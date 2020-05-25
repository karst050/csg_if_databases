<?php
    error_reporting(E_ALL & ~E_NOTICE);
    require('database.php');
    require('header.php');
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
    test 
    </body>
</html>

<?php
    require('footer.php');
?>