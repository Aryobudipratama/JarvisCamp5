<?php 
require_once("lib/function.php");
//include_once("");


salam("Wafi", "Happy");

salam("Aryo", "Ceria");

/**
 * for loop
 */
for ($i=1; $i < 10; $i++) { 
    echo "$i";
}

echo "<br>";
/**
 * While loop
 */

$a =1;
while ($a < 10) {
    echo "$a";
    $a++; //bisa di tulis juga $a = $a = 1;
}

echo "<br>";
/**
 * Do while loop
 */

$b =0;
do {
    $b++;
    echo "$b";
} while ($b <= 10);

echo "<br>";
/**
 * foreach loop
 */

$array = ["Wafi", "Aryo", "Wifi"];

foreach ($array as $key => $value) {
    $no = $key + 1;
    echo $no. " - $value <br>";
}
?>