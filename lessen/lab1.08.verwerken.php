<?php

//Stap 2
if(isset($_POST['submit'])){
   
    $achternaam = $_POST['achternaam'];
    $voornaam = $_POST['voornaam'];
    $straat = $_POST['straat'];
    $postcode = $_POST['postcode'];
    $plaats = $_POST['plaats'];
    $email = $_POST['email'];
    $opleiding = $_POST['opleiding'];
    
    //Stap 3
    echo "<h3>Uw gegevens zijn:</h3>";
    echo "Achternaam: " . $achternaam . "<br>";
    echo "Voornaam: " . $voornaam . "<br>";
    echo "Straat: " . $straat . "<br>";
    echo "Postcode: " . $postcode . "<br>";
    echo "Plaats: " . $plaats . "<br>"; 
    echo "E-mailadres: " . $email . "<br>";
    
    //Stap 4
    if($opleiding == 'ICT'){
        echo '<p  style="color:red;">ICT opleidingen zitten vol. Kies een ander opleiding.<p>';
    }else {
        echo "<br>U wordt ingeschreven voor de volgende opleiding:<br>" . $opleiding;
    }

}


?>