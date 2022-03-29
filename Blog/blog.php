<?php
if(isset($_POST['submit'])){
    $naam = $_POST['naam'];
    $text = $_POST['text'];
    $text = str_replace("\r", "", $text);
    $text = str_replace("\n", "<br>", $text);
    

    // $userInput = array(
    //     "naam" => $naam,
    //     "text" => htmlspecialchars($text),
    //     'submit' => $_POST['submit']
    // );
    // echo "<pre>";
    // print_r($userInput);
    // echo "</pre>";
    // echo $text;
    $datum = new DateTime();
    $datum = $datum->format('j F Y');  
    $bestand = fopen('blog.txt', 'ab');
    $profiel = $naam . "*" . $text . "*" . $datum . "\n";
    fwrite($bestand, $profiel, strlen($profiel));
    

}
 


?>
