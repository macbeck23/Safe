<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Assignment</title>
</head>
<body>
<?php
// 1. Accessing individual characters and display
$string = 'John';
for ($i = 0; $i < strlen($string); $i++) {
    echo $string[$i] . "<br>";
}

echo "<br>";

// 2. Replacing "PHP" with "Python" in the string
$str = "PHP is open source and backend language, PHP is also a interpreted language";
$new_str = str_replace("PHP", "Python", $str);
echo $new_str . "<br> <br>";

// 3. Reverse the string
$reverse_str = strrev($str);
echo $reverse_str . "<br> <br>";

// 4. Find the length of the string
$length = strlen($str);
echo "Length of string: " . $length . "<br> <br>";

// 5. Count the words in the string
$word_count = str_word_count($str);
echo "Word count: " . $word_count . "<br> <br>";

// 6. Convert string to uppercase, lowercase, ucfirst, ucwords
echo strtoupper($str) . "<br> <br>";
echo strtolower($str) . "<br> <br>";
echo ucfirst($str) . "<br> <br>";
echo ucwords($str) . "<br> <br>";

// 7. Print substring
$string = "I love PHP";
$substring = substr($string, 7);
echo $substring ."<br> <br>";

// 8. Replace "PHP" with "Python" in the string
$str = "I love PHP, I love PHP";
$new_str = str_replace("PHP", "Python", $str);
echo $new_str . "<br> <br>";

// 9. Function to concatenate strings and modify first character to uppercase
function concatenateStrings($str1, $str2) {
    $result = $str1 . $str2;
    $result = ucfirst($result);
    return $result;
}

echo concatenateStrings("hello", "world") ."<br> <br>";

// 10. Function to count characters and convert string to uppercase
function countCharacters($str) {
    $length = strlen($str);
    $str = strtoupper($str);
    return $str;
}

echo countCharacters("hello world") . "<br> <br>";

// 11. Compare two strings
$str1 = "Hello";
$str2 = "hello";
if (strcmp($str1, $str2) === 0) {
    echo "The two strings are equal<br> <br>";
} else {
    echo "The two strings are not equal <br> <br>";
}

// 12. Function to display second half of string
function displaySecondHalf($str) {
    $length = strlen($str);
    $second_half = substr($str, $length / 2);
    return $second_half;
}

echo displaySecondHalf("abcdefghijklmnop") . "<br> <br>";

// 13. Check password length in a registration form
$password = "password123";
if (strlen($password) < 10) {
    echo "Password length should be greater than 10 characters<br>";
} else {
    echo "Password is valid <br> <br>";
}

// Quiz
$st = 'Mariya Smith';
$sub_st = substr($st, 7, 2);
echo $sub_st . "<br> <br>"; // Output: Sm

$string = 'Hello, world';
$length = strlen($string); 
echo $length . "<br> <br>"; // Output: 12
?>

</body>
</html>