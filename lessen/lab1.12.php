<h4>Reiskosten berekenen</h4>
<?php
function reiskosten($vertrek, $bestemming){
   //1 = Amsterdam
   //2 = Utrecht
   //3 = Den Haag
   //4 = Rotterdam
    $reiskosten = array();
    $reiskosten[1] = array();
    $reiskosten[2] = array();
    $reiskosten[3] = array();
    $reiskosten[4] = array();
    
    //Reiskosten vanaf Amsterdam
    $reiskosten[1][1]= 0;
    $reiskosten[1][2]= 30;
    $reiskosten[1][3]= 60;
    $reiskosten[1][4]= 90;

    //Reiskosten vanaf Utrecht
    $reiskosten[2][1]= 30;
    $reiskosten[2][2]= 0;
    $reiskosten[2][3]= 40;
    $reiskosten[2][4]= 20;

    //Reiskosten vanaf Den Haag
    $reiskosten[3][1]= 60;
    $reiskosten[3][2]= 40;
    $reiskosten[3][3]= 0;
    $reiskosten[3][4]= 10;

    //Reiskosten vanaf Rotterdam
    $reiskosten[4][1]= 90;
    $reiskosten[4][2]= 20;
    $reiskosten[4][3]= 10;
    $reiskosten[4][4]= 0;
    
    return $reiskosten[$vertrek][$bestemming];
}
?>
<form action="" method="post">
Vertrek: 
<select name="vertrek">
    <option value="1">Amsterdam</option>
    <option value="2">Utrecht</option>
    <option value="3">Den Haag</option>
    <option value="4">Rotterdam</option>
</select>
Bestemming: 
<select name="bestemming">
    <option value="1">Amsterdam</option>
    <option value="2">Utrecht</option>
    <option value="3">Den Haag</option>
    <option value="4">Rotterdam</option>
</select><br><br>
<input type="submit" name="submit" value="Berekenen"><br><br>
<p>---------------------------------------------------</p>
</form>
<?php
if(isset($_POST['submit'])){
echo "De berekende reiskosten zijn " . 
reiskosten($_POST['vertrek'], $_POST['bestemming']) . " euro"; 
}

?>


