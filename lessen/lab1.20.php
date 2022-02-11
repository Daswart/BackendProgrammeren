<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>

    <form name="login" action="" method="POST">
        Gebruikersnaam: <br>
        <input type="text" name="user"><br><br>
        <input type="submit" name="submit" value="inloggen">
    </form>
    
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $user = $_POST['user'];
    $melding = welkom($user);
    echo "<br>$melding";
}

function welkom($gebruikersnaam){
    if(isset($_COOKIE['gebruiker'])){
            if($_COOKIE['gebruiker'] === $gebruikersnaam){
                return "Hallo $gebruikersnaam, welkom terug";
            }
            else{
                setcookie('gebruiker', $gebruikersnaam); 
                return "Hallo $gebruikersnaam, u bent onze nieuwe gebruiker";
            }
    }else{
        setcookie('gebruiker', $gebruikersnaam);
         return "Hallo $gebruikersnaam, u bent onze nieuwe gebruiker";
    }
}
?>