<?php

for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
  } //this will print the loop of "the number is 0 all the way to 10" )


  for ($x = 0; $x <= 10; $x++) {
    if ($x == 5) break;
    echo "The number is: $x <br>";
  }

  //you use break to end the loop so in the above example it will end at "the number is 4" (0-4)


  for ($x = 0; $x <= 20; $x+=2) {
    echo "The number is: $x <br>";
  }

//this will count to 20 in 2's



//four types of loop: for, while, do and foreach
//The while loop displays/executes a block of code only as long as the specified condition is true

$i = 1;

while ($i < 10) {
  echo $i;
  $i++;
} 

//this will show numbers 1 to 9 BECAUSE $I IS UNDER 10

//The do/while loop is a variant of the while loop. This loop will execute the code block once, before 
//checking if the condition is true, then it will repeat the loop as long as the condition is true.
/*do {
  // code block to be executed
}
do/while (condition);*/

$i = 1;

do {
  echo $i;
  $i++;
} while ($i < 6);

//foreach. Loops through a block of code for each element in an array or each property in an object.

$colors = array("red", "green", "blue", "yellow","purple"); 

foreach ($colors as $x) {
  echo "$x <br>";
}




// CLASS ASSIGNMENT

//1. write a program to display count, from 5 to 15 using php loop

for ($x = 5; $x <= 15; $x++) {
    echo "The number is: $x <br>";
  } //this will print the loop of "the number is 5 all the way to 15" )

//2. Write a factorial program using for loop in php. The factorial of a number is the 
//product of all integers up to and including that number, so the factorial of 4 is 4*3*2*1= 24.

/* Define a variable and assign a value to it to find the factorial.*/
$n = 6;  

/*Define the variable where you want to store the factorial number value.*/
$f = 1; 

/*Iterate the loop to find the factorial.*/
for ($i=1; $i <= $n; $i++) {  
  $f = $f * $i;  
} 
/*Display the output.*/
echo "Factorial of $n is $f"; 
//this will give the result of this will be "factorial of 6 is 720

//3. Write a program to create given pattern with * using for loop

$array = "******";
        $count = strlen($array);

        for($i=0;$i<=$count;$i++)
        { 
            echo $array[$i]."<br>";

        }
// this should print the following:
/*
*
**
***
****
*****
******
*/

//4. write a program to create a chess board in PHP using for loop

// use this code with html/css styling 
/*<h3>Chess Board using Nested For Loop</h3>
   <table width="270px" cellspacing="0px" cellpadding="0px" border="1px">
   <!-- cell 270px wide (8 columns x 60px) - -*/

for($row=1;$row<=8;$row++)
{
    echo "<tr>";
    for($col=1;$col<=8;$col++)
    {
    $total=$row+$col;
    if($total%2==0)
    {
    echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
    }
    else
    {
    echo "<td height=30px width=30px bgcolor=#000000></td>";
    }
    }
    echo "</tr>";
}

// enclose it within a table   </table>

//write a simple calculator program using switch case
?>