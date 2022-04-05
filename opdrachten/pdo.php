<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        h1{
            color: red;
        }
        img{
            width: 50%;
            height: auto;
        }
    </style>
</head>
<body>
    <?php
    //Opave 102
    echo "<br / >--- Opgave 102: Drivers: ";
    echo "<br>";
    print_r(PDO::getAvailableDrivers());
    
    //Opgave 103
    echo "<br / >--- Opgave 103: PDO verbinding maken";
    $dbhost = "localhost";
    $dbname = "webshop";
    $user = "root";
    $pass = "wwll0272";
    try{
        $database =  new PDO("mysql:host=$dbhost;dbname=$dbname", $user, $pass) ;
        $database->setAttribute
        (PDO:: ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo "<br>Verbinding gemaakt";
    }
    catch(PDOException $e){
        echo $e ->getMessage();
        echo "<br>Verbinding niet gemaakt";
        }

    //Opgave 104
    echo "<br>---Opgave 104: Input-data vanuit geïndexeerde array";
    
    $query = "INSERT INTO album(titel, artiest, genre, prijs, voorraad) values(?, 
    ?, ?, ?, ?)"; 
    
    $insert = $database->prepare($query);

    $data = array("Stairway to Heaven", "Led Zeppelin", "Rock", "0.99", "200");    

   $insert->execute($data);
    try{
        echo "<script>alert('Album toegevoegd.');</script>";
    }
    catch(PDOException $e){
        echo "<script>alert('Album NIET toegevoegd.');</script>";
    }

    //Opgave 105
    echo "<br>---Opgave 105: Zelfde insert-query met nieuwe data";
    $data = array("The Wall", "Pink Floyd", "Rock", "0.99", "100");
    try{
        $insert->execute($data);
        echo "<script>alert('Album 2 toegevoegd.');</script>";
    }
    catch(PDOException $e){
        echo "<script>alert('Album 2 NIET toegevoegd.');</script>";
    } 

    //Opgave 106
    echo "<br>---Opgave 106: verwijder toegevoegd album";
    $query = "DELETE FROM album WHERE titel = 'The Wall'";
    $delete = $database->prepare($query);
    try{
        $delete->execute();
        echo "<script>alert('Album verwijderd.');</script>";
    }
    catch(PDOException $e){
        echo "<script>alert('Album NIET verwijderd.');</script>";
    }
    
    //Opracht 107
    echo "<br>---Opgave 107: verwijder nog een toegevoegd album";
    $query = "DELETE FROM album WHERE titel = 'Stairway to Heaven'";
    $delete = $database->prepare($query);
    try{
        $delete->execute();
        echo "<script>alert('Album verwijderd.');</script>";
    }
    catch(PDOException $e){
        echo "<script>alert('Album NIET verwijderd.');</script>";
    }
    
    //Opgave 108
    echo "<br>---Opgave 108: Alle albums selecteren";
    $query =  "SELECT * FROM album WHERE 1";
    $albums = $database->prepare($query);
    try{
        $albums->execute(array());
        $albums->setFetchMODE(PDO::FETCH_ASSOC);
        foreach($albums as $album){
            echo "<br>". $album['titel'];
        }
        
    } 
    catch(PDOException $e){
        echo "<script>alert('Geen albums gevonden.');</script>";
    }
    
    // Reset auto-increment voordat volgende album wordt toegevoegd
    $query = "ALTER TABLE album AUTO_INCREMENT = 1";
    $alter = $database->prepare($query); 
    try{
      $alter->execute();
      echo "<script>alert('Reset AI gelukt.');</script>";  
    }
    catch(PDOException $e){
        echo "<script>alert('Reset AI NIET gelukt');</script>";
        if (!$alter->execute()) {
        print_r($alter->errorInfo());
}
    }

    //Opgave 109
    echo "<br>---Opgave 109: Input-data hash-array";
    $query = "INSERT INTO album (titel, artiest, genre, prijs, voorraad)
    values (:titel, :artiest, :genre, :prijs, :voorraad)";
    $insert = $database->prepare($query);
    $data = array("titel" => "Let's Get It On", "artiest" => "Marvin Gaye", 
    "genre" => "Soul", "prijs" => "0.99", "voorraad" => "44");
    
    try{
      $insert->execute($data);
      echo "<script>alert('Album toegevoegd.');</script>";  
    }
    catch(PDOException $e){
        echo "<script>alert('Album NIET toegevoegd');</script>";
        if (!$insert->execute()) {
        print_r($st->errorInfo());
    }
    }

    //Opgave 110
    echo "<br>---Opgave 110: Zoek album";
    $query = "SELECT titel FROM album WHERE titel = :albumtitel";
    $albums = $database->prepare($query);
    try{
        $albums->execute(array(":albumtitel" => "Let's Get It On"));
        foreach($albums as $album){
             echo "<br>" . $album['titel'];
               
        }
    } 
    catch(PDOException $e){
            echo "<script>alert('Album NIET gevonden');</script>";
    }

    //Opgave 111
    echo "<br>---Opgave 111: Update prijs";
    $query = "UPDATE album SET prijs = ? WHERE titel = ?";
    $update = $database->prepare($query);
    $albumtitel = "Let's Get It On";
    $prijs = 1.99;
    $update->execute(array($prijs, $albumtitel));
    if($update){
        echo "<br>De prijs is gewijzigd";
    }

    //Opgave 112
    echo "<br>---Opdracht 112: Zoek album";
    $query = "SELECT titel, prijs FROM album WHERE titel = 'Let\'s get it on' ";
    $albums = $database->prepare($query);
    $albums->execute(array());
    $albums->setFetchMode(PDO::FETCH_ASSOC);
    if($albums){
        echo "<script>alert('Album gevonden');</script>";
        foreach($albums as $album){
            echo "<br>" . $album['titel'] . " Prijs: " . $album['prijs'];
        }
    }

    //Opgave 113
    echo "<br>Opdracht 113: Zoek hoogste bestelling";
    $query = "SELECT MAX(aantal) as MAX FROM item";
    $max = $database->prepare($query);
    $max->execute();
    $maxAantal = $max->fetch(PDO::FETCH_ASSOC);
    echo "<br>Max aantal: " . $maxAantal['MAX'];
    
    //Opgave 114
    echo "<br>Opdracht 114: Album verwijderen";
    $query = "DELETE FROM album WHERE titel = 'Let\'s Get It On' ";
    $delete = $database->prepare($query);
    try{
        $delete->execute();
        echo "<script>alert('Album verwijderd');</script>";
    }
    catch(PDOException $e){
        echo "<script>alert('Album NIET verwijderd');</script>";
    }  
    
    ?>

    
</body>
</html>