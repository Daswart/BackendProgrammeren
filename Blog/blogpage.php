<?php
$bestand = fopen('blog.txt', 'r');
if($bestand){
while(!feof($bestand)){
$gegevens = fgets($bestand);
$gegevens = explode("*", $gegevens);

echo "<br>";
echo $gegevens[0];

if(isset($gegevens[1])){
echo "<br>" . $gegevens[1];
echo "<br>";
}
}    
}else{
    echo "er ging iets mis";
}

  

?>