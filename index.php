<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP (Object Oriented Programming)</title>
</head>
<body>
    <h2>OOP (Object Oriented Programming)</h2>
<?php
require "animal.php";
require "Ape.php";
require "Frog.php";

$sheep = new Animal("shaun");

echo "Binatang bernama: <br>";
echo $sheep->get_name(); //"shaun"
echo "<br>Berkaki: <br>";
echo $sheep->get_legs(); //2
echo "<br>Binatang tersebut berdarah dingin?<br>";
echo $sheep->get_cold_blooded(); //false
echo "<br><br>";

$sungokong = new Ape("kera sakti");

echo "Selanjutnya, binatang bernama: <br>";
echo $sungokong->get_name();
echo "<br>Berkaki: <br>";
echo $sungokong->get_legs();
echo "<br>Memiliki suara: <br>";
echo $sungokong->yell(); // "Auooo"
echo "<br>Binatang tersebut berdarah dingin?<br>";
echo $sheep->get_cold_blooded(); //false
echo "<br><br>";

$kodok = new Frog("buduk");

echo "Terakhir, binatang bernama: <br>";
echo $kodok->get_name();
echo "<br>Berkaki: <br>";
echo $kodok->get_legs();
echo "<br>Memiliki suara: <br>";
echo $kodok->jump();
echo "<br>Binatang tersebut berdarah dingin?<br>";
echo $kodok->get_cold_blooded(); //true
echo "<br><br>";

?>
</body>
</html>
