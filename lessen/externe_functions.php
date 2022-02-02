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

?>