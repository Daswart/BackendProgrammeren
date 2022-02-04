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
    echo "<br>Bedrag: " . sprintf("%.2f", $bedrag); 
    global $email;
    echo "<br>E-mail: " . $email;
    $bijdrage =  $bedrag * BIJDRAGE;
    $donatie = $bedrag + $bijdrage;
    echo "<br>Inclusief bijdrage: ". sprintf("%.2f", $donatie);
    static $pot;
    $pot = $pot + $donatie;
    echo"<br><span style='background-color: yellow'>
    Totaal bedrag in pot: ". sprintf("%.2f", $pot)
    ."</span><br>";

    //Lab1.18 bijhouden wat de hoogste donatie is. 
    static $hoogste;
    if($hoogste < $donatie){
        $hoogste = $donatie;    
    }

    echo "Hoogste donatie tot nu toe is: ". sprintf("%.2f", $hoogste)."<br>";
}
doneren(10);
doneren(9);
doneren(11);
doneren(8);
doneren(8);
doneren(8);




?>