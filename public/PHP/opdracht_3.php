<?PHP
$titel=str_replace("_"," ",substr(__FILE__,strpos(__FILE__,"opdracht"),-4));
include('opdracht_begin.php');
/****************************
TYP HIERONDER JOUW PHPCODE
****************************/

$waarde=9/10;
$kwad=pow($waarde,2);
$rec=1/$kwad;
$afgerond=round($rec,7);
$beneden=floor($rec*1000000)/1000000;

echo "Het kwadraat van $waarde is $kwad.<br>
      Het omgekeerde daarvan is (afgerond:) $afgerond<br>
      $beneden<br>";

$a=pow(5,2);
$b=pow(3,2);
$c=round(sqrt($a+$b),3);
$mod=fmod(5,3);

echo "De wortel van 5 in het kwadraat plus 3 in het kwadraat is $c<br>
De restwaarde is $mod";

/****************************
EINDE VAN JOUW PHPCODE
****************************/
include('opdracht_eind.php');
?>