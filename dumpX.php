<style>
	custom1 {font-size:smaller;}
</style>
<?php
// dumping some "superglobal" variables
echo "<hr>";
echo "GET";
echo "<br>";
echo "<custom1>";
var_dump($_GET);
echo "</custom1>";

echo "<hr>";
echo "<br>";

echo "<hr>";
echo "POST";
echo "<br>";
var_dump($_POST);
echo "<hr>";
echo "<br>";


echo "<hr>";
echo "REQUEST";
echo "<br>";
var_dump($_REQUEST);
echo "<hr>";
echo "<br>";


echo "<hr>";
echo "SERVER";
echo "<br>";
var_dump($_SERVER);
echo "<hr>";
echo "<br>";
?>