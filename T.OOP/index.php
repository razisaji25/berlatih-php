<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    require ('./animal.php');
    ?> 
</head>
<body>
<?php

$sheep = new Animal("shaun");

echo $sheep->name; // "shaun"
echo "<br>";
echo $sheep->legs; // 2
echo "<br>";
echo $sheep->cold_blooded; // false
echo "<br>";
echo "<br>";

$sungokong = new Ape("kera sakti");

echo $sungokong->name; // "shaun"
echo "<br>";
echo $sungokong->legs; // 2
echo "<br>";
$sungokong->yell(); // "Auooo"
echo "<br>";
echo "<br>";

$kodok = new Frog("buduk");

echo $kodok->name; // "shaun"
echo "<br>";
echo $kodok->legs; // 2
echo "<br>";
$kodok->jump() ; // "hop hop"

?>
</body>
</html>