<?php
$boeken = array(
    array("titel" => "Stoner", "auteur" => "John Williams", 
    "genre" => "Fictie", "prijs" => 19.99),
    array("titel" => "De cirkel", "auteur" => "Dave Eggers", 
    "genre" => "Fictie", "prijs" => 22.50),
    array("titel" => "Rayuela", "auteur" => "Julio Cortazar", 
    "genre" => "Fictie", "prijs" => 25.50)
);

function prijsLijst($value, $key){
        if($key == 'prijs'){
            echo $key . ": " . $value . "<br>";
        }
        
}
array_walk_recursive($boeken, 'prijsLijst');

?>
