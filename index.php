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




 ?>
