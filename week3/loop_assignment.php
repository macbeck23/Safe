<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop Asignment</title>
</head>
<body>
<?php
echo "<p>Counting from 5 to 15:</p>";
for ($i = 5; $i <= 15; $i++) {
    echo $i . "<br>  <br>";
}
//Factorial php program
$num = 5;
    $factorial = 1;
    for ($i = 1; $i <= $num; $i++) {
        $factorial *= $i;
    }
    echo "<p>Factorial of $num is: $factorial</p><br><br>";
    

    //creating a pattern with loop

    echo "<p>Pattern with *:</p>";
    for ($i = 1; $i <= 4; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
  ?>


    <table border="1">
    <!-- Chess with PHP -->
    <?php
    for ($row = 1; $row <= 8; $row++) {
        echo "<tr>";
        for ($col = 1; $col <= 8; $col++) {
            if (($row + $col) % 2 == 0) {
                echo "<td style='background-color: black;'></td>";
            } else {
                echo "<td style='background-color: white;'></td>";
            }
        }
        echo "</tr>";
    }
    echo "<br>";

?>

<p>Simple Calculator </p>
<!-- Html -->
    <form method="post">
        <input type="number" name="num1" placeholder="Enter first number" required>
        <select name="operator" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="num2" placeholder="Enter second number" required>
        <button type="submit" name="calculate">Calculate</button>
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];
        switch ($operator) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                $result = $num1 / $num2;
                break;
            default:
                $result = "Invalid choice";
                break;
        }
        echo "Result: $result";
    }
echo"<br> <br>";
//Finding out odd and even numbers
    $num = 1;
    echo "<p>Even and Odd numbers between 1 to 20:</p>";
    while ($num <= 20) {
        if ($num % 2 == 0) {
            echo "$num is even<br>";
        } else {
            echo "$num is odd<br>";
        }
        $num++;}//this will display all numbers to 20 stating if even or odd.
    ?>

</body>
</html>