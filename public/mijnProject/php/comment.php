<?php
    error_reporting(E_ALL & ~E_NOTICE);
    require('database.php');
    $id = $_GET["id"];

    $naam = [];    
    $comment = [];

    $sql = "SELECT naam FROM comments WHERE plaats_id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $naam = mysqli_fetch_array($record);

    $sql = "SELECT comment FROM comments WHERE plaats_id=$id";
    $record = mysqli_query($DBverbinding, $sql);
    $comment = mysqli_fetch_array($record);
?>

<!doctype html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="Sjoerd & Bart">
        <link rel="stylesheet" type="text/css" href="css/design.css?>">
    </head>
    <body>
        <h2>Comments:</h2>
        <?php
                echo $naam[1];
            ?>
        
        
    </body>
</html>