<meta charset="UTF-8">
<?php

# tekstimuutuja
$greeting = "Hello";
# täisarvuline muutuja
$nr = 1;
// kümnendmurd
$nr = 10.01221;
#tõeväärtusmuutuja
$bool = False;
/*
massiiv (php ja JS on array, python - list)
üherealine kommentaar # ja //
*/

$massiiv = array('nimi',1974, 10.81, 'Perenimi');
$esta = 'Eesti keel';
$mata = 'Matemaatika';
$fyss = 'Füüsika';
//sidusmassiivid
$hinded = array('Peeter'=>array($esta=>4, $mata=>4, $fyss=>3),
                'Mari'=>array($esta=>5, $mata=>4, $fyss=>3),
                'Jyri'=>array($esta=>4, $mata=>5, $fyss=>5));


echo "$greeting world!<br>";
echo '$greeting world <br>';


//echo $massiiv [0].'<br>';

//tingimuslause
if ($bool == False){
//massiivi sisu näitamine
//  print_r($massiiv);
for($i = 0; $i < count($massiiv); $i++ ) {
  echo $massiiv[$i]. '<br>';
}
} else { echo "tõeväärtus ei vasta nõutule"; }

 $hinded_id = array_keys($hinded);
 for ($i=0; $i < count($hinded); $i++ ){
   echo $hinded_id[$i]. '<br>';
   foreach ($hinded[$hinded_id[$i]] as $aine => $hinne) {
     echo $aine. " : ".$hinne. '<br>';

   }
   # code...
 }
$file = fopen('counter.txt', "w") or die("Ei saanud faili avada");
if(!$file){
$txt = 1;
fwrite($file, $txt);
fclose($file);
} else {
  $txt = fread($file, filesize('counter.txt'));
  $new_txt = $txt +1;
  fwrite($file, $new_txt);
  fclose($file);
}
$file = fopen('counter.txt', "r") or die("Ei saanud faili avada");
echo fread($file, filesize('counter.txt'));
fclose($file);


 ?>
