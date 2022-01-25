<?php

//Stap 1
$playlist = array(
array("genre" => "Hiphop", "auteur" => "John Williams", 
"titel" => "My Girl"),
array("genre" => "Jazz", "auteur" => "John Coltrane", 
"titel" => "New York"),
array("genre" => "Hiphop", "auteur" => "Shakira", 
"titel" => "Obsession")
);

//Stap 2 
function printArray($item, $key){
    echo "<br>$key: $item";
}
array_walk_recursive($playlist, 'printArray');

//Stap 3
array_push($playlist, [
    "genre" => "Latin", "auteur" => "Caetano Veloso", 
"titel" => "Cafe Atlantico"
]);

//Stap 4
function printTracks($CD){

    echo implode(' | ', $CD);
}

echo "<br>Track 0: ";
printTracks($playlist[0]); 

echo "<br>Track 1: ";
printTracks($playlist[1]);

echo "<br>Track 2: ";
printTracks($playlist[2]);

echo "<br>Track 3: ";
printTracks($playlist[3]);
?>