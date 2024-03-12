<?php

echo "Hello and welcome to SAE ";

print 'Web Student ';
echo 12;// no need for commas when it comes to numbers

$a= " hello ";
echo "$a Machala ,br> <br>";

//to add numbers together you must put everything in a container and then add together, see example below

$a=10;
$b=20;
$c=$a+$b;

echo "The result $c ";
echo 'the result '. $c;// if using single comma, you cannot use the + sign so instead will use the full stop.

echo "<br>";
echo "<br>";
//var_dump gives you the data type. see example below
$a="Hello ";

var_dump ($a);
echo "<br>";

$a=10;
var_dump ($a );
echo "<br>";

$a=10.32;
var_dump ($a);
echo "<br>";

$a=true;
var_dump ($a);
echo "<br>";
echo "<br>";

$var1=true;
$var2=3;
$var3=5.6;
$var4="Abc3462";

echo gettype($var1);
echo "<br>";
echo gettype($var2);
echo "<br>";
echo gettype($var3);
echo "<br>";
echo gettype($var4);


?>