<?php

$a=10;

if($sa>5)

echo"$a is greater then 5 <br> ";
echo "end if <br>"; //curly braces are not always necessary, if you want more then 1 statement, you must use them. Also its good practice to always use them


if($sa>5)

{
    echo"$a is greater then 5 ";
echo "We are in if condition";
}

else {
    echo "the value of $a is less than 5 <br> ";
}

$A=12;
$R=$A%2;

if($R%2==0)

{
    echo "$A IS AN EVEN NUMBER <br>";
}

else 

{
    echo "$A IS AN ODD NUMBER <br>";
}

?>