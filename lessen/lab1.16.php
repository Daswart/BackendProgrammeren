<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winkelmandje</title>
    <style>
        body{
            font-family: Verdana;
            font-size: 9px;
        }
        .album{
            clear: left;
            width: 100%;
            
        }
        .omslag{
            float: left;
            
        }
        .gegevens{
            float: left;
            padding-left: 20px; 
        }
        .korting{
            clear: left;
        }
        .aantal{
            background-color: #f8ce6c;
        }
        .betalingswijze{
            position: relative;
            top: 20px;
            clear: left;
            margin-bottom: 20px;
        }
       th{
           background-color: #f8ce6c;
       }
    </style>
</head>
<body>
    <h3>Mijn Winkelmandje</h3>
    <form name="albums" action="" method="post">
        <div class="album">
            <div class="omslag">
                <img src="../img/evora.jpg" width="50px" alt="X">
            </div>
             <div class="gegevens">
            Cesaria Evora "Em Um Concerto" Prijs: $9
            <input type="hidden" name="albumcode[0]"
            value="001">
            <input type="hidden" name="artiest[0]"
            value="Cesaria Evora">
            <input type="hidden" name="album[0]"
            value="Em Um Concerto">
            <input type="hidden" name="prijs[0]" value="9">
            <input type="hidden" name="genre[0]" value="World">
            <br>Aantal:
            <input type="text" size=2 maxlength=3
            name="aantal[0]" class="aantal" value=0> 
            </div>
        </div>
        
        <div class="album">
            <div class="omslag">
                <img src="../img/manuchao.jpg" width="50px" alt="X">
            </div>
             <div class="gegevens">
            Manu Chao "Clandestino" Prijs: $5
            <input type="hidden" name="albumcode[1]"
            value="002">
            <input type="hidden" name="artiest[1]"
            value="Manu Chao">
            <input type="hidden" name="album[1]"
            value="Clandestino">
            <input type="hidden" name="prijs[1]" value="5">
            <input type="hidden" name="genre[1]" value="World">
            <br>Aantal:
            <input type="text" size=2 maxlength=3
            name="aantal[1]" class="aantal" value=0> 
            </div>
        </div>

        <!-- Stap 2: Album naar eigen keuze toevoegen -->
         <div class="album">
            <div class="omslag">
                <img src="../img/sade.jpg" width="50px" alt="X">
            </div>
             <div class="gegevens">
            Sade "Clandestino" Prijs: $7
            <input type="hidden" name="albumcode[2]"
            value="003">
            <input type="hidden" name="artiest[2]"
            value="Sade">
            <input type="hidden" name="album[2]"
            value="The Ultimate Collection">
            <input type="hidden" name="prijs[2]" value="7">
            <input type="hidden" name="genre[2]" value="Jazz">
            <br>Aantal:
            <input type="text" size=2 maxlength=3
            name="aantal[2]" class="aantal" value=0> 
            </div>
        </div>

        <div class="korting">
            <br><hr>Korting:<br>
            <input type="checkbox" name='student' value="15">
            Student: 15%<br>
            <input type="checkbox" name="klant" value="10">
            Klant: 10%<br>
        </div>   
        
        
        <div class="betalingswijze">
            <br>Selecteer een  betalingswijze<br><br>
            <select name="betalingswijze" value="true">
            <option value="visa">Visa</option>
            <option value="mastercard">MasterCard</option>
            <option value="paypal">PayPal</option>
            <option value="ideal">Ideal</option>
        </select>
        <input type="submit" name="verzenden" value="Bestellen">
        </div>
    </form>
    <?php
    if(isset($_POST['verzenden'])){

        //aantal albums;
        $aantal = $_POST["aantal"];
        echo "<br>Bestelde albums: " . $aantal[0];

        //De totale korting
        $korting = 0;
        if(isset($_POST['student'])){
            $korting = $korting + 15;
        }
        if(isset($_POST['klant'])){
            $korting = $korting + 10;
        }
        echo "<br>Korting is: " . $korting . "%";
        
        echo "<br>";
        
        //Toon betalingswijze
        switch( $_POST['betalingswijze']){
            case "visa" :
                echo "Betalingswijze: Visa";
                break;
            case "mastercard" :
                echo "Betalingswijze: Mastercard";
                break;
            case "paypal" :
                echo "Betalingswijze: Paypal";
                break;
            case "ideal" :
                echo "Betalingswijze: Ideal";
                break;     

        }

        // stap 3 (externe_functions.php)
        include_once("externe_functions.php");
        echo "<br>De korting()-function " . korting() . "%";
        $betalingswijze = $_POST['betalingswijze'];
        $servicekosten = serviceKosten($betalingswijze);
        echo "<br>Servicekosten zijn: € " . $servicekosten; 
        echo "<br>";
        facturing();
       
        // stap 2 (foreach_lus)
        premium();
    }
        
    ?>
</body>
</html>