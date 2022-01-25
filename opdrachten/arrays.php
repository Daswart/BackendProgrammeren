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

//Opgave 16
echo "<br>---- Opgave 16: ";
$random_keys =  array_rand($producten, 3);
echo "<br>Eerste random product:". $producten[$random_keys[0]];
echo "<br>Tweede random product:". $producten[$random_keys[1]]; 

//Opgave 17
function printArray($item, $key){
      echo "<br>$key" . ": " . "<i>$item</i>";  
}
echo "<br>---- Opgave 17: Producten array doorlopen: ";
array_walk($producten, 'printArray');

//Opgave 18
$getallen = ["nul", "een", "twee", "drie", "vier", "vijf"];
$tools = ["boek", "pen", "laptop", "potlood"];
$tekst1 = implode("*", $getallen);
echo "<br>---- Opgave 18: Array getallen in tekst1 converteren: $tekst1";
$tekst2 = implode("|", $tools);
echo "<br>---- Opgave 18: Array tools in tekst2 converteren: $tekst2";

//Opgave 19
echo "<br>---- Opgave 19; Tekst1 in array1 converten:";
$array1 = explode("*", $tekst1);
array_walk($array1, 'printArray');
echo "<br>---- Opgave 19; Tekst2 in array2 converten:";
$array2 = explode("|", $tekst2);
array_walk($array2, 'printArray');

//Opgave 20
$boeken = array(
    array("titel" => "Stoner", "auteur" => "John Williams", 
    "genre" => "Fictie", "prijs" => 19.99),
    array("titel" => "De cirkel", "auteur" => "Dave Eggers", 
    "genre" => "Fictie", "prijs" => 22.50),
    array("titel" => "Rayuela", "auteur" => "Julio Cortazar", 
    "genre" => "Fictie", "prijs" => 25.50)
);
echo "<br>---- Opgave 20: Boeken-array aangemaakt";

//Opgave 21
echo "<br>---- Opgave 21: Boeken recursief doorlopen:";
array_walk_recursive($boeken, "printArray"); 

//Opgave 22
$nieuweboeken = array(
    array("titel" => "Spijt", "auteur" => "Carry Slee", 
    "genre" => "Fictie", "prijs" => 12.99),
    array("titel" => "Debet", "auteur" => "Saskia Noort", 
    "genre" => "Fictie", "prijs" => 33.50)
);
echo "<br>---- Opgave 22: Twee arrys samenvoegen: ";
$boeken = array_merge($boeken, $nieuweboeken);
array_walk_recursive($boeken, "printArray");

//Opgave 23
echo "<br>---- Opgave 23:Array-elementen kopiëren";
$oudeboeken = array_slice($boeken, 0, 2);
array_walk_recursive($oudeboeken, 'printArray'); 
?>