<?php
include('database.php');
session_start();
if (isset($_POST['mail'])) {
    $mail = $_POST['mail'];
    $pass = $_POST['pass'];
    $sql = "SELECT * FROM accounts WHERE email='".$mail."' AND wachtwoord='".$pass."'";
    $records = mysqli_query($DBverbinding, $sql);
    if (mysqli_num_rows($records) == 1) {
        $_SESSION["user"] = "$mail";
        $_SESSION["melding"] = "U bent ingelogd met {$_SESSION["user"]}.";
        $_SESSION["alert"] = 1; // positieve alert
        header("Location: circuits.php");
    }
    else {
        $_SESSION["melding"] = "Het is niet gelukt om in te loggen. Probeer het opnieuw.";
        $_SESSION["alert"] = 0; 
        header("Location: ../index.php");
    }
}
?>