<?PHP
$titel=str_replace("_"," ",substr(__FILE__,strpos(__FILE__,"opdracht"),-4));
include('opdracht_begin.php');
/****************************
TYP HIERONDER JOUW PHPCODE
****************************/

$leerling=array('nr' => 149395, 'voornaam' => 'Sjoerd', 'achternaam' => 'Karst');
$leerling['geboortejaar']=2002;
echo $leerling['voornaam']."".$leerling['achternaam']." werd geboren in ".$leerling['geboortejaar'].".<br>";

array_combine($leerling['voornaam'],$leerling['achternaam']);
echo "<pre>";
$aanpassing=array('nr' => 150000);
$nieuwe=array_replace($leerling,$aanpassing);
echo $nieuwe;



echo "<pre>Leerling:";
print_r($leerling);
echo "</pre>";

/****************************
EINDE VAN JOUW PHPCODE
****************************/
include('opdracht_eind.php');
?>