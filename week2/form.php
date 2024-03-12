<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if and form</title>
</head>
<body>
<style>

    form {
        width: 500px;
        height: 200px;
        border:1px solid black;
        background-color: darkmagenta;
        color: aliceblue;
        padding: 10px;
    }
</style>

    <form action="form.php" method="post"> 
        <!-- post is preferred over 'get' because your entry cannot be seen in your browser with post -->

<label for="number"> Please enter the number you want to check</label>
<input type="text" id="number" name="number">

<input type="submit" value="submit">

    </form>

  


<?php


$number=$_POST ['number'];

echo "hello number $number welcome! <br> <br> ";


    $num=$_POST["number"];

 

//     if($num%2==0)

//     {
//         echo "$num is even";
//     }

//     else {

//     echo "$num is odd";
//     }

// if($num>20)
// echo("$num is greater than 20 <br>");

    
// else if ($num>10)
// echo("$num is greater than 10 <br> ");

// else 

// echo ("$num not greater then 10 or 20 <br>");


    ?>
    
</body>
</html>