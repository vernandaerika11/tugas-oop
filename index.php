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

echo $sheep->get_name(); //"shaun"
echo "<br>";
echo $sheep->get_legs(); //2
echo "<br>";
echo $sheep->get_cold_blooded(); //false
echo "<br>";

$sungokong = new Ape("kera sakti");

echo $sungokong->get_name();
echo "<br>";
echo $sheep->get_legs();
echo "<br>";
echo $sungokong->yell(); // "Auooo"
echo "<br>";
echo $sheep->get_cold_blooded(); //false
echo "<br>";

$kodok = new Frog("buduk");

echo $kodok->get_name();
echo "<br>";
echo $kodok->get_legs();
echo "<br>";
echo $kodok->jump();
echo $sheep->get_cold_blooded(); //false
?>
</body>
</html>
