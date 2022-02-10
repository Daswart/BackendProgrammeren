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