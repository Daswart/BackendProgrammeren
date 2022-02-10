<?php
//Opgave 65
$user = array(
    "naam" => "Shyam",
    "e-mail" => "shyan@nu.nl",
    "wachtwoord" => "",
    "photo" => "shyam.jpg"

);
echo "<br>UserArray:<br>";
var_dump($user, true);
$userJsonString = json_encode($user);
echo "<br>UserJsonLiteral: <br>" . $userJsonString . "<br>";

//Opgave 66
$boekenJsonLiteral ='[
{"titel":"Stoner","auteur":"John Williams",
"genre":"Fictie","prijs":19.99},
{"titel":"De cirkel","auteur":"Dave Eggers",
"genre":"Fictie","prijs":22.5},
{"titel":"Rayuela","auteur":"Julio Cortazar",
"genre":"Fictie","prijs":25.5}]';
$boeken = json_decode($boekenJsonLiteral, true);
foreach($boeken as $boek){
    echo "<br>titel: " . $boek['titel'];
    echo "<br>auteur: " . $boek['auteur'];
    echo "<br>genre: " . $boek['genre'];
    echo "<br>prijs: " . $boek['prijs'];
}
//Opgave 67
echo "<br><br>---Opgave 67";
$boekenObj = json_decode($boekenJsonLiteral);
foreach($boekenObj as $boek){
    echo "<br>titel: " . $boek->titel;
    echo "<br>auteur: " . $boek->auteur;
    echo "<br>genre: " . $boek->genre;
    echo "<br>prijs: " . $boek->prijs;
}
?>