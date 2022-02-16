<?php
session_start();
if(isset($_SESSION['ID'])){
    echo "<h3>Welkom</h3>";
    echo '<a href="uitloggen.php"><input type="button" name="terug" value="Uitloggen"></a>';
   
}else{
    echo "<br>Je moet eerst inloggen!<br><br>";
    echo '<a href="inloggen.html"><input type="button" name="home" value="Naar inloggen"></a>';
    setcookie('PHPSESSID', session_id(), time() -1, '/');
}
?>


