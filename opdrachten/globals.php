<?php
//Opgave 51 + 52 + 53

//superglobale scope
$GLOBALS['url'] = "www.mijndomeinnaam.com";

//globale scope
global $email;
$email = "webmaster@mijndomeinnaam.nl";
 
//globale constanten
define("BIJDRAGE", 0.10);

function doneren($bedrag){
    //function scope
    $melding = "GIRO 555";
    echo "<br>" . $melding;
    echo "<br>URL: " . $GLOBALS['url'];
    echo "<br>Bedrag: " .$bedrag; 
    global $email;
    echo "<br>E-mail: " . $email;
    $bijdrage =  $bedrag * BIJDRAGE;
    $donatie = $bedrag + $bijdrage;
    echo "<br>Inclusief bijdrage: $donatie";
    static $pot;
    $pot = $pot + $donatie;
    echo"<br><span style='background-color: yellow'>
    Totaal bedrag in pot $pot
    </span><br>";
}
doneren(10);
doneren(9);
doneren(11);
doneren(8);



?>