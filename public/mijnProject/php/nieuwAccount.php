<?php
    require('database.php');
?>

<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>Nieuw account</title>
        <link rel="stylesheet" type="text/css" href="../css/design.css">
    </head>

    <body>
        <form method="POST">
            <input type="text" placeholder="naam:" id="naam" name="naam"> <br>
            <input type="email" placeholder="e-mail:" id="mail" name="mail"> <br>
            <input type="password" placeholder="wachtwoord:" id="pass" name="pass"> <br>
            <input type="password" placeholder="herhaal wachtwoord:" id="pass" name="pass2"> <br>
            <input type="submit" name="aanmaken" value="maak account aan">
        </form>

        <?php
            if (isset($_POST['aanmaken'])) {
                $naam = $_POST["naam"];
                $email = $_POST["mail"];
                $wachtwoord1 = $_POST["pass"];
                $wachtwoord2 = $_POST["pass2"];
                
                if($wachtwoord1 == $wachtwoord2) {
                    mysqli_query($DBverbinding, "INSERT INTO `accounts` (`id`, `naam`, `email`, `wachtwoord`) VALUES (NULL, '$naam', '$email', '$wachtwoord1');");
                }
                
                else {
                    ?>
                    <h3>Sorry deze wachtwoorden komen niet overeen.</h3>
                    <?php
                }             
            }

            else {
            }
        ?>
    </body>
</html>



