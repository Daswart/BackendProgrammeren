<?php
//Opgave 62
setcookie("gebruiker", 'Sanskriet', time() + 3600);

//Opgave 63
session_start();
echo "Maak een cookie";
setcookie('gebruiker', "Sanskriet", mktime(0,0,0,1,1,2050));
$gebruiker = $_COOKIE['gebruiker'];
echo "<br>Gebruikersnaam is: $gebruiker <br>";
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

//Opgave 64
setcookie("user", "", time() + 3600);
if(isset($_COOKIE['user'])){
    echo $_COOKIE['user'];
}else{
    echo "<br>Cookie is verwijderd";
}
?>