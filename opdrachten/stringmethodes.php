<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stringmethodes</title>
</head>
<body>
    <!-- Opdracht 31 -->
    <form name="form" action="" method="post">
    <input required type="text"
    name="naam" placeholder="Naam"><br>
    <input required type="text"
    name="straat" placeholder="Straat"><br>
    <input required type="text"
    name="postcode" placeholder="Postcode"><br>
    <input required type="text"
    name="plaats" placeholder="Plaats"><br>
    <input required type="email"
    name="e-mail" placeholder="E-mailadres"><br><br> 
    <textarea name="commentaar" 
    placeholder="Typ je commentaar in..." 
    rows="4"></textarea><br>
    <input type="submit" name="submit" value="Submit">
</form>
    
    <?php
    //Opdracht 32
    if(isset($_POST['submit'])){
        $naam = htmlspecialchars($_POST['naam']);
        $straat = htmlspecialchars($_POST['straat']);
        $postcode = htmlspecialchars($_POST['postcode']);
        $plaats = htmlspecialchars($_POST['plaats']);
        $email = htmlspecialchars($_POST['e-mail']);
        $commentaar = htmlspecialchars($_POST['commentaar']);
    
        //Opdracht 33
        $naam = trim($naam);
        $straat = trim($straat);
        $postcode = trim($postcode);
        $plaats = trim($plaats);
        $email = trim($email);
        $commentaar = trim($commentaar);

        //Opdracht 34
        $plaats = strtoupper($plaats);
        if($plaats == "AMSTERDAM"){
        $bezorgkosten = 10.00;
        }
        elseif($plaats == "UTRECHT"){
        $bezorgkosten = 20.00;
         }
        else{
        $bezorgkosten = 30.00;
         }
        echo "<br>Bezorgkosten: $bezorgkosten";

        //Opdracht 35
        $email = strtolower($email);
        echo "<br>E-mailadres: $email";
         
        //Opdracht 36
        $naam = ucfirst($naam);
        echo "<br>Naam: $naam";

        //Opdracht 37
        $emailArray = explode("@", $email);
        $user = $emailArray[0];
        $domain = $emailArray[1];
        echo "<br>User: " . $user;
        echo "<br>Domain:  " . $domain;

        //Opdracht 38
        if(strlen($postcode) != 7){
            echo "<br>Postcode incorrect ingevuld.";
        }

        //Opdracht 39
        if(strlen($postcode) === 7){ //Alleen als er een juiste postcode wordt ingevuld;
        $postcodePrefix = substr($postcode, 0, 4);
        $postcodeSuffix = substr($postcode, 5, 2);
        echo "<br>Postcode prefix: $postcodePrefix";
        echo "<br>Postcode suffix: $postcodeSuffix";
        }
        
        //Opdracht 40
        $nl = strpos($email, ".nl");
        $be = strpos($email, ".be");
        $fr = strpos($email, ".fr");
        if($nl > 0 ) echo "<br>Nederlands e-mailadres";
        if($be > 0 ) echo "<br>Belgisch e-mailadres";
        if($fr > 0 ) echo "<br>Frans e-mailadres";
        
        //Opdracht 41
        $commentaar = nl2br($commentaar);

        //Opdracht 42
        $scheldwoorden = array('debiel', 'laf', 'gestoord');
        $commentaar = str_replace($scheldwoorden, "*bleep*", $commentaar);
        echo "<br>Commentaar: $commentaar";
    }
  
?>
    
</body>
</html>
