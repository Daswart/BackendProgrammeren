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
            margin-bottom: 100px;
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
            <input type="hidden" name="prijs[0]" value="9">
            <input type="hidden" name="genre[0]" value="World">
            <br>Aantal:
            <input type="text" size=2 maxlength=3
            name="aantal[0]" class="aantal" value=0> 
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
        switch($_POST['betalingswijze']){
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

    }
        
    ?>
</body>
</html>