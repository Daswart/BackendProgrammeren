<?php
//Opgave 70
if(isset($_POST['submit'])){
   $fotoNaam =($_FILES['foto']['name']);
   global $uploadsMap;

   //Functie upload file
   function upload(){
      global $uploadsMap;
      $uploadsMap = "uploads/". ($_FILES['foto']['name']); 
      $fototype = pathinfo($uploadsMap, PATHINFO_EXTENSION);

      //Controleer of foto al bestaat
      if(file_exists($uploadsMap)){
      echo "Deze foto bestaat al";
      return false;
      } 
      
      //Valideer de maximale grootte van de afbeelding
      if($_FILES['foto']['size'] > 500000){
         echo "Deze foto is te groot";
         return false;
      }
      //Valideer formaat
      if($fototype != "jpg" && $fototype != "png" && $fototype != "jpeg" && $fototype != "gif"){
         echo "Foto moet jpg, png, jpeg of gif zijn.";
         return false;
      }
      
      return true; 
   }

   //Verplaats geüploade foto naar de uploadsmap wanneer foto uploaden is gelukt. 
   if(upload()){
      if(move_uploaded_file($_FILES['foto']['tmp_name'], $uploadsMap)){
           echo "Foto is geupload<br>"; 
           //gebruiker opslaan
           $bestand = fopen('gebruikers.txt', 'ab');
           if(!$bestand){
              echo 'Kon geen bestand openen';
           }
           $naam = htmlspecialchars($_POST['naam']);
           $email = htmlspecialchars($_POST['e-mail']);
           $wachtwoord = htmlspecialchars($_POST['password']);
           $profielfoto = $fotoNaam;
           $profiel = $naam . "*" . $email . "*" . $wachtwoord . "*" . $profielfoto . "\n";
           fwrite($bestand, $profiel, strlen($profiel));
           if(fclose($bestand)){
              echo "Account is aangemaakt<br>";
           }else{
              echo "Kon bestand niet afsluiten<br>";
           }
      }else{
         "Probleem bij het uploaden, Foto niet geüpload";
      }
   }
   echo "<br>";
}

?>

<a href="registreren.html">
   <input type="button" name="terug" value="Terug">
</a>