<?php

//stap 1
$breedte = 10;
$lengte = 11;
$hoogte = 5;

//stap 2
$oppervlake = $breedte * $lengte;
$volume = $breedte * $lengte * $hoogte; 

//stap 3
echo "Containerbasisoppervlakte is " . $oppervlake;
echo nl2br("\n Containervolume is " . $volume);
?>