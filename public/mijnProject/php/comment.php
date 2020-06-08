<?php
    error_reporting(E_ALL & ~E_NOTICE);
    require('database.php');
    $id = $_GET["id"];

$sql = "SELECT naam FROM comments WHERE plaats_id = $id";
$records = mysqli_query($DBverbinding, $sql);
$namen = [];
if (mysqli_num_rows($records) > 0) {
    while($record = mysqli_fetch_assoc($records)) {
        array_push($namen,$record);
    }
}

$sql = "SELECT comment FROM comments WHERE plaats_id = $id";
$records = mysqli_query($DBverbinding, $sql);
$comments = [];
if (mysqli_num_rows($records) > 0) {
    while($record = mysqli_fetch_assoc($records)) {
        array_push($comments,$record);
    }
}

 $sql = "SELECT naam FROM accounts";
    $record = mysqli_query($DBverbinding, $sql);
    $gebruiker = mysqli_fetch_array($record);
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
        <h2>Reacties:</h2>
<?php
if ($comments == []) {
    echo '<h4>Er zijn nog geen reacties, wees de eerste die iets achterlaat!</h4>';
}

else { 
    for ($i=0; $i < mysqli_num_rows($records); $i++) { 
        
    ?>
    <h4>
        <?php echo $namen[$i]['naam']; ?>:
    </h4>   
    <?php echo $comments[$i]['comment'];
    }
}  
?>
<br>
<br>

<form method="POST">
<h3>Typ hier uw reactie:</h3>
    <textarea name="comment" cols="40" rows="3"></textarea> <br>
	<input type="submit" name="reageer" value="post">
</form> 

<?php
    if (isset($_POST['reageer'])) {
        $reactie = $_POST["comment"];
        mysqli_query($DBverbinding, "INSERT INTO `comments` (`id`, `plaats_id`, `naam`, `comment`) VALUES (NULL, '$id', '$gebruiker[0]', '$reactie');");
        ?>
        echo("<meta http-equiv='refresh' content='1'>");
        <?php
    }

    else {

    }

?>
    </body>
</html>