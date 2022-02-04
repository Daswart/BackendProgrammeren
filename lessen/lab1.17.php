<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voorbeeld van de do-while-lus</title>
</head>
<body>
    <h3>Voorbeeld van de do-while-lus</h3>
    <?php
    echo "<br>Reken het saldo uit zolang saldo lager dan 2000 is";
    $saldo = 100;
    $rente = 0.1;
    $maand = 1;
    echo "<br>beginsaldo is: $saldo";
    echo "<br>START";
    do{
        //Saldo te laag wanneer maand 6 is én saldo onder 1000 is
        if($maand == 6 && $saldo < 1000){
            echo "<br>Je saldo is te laag ";
            exit;
        }
        //In alle maanden behalve februari wordt er geen rente berekent
        if($maand != 2){
        $saldo = $saldo + ($saldo * $rente);

        }
        //In februari wordt er geen rente betaalt
        // De loop begint opnieuw (continue).
        if($maand === 2){
           echo "<br>Februari betaalt geen rente";
            $maand++;
            continue;    
        }
        
        //Toon het saldo per maand;
        $saldo = sprintf("%0.2f", $saldo);
        echo "<br>Maand: $maand je saldo is: $saldo";
        
        //verhoog de maand aan eind van loop.
        $maand++;
        
    }
    while($saldo < 2000);
    echo "<br>FINISH";
    ?>
</body>
</html>