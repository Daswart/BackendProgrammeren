<?php
//Opgave 45
function maxGetal($getal1, $getal2){

    if($getal1 > $getal2){
        return $getal1; 
    }
    elseif($getal2 > $getal1){
        return $getal2;
    }
    else{
        return 'gelijk';
    }
}
?>
<form action="" method="post">
    <input type="text" name="eerstegetal" 
    placeholder="Eerste getal"><br>
    <input type="text" name="tweedegetal" 
    placeholder="Tweede getal"><br><br>
    <input type="submit" name="submit" 
    value="Bereken hoogste getal">
    <p>-------------------------------------</p>
</form>
<?php
if(isset($_POST['submit'])){
    $input1 = doubleval($_POST['eerstegetal']);
    $input2 = doubleval($_POST['tweedegetal']);
    
    if($input1 == false || $input2 == false){
        echo "input moet getallen zijn";
    }else{
    $maxgetal = maxGetal($_POST['eerstegetal'], $_POST['tweedegetal'] );
    echo $maxgetal;    
    }
    
    
}
?>