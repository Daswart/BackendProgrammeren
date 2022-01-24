<?php

//Opgave 5
echo "<br>---- Opgave 5";
$producten = [];
$producten[0] = "Boeken";
$producten[1] = "CD's";
$producten[2] = "Smartphones";
$producten[3] = "DVD's";

//Opgave 6
echo "<br>---- Opgave 6: print_r()";
print_r($producten);

//Opgave 7
echo "<br>---- Opgave 7: var_dump()";
var_dump($producten);

//Opgave 8
echo "<br>---- Opgave 8: ";
unset($producten[2]);
print_r($producten);

//Opgave 9
echo "<br>---- Opgave 9: ";
$gevonden = array_key_exists(1, $producten);
echo "Key 1 gevonden?: ".$gevonden;

//Opgave 10
echo "<br>---- Opgave 10: ";
$gevonden = in_array("Boeken", $producten);
echo "Boeken gevonden?: ". $gevonden;

//Opgave 11
echo "<br>---- Opgave 11: ";
$index = array_search("CD's", $producten);
echo "De index van CD's is: " . $index;

//Opgave 12
echo "<br>---- Opgave 12: ";
array_push($producten, "Laptops", "Tablets");
print_r($producten);

//Opgave 13
echo "<br>---- Opgave 13: ";
$laatsteElement = array_pop($producten);
echo $laatsteElement . " is verwijderd: ";
print_r($producten);

//Opgave 14
echo "<br>---- Opgave 14: ";
$eersteElement = array_shift($producten);
echo $eersteElement . " verwijderd: ";
print_r($producten);

//Opgave 15
echo "<br>---- Opgave 15: ";
array_unshift($producten, "TV's", "Stereo's");
echo "Tv's en Stereo's toegevoegd: ";
print_r($producten);

?>