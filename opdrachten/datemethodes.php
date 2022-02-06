<?php
//Opgave 55
$vandaag = new Datetime("now");
echo "<br>Vandaag timestamp: " . $vandaag->getTimestamp();

//Opgave 56
$eendag = 86400;
$begin2000 = DateTime::createFromFormat("d/m/Y", "1/1/2000");
$eind2000 = DateTime::createFromFormat("d/m/Y", "31/12/2000");
$begin = $begin2000->getTimeStamp();
$einde = $eind2000->getTimeStamp();
$dagenIn2000 = ($einde - $begin)/$eendag;
echo "<br>Aantal dagen in 2000 " . $dagenIn2000; 

//Opgave 57
//add  DateInterval
$datum = new DateTime("2000-01-01");
echo "<br>Begindatum: " . $datum->format("Y-m-d");
$datum->add(new DateInterval("P10D"));
echo "<br>Tien dagen toevoegen: " . $datum->format("Y-m-d");
$datum->sub(new DateInterval("P10D"));
echo "<br>Tien dagen weghalen: " . $datum->format("Y-m-d");

//Opgave 58
//Formatteren
$format =  '%A %d %B %Y %H %M %S';
$geformateerde_datum = strftime($format);
echo "<br>Geformateerde datum: " . $geformateerde_datum;

//Opgave 59
setlocale(LC_TIME, "NL_NL");
$ned = strftime($format);
echo "<br>In het Nederlands: " . $ned;

//Opgave 60
//Date format verwerken
$datum = date_create('2000-01-01');
echo "<br>Datum formatteren: " . date_format($datum, "Y-m-d");
echo "<br>Datum formatteren:  " . date_format($datum, "d-m-Y");


?>