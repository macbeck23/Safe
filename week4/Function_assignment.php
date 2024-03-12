<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function Assignment</title>
</head>
<body>
   <?php

// 1.Check out the error and if there is error correct that one 


// $y=2;
// function test()
// {
// $x=2;
// this will generate error global variable is not available to function
// echo “$x to $y”;
// }
// test();

   $y = 2;

   function test()
   {
       $x = 2;
       //  I Corrected the quotes to use straight quotes
       // I Added the global keyword to access the global variable $y
       global $y;
       echo "$x to $y . <br><br>";
   }
   
   test();
   

   echo "<br><br>";

   //using function to check voting eligibility

   function checkVotingEligibility($age)
{
    if ($age >= 18) {
        return "You are eligible to vote!";
    } else {
        return "You are not eligible to vote yet.";
    }
}

echo checkVotingEligibility(21);

echo "<br><br>";

//cvoting eligibility using only function 


function add($num1, $num2)
{
    return $num1 + $num2;
}

function subtract($num1, $num2)
{
    return $num1 - $num2;
}

function multiply($num1, $num2)
{
    return $num1 * $num2;
}

function divide($num1, $num2)
{
    if ($num2 == 0) {
        return "Cannot divide by zero.";
    } else {
        return $num1 / $num2;
    }
}

// Examples:
echo "Here are some working examples <br>";
echo "Addition: 10+5 = " . add(10, 5) . "<br>";
echo "Subtraction:10 -5 = " . subtract(10, 5) . "<br>";
echo "Multiplication:10*5 =  " . multiply(10, 5) . "<br>";
echo "Division: 10 /2 =" . divide(10, 5) . "<br><br>";

//calculating grades using function
function calculateGrade($marks)
{
    $average = array_sum($marks) / count($marks);
    $percentage = ($average / 500) * 100;

    if ($average >= 90) {
        return 'A';
    } elseif ($average >= 80) {
        return 'B';
    } elseif ($average >= 70) {
        return 'C';
    } elseif ($average >= 60) {
        return 'D';
    } else {
        return 'E';
    }
}

// Example :
$marks = [85, 90, 75, 80, 95]; // Change the marks as needed
echo "Grade: " . calculateGrade($marks);


   ?>
</body>
</html>