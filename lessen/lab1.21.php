<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 1.21</title>
    <style>
        body{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            
        }
       
        div{
            margin: auto;
            text-align: center;
            padding-top: 2px;
            padding-bottom: 5px;
            width: 250px;
            border: 1px solid lightblue;
        }
        input:focus {
            background-color: yellow;   
        }
    </style>
</head>
<body>
    <div>
     <!-- stap 1: formulier maken -->
    <form action="" method="POST">
    <input type="text" name="voornaam" placeholder="voornaam"><br>
    <input type="text" name="naam" placeholder="naam"><br>
    <input type="text" name="geboortedatum" placeholder="geboortedatum"><br>
    <input type="text" name="straat" placeholder="straat"><br>
    <input type="text" name="postcode" placeholder="postcode"><br>
    <input type="text" name="plaats" placeholder="plaats"><br>
    <input type="email" name="e-mail" placeholder="b@b.nl"><br>
    <input type="password" name="password" placeholder="password"><br><br>

    Minderjarig: 
    <input type="radio" name="minderjarig" value="Ja">JA
    <input type="radio" name="minderjarig" value="Nee">NEE
    <br><br>
    <input type="submit" name="submit" value="Registeren">
    <input type="reset" name="reset" value="Resetten">
    </form>
    </div>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    // stap 2: Associatieve array voor de gegevens uit het formulier
    $gebruiker = [
       "voornaam" => $_POST['voornaam'],
       "naam" => $_POST['naam'],
       "geboortedatum" => $_POST['geboortedatum'],
       "postcode" => $_POST['postcode'],
       "straat" => $_POST['straat'],
       "plaats" => $_POST['plaats'],
       "e-mail" => $_POST['e-mail'],
       "password" => $_POST['password'],
       "minderjarig" => $_POST['minderjarig']

    ];

    echo "<br>";
    print_r($gebruiker);
    
    //Array encoderen naar Json format;
    $gebruikerJsonString = json_encode($gebruiker);
    echo "<br><br>" . $gebruikerJsonString;
   
}

?>