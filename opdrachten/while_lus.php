<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While-lus</title>
    <style>
        body{
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <!-- Opgave 49 -->
    <h3>Voorbeeld van de while-lus</h3>
    <?php
    echo "<br>Zolang ons saldo lager is dan 2000
    willen we dat de while-lus ons maandelijks saldo 
    uitrekent";
    $saldo = 750;
    $rente = 0.1;
    $maand = 1;
    echo "<br>Beginsaldo:" . $saldo;
    echo "<br>Start... ";
    while($saldo < 2000){
        
        $saldo = $saldo + ($saldo * $rente);
        $saldo = sprintf("%0.2f", $saldo);
        echo "<br>Maand: $maand je saldo is: $saldo";
        $maand++;
    }
    echo "<br>FINISH";
    ?>
</body>
</html>