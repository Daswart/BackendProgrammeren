<?php
echo "Lab 1.05";
//stap 1
$getallen = ["een", "twee", 3, "vier"];

//stap 2
array_push($getallen, 5);

//stap 3
echo "<br>Stap 3. ";
print_r($getallen);

//stap 4
echo "<br>Stap 4. ";
echo "Datatype is: " . gettype($getallen[4]);; 

//stap 5
unset($getallen[4]); 

//stap 6
echo "<br>Stap 6. ";
print_r($getallen);

//stap 7
array_unshift($getallen, 'nul');

//stap 8
echo "<br>Stap 8. ";
print_r($getallen);

//stap 9
unset($getallen[0]);

//stap 10
echo "<br>Stap10. ";
var_dump($getallen[0]);

//stap 12
echo "<br>Stap12. ";
print_r($getallen);

//stap 13
unset($getallen[2]);

//stap 14
echo "<br>Stap14. ";
print_r($getallen);

//stap 15
unset($getallen[4]);

//stap 16
echo "<br>Stap16. ";
print_r($getallen);


?>