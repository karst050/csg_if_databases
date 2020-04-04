<?PHP
$titel=str_replace("_"," ",substr(__FILE__,strpos(__FILE__,"opdracht"),-4));
include('opdracht_begin.php');
/****************************
TYP HIERONDER JOUW PHPCODE
****************************/

// Maak een tweedimenionale array, ofwel een array van arrays
$speelveld=array(
                  array(1,2,3,4,5),
                  array(6,7,8,9,10),
                  array(11,12,13,14,15),
                  array(16,17,18,19,20),
                  array(21,22,23,24,25),
                );
echo "<h2>De negen is numeriek: ".$speelveld[1][3];
echo " | De zes is numeriek: ".$speelveld[1][0]."</h2>";

// Maak een HTML-tabel met opmaak
echo '<table style="border-collapse: collapse; width: 500px; background: white; text-align: center; font-size: 3em;">';

foreach ($speelveld as $rij) {
  // met tr wordt voor elk element uit $speelveld nieuwe rij in de tabel gemaakt
  echo '<tr style="height: 100px;">';
  foreach ($rij as $kolom) {
    // met td wordt voor elk element uit de betreffende $rij een nieuwe kolom (cel) in de huidige rij van de tabel gemaakt
    echo '<td style="border: 1px solid orange; padding: 5px;">'.$kolom.'</td>';    
  }
  echo '</tr>';
}
// HTML-einde van de tabel
echo '</table>';
/*
echo "<pre>Speelveld:";
print_r($speelveld);
echo "</pre>";

/****************************
EINDE VAN JOUW PHPCODE
****************************/
include('opdracht_eind.php');
?>