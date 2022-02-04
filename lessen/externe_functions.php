<?php
//stap 1
function korting(){
    $korting = 0;
    if(isset($_POST['student'])) $korting = $korting + 15;  
    if(isset($_POST['klant'])) $korting = $korting + 10;
    return $korting;
}

//stap 2
function serviceKosten($betalingswijze){
    switch($betalingswijze){
            case "visa" :
                return 2;
                break;
            case "mastercard" :
                return 2.5;
                break;
            case "paypal" :
                return 1.5;
                break;
            case "ideal" :
                return 1;
                break;     
    }
}

//Lab 1.15 stap 1
    function facturing(){
        
        //Tonen gegevens in een tabel
        echo
        "<hr><h3>Factuur</h3> 
        <table>
        <tr>
        <th>Genre</th>
        <th>Artiest</th>
        <th>Album</th>
        <th>Aantal</th>
        <th>Prijs</th>
        <th>Bedrag</th>
        </tr>";

        $bedrag = 0;
        $totaal = 0;

        //Toon de gegevens per album, wanneer het aantal bestelde van elk album meer dan 0 is. 
        for($x=0; $x < sizeof($_POST['albumcode']); $x++){
            if($_POST['aantal'][$x] > 0){
            $bedrag = $_POST['prijs'][$x] * $_POST['aantal'][$x];
            $totaal += $bedrag; 
            echo   "<tr>
             <td>" . $_POST['genre'][$x] ."</td>
             <td>" . $_POST['artiest'][$x] ."</td>
             <td>" . $_POST['album'][$x] ."</td>
             <td>" . $_POST['aantal'][$x] ."</td>
             <td>" . $_POST['prijs'][$x] ."</td>
             <td>" . sprintf("%.2f", $bedrag)."</td>
             </tr>";
             
            }
            
        }
        
    //Totaalbedrag tonen.    
    echo "<tr>
    <td colspan='5'>Totaal</td>
    <td>".sprintf("%.2f", $totaal)."</td>
    </tr>";        
    
    //De korting 
    $korting = 0;
    if(isset($_POST['student'])) $korting = $totaal * 0.15;  
    if(isset($_POST['klant'])) $korting = $totaal * 0.10;
    echo "<tr>
    <td colspan='5'>Korting</td>
    <td>".sprintf("%.2f", $korting)."</td>
    </tr>";
    
    //De servicekosten
    $servicekosten = serviceKosten($_POST['betalingswijze']);
    echo "<tr>
    <td colspan='5'>Servicekosten</td>
    <td>".sprintf("%.2f", $servicekosten)."</td>
    </tr>";
     
    //Het te betalen bedrag.
    $totaal += $servicekosten - $korting; 
    echo "<tr>
    <td colspan='5'>Te betalen</td>
    <td>".sprintf("%.2f", $totaal)."</td>
    </tr>";
    
    echo "</table>";
    }

?>