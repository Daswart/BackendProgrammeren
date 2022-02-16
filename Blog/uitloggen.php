<?php
session_start();
echo "Tot ziens ". $_SESSION["USER"] . "<br>";
session_destroy();
setcookie('PHPSESSID', session_id(), time() -1, '/');

?>
<a href="inloggen.html"><input type="button" name="home" value="Naar inloggen"></a>