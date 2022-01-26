<?php

$gewerkteuren = 40;
$uurtarief = 15.00;
$bonus = 100.00;
$bruto = $gewerkteuren * $uurtarief;

//Opdracht 25
if($gewerkteuren <= 40){
        echo "Uw bassissalaris is: €" . $bruto;
        echo "<br>Uw belasting is: €" . 0.40 * $bruto;
        echo "<br>Uw nettobedrag is: " . ($bruto - (0.40 * $bruto));
}

//Opdracht 26
elseif($gewerkteuren > 40){
        echo "Uw bassissalaris is: €" . $bruto;
        echo "<br>Uw basissalaris plus bonus is: €" . ($bruto + $bonus);
        echo "<br>Uw belasting is: €" . ($bruto + $bonus) * 0.45 ;
        
        //Odpracht 27
        echo "<br>Uw netto is: €" . (($bruto + $bonus) - (0.45 * ($bruto + $bonus)));

}

//Opdracht 28
echo ($gewerkteuren <= 40 ? "<br>Belasting 
is 40%" : "<br>Belasting is 45% ");

?>