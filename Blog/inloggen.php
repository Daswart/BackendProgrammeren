<?php
//Opgave 71
$email = htmlspecialchars($_POST['e-mail']);
$wachtwoord = htmlspecialchars($_POST['wachtwoord']);
$bestand = fopen('gebruikers.txt', 'r');
if(!$bestand){
    echo "Kon geen bestaand vinden";
}
while(!feof($bestand)){
$account = fgets($bestand);
$account = explode("*", $account);
    if($account[1] == $email && $account[2] == $wachtwoord){
    
    session_start();
    $_SESSION["USER"] = $email;
    $_SESSION["STATUS"] = 1;
    $_SESSION["ID"] = session_id();
    echo "<script>alert('U bent ingelogd als $email');
    location.href='welkom.php';
    </script>";
    
    }
}

echo "<script>alert('Wachtwoord of gebruikersnaam ongeldig');
location.href='inloggen.html';
</script>";




?>