<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment week 2</title>
</head>
<body>
    


<?php
 


 $age = 16;

 if ($age>=18)
 {
    echo ("You are eligible to vote <br>");
 }

else if($age>17)
    echo ("You will be able to vote soon, please come back when you are 18 <br>");

else
    echo ("Sorry you are not eligible to vote <br><br>" );



//     Grade A+ if maks equal or greater than 95 
//     Grade A if maks equal or greater than 80
//     Grade B if maks equal or greater than 70
//     Grade C if maks equal or greater than 60
//    Grade D if maks equal or greater than 50
//    Other Fail
  

$grade= 9;

 if ($grade>=95)
        echo ("Wow amazing! You are an A Star Pupil  A* <br> ");

else if($grade>=80)
    echo ("Brilliant You have passed with flying colours. Your result is an A <br>");
else if($grade>=70)
    echo ("Well done, excelllent score of B <br>");
else if($grade>=60)
    echo ("GOOD WORK You have been awarded a C <br>");
else if($grade>=80)
    echo ("Nice Try, You got a Grade D <br>");
else 
    echo ("Unfortunately you have failed this time, Please revise and try again <br> <br>");

$todaysDate = date('l');

if(($todaysDate = 'friday') || ($todaysDate='Saturday'))
{

echo ("yay its $todaysDate Have a nice Weekend <br>");
}
else{
echo ("ok so its $dtodaysDate, dont worry, its nearly the weekend! ");

}

// $todaysDate = date('l');
// echo $todaysDate;


?>


<?php 
 $name = "SAE"; 
 echo "<h1 style= color:blue;>Hello User, </h1> <p>Welcome to {$name}. (THIS IS HTML WITHIN A PHP) <br> <br></p>"; 
?>

<?php
$dayOfWeek = "Friday";

switch($dayOfWeek)
{

    case 'Monday':
    echo "Today is Monday";
    case 'Tuesday':
        echo "Today is Tuesday";
        case 'Wednesday':
            echo "Today is Wednesday";
            case 'Thursday':
                echo "Today is Thursday";
                case 'Friday':
                    echo "Today is Friday <br> <br>";
                    break;
                    case 'Saturday':
                        echo "Today is Saturday";
                        break;
                        case 'Sunday':
                            echo "Today is Sunday ";
                            break;
                         
}



$grade ='c';
switch ($grade)
{

    case 'A':
    case 'a':
        echo "Excellent";
        break;
    case 'B':
    case 'b':
        echo "Nice";
    default:
       echo "Invalid grade <br> <br>";
}

$age= 15;

switch(true)

{

    case($age>20):
        echo "Please Enjoy the Movie";
        break;
        case($age>=15) && ($age<=30):
            echo "You can only watch the movie with a parent";
            break;
            case($age>=10)&& ($age<=14):
                echo "Sorry You cannot watch this movie";
                break;
                default:
                echo "Invalid age";

}
?>






</body>
</html>