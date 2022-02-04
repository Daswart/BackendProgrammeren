<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach_lus</title>
</head>
<body>
    <h3>Voorbeeld van de foreach-lus</h3>
    <?php
    $kleuren['oranje'] = "orange";
    $kleuren['rood'] = "red";
    $kleuren['paars'] = "violet";
    $kleuren['groen'] = "green";
    $kleuren['blauw'] = "blue";
    $kleuren['geel'] = "yellow";
    foreach($kleuren as $kleur){
        echo "<br><font color=$kleur>Deze tekst in $kleur";
    }
    ?>
</body>
</html>