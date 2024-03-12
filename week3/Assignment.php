<?php
           /*Assignment
           Write a PHP script which will display in the following way :
           c
           c++
           java
           PHP*/
            
           
           $languages = array("c", "c++", "java", "PHP");
           foreach ($languages as $language) {
               echo $language . "<br> ";}

               {echo "<br>";}

           
//            2. Write a PHP script which will display in the following way :
//                 Output : 
//             Apple.
//            Apricots.
//            Avocado.
//            Banana.
//            Blackberries.
//            Blackcurrant.
//            Blueberries.

$fruits = array("Apple.", "Apricots.", "Avocado.", "Banana.", "Blackberries.", "Blackcurrant", "Blueberries");
foreach ($fruits as $fruit) {
    echo $fruit . ".<br>";
}
{echo "<br>";}

// 3.Write a program to add 10 random numbers and calculate the average.

$sum = 0;
for ($i = 0; $i < 10; $i++) {
    $randomNumber = rand(1, 100);
    $sum += $randomNumber;
}
$average = $sum / 10;
echo "Average of 10 random numbers: " . $average;
{echo "<br>";}
{echo "<br>";}
             
//            4. $x = array(1, 2, 3, 4, 5);
//            Delete an element from the above array and display the array after delete the element.
//            Note: Used the mentioned function to delete the array element  unset($array[3]);  
           
$x = array(1, 2, 3, 4, 5);
unset($x[3]); // Deletes the element at index 3
print_r($x);
           
//            5.Write a program to sort the array.
//            For example array [90,20,3,10,6,4]
//              Note:  sort() - sort arrays in ascending order
{echo "<br>";}
{echo "<br>";}

$array = array(90, 20, 3, 10, 6, 4);
sort($array);//sorts arrays in ascending order
print_r($array);  

{echo "<br>";}
{echo "<br>";}
//              6. Write a program to loop through an associative array using foreach() or with each().
//                Suppose an associative array is -
//              $a = array('One' => 'Cat', 'Two' => 'Dog', 'Three' =>'Elephant', 'Four' => 'fox');

$a = array('One' => 'Cat', 'Two' => 'Dog', 'Three' =>'Elephant', 'Four' => 'fox');
foreach ($a as $key => $value) {
    echo "$key : $value <br>";
}

{echo "<br>";}
{echo "<br>";}

//            7 . assignment
           
//            Create this table using an array and display. 

$data = array(
  array("First Name", "Last Name", "Address", "City", "Age"),
  array("Mickey", "Mouse", "123 Fantasy Lane", "Anaheim", 73),
  array("Bat", "Man", "321 Cavern Ave", "Gotham", 54),
  array("Wonder", "Woman", "987 Truth Way", "Paradise", 39),
  array("Donald", "Duck", "555 Quack Street", "Mallard", 65),
  array("Bugs", "Bunny", "567 Carrot Street", "Rascal", 58),
  array("Wiley", "Coyote", "999 Acme Way", "Canyon", 61),
  array("Cat", "Woman", "234 Purrfect Street", "Hairball", 32),
  array("Tweety", "Bird", "543", "Itotitaw", 28),
);

echo "<table border='1'>";
foreach ($data as $index => $row) {
    echo "<tr";
    if ($index === 0) {
        echo " style='color: Blue;'";
    }
    echo ">";
    foreach ($row as $cell) {
        echo "<td>$cell</td>";
    }
    echo "</tr>";
}
echo "</table>";

{echo "<br>";}
{echo "<br>";}
           
//            8. You need to write a program in PHP to remove a specific element by value from an array using a PHP program.
//            Instructions:
//            Take an array with a list of month names.
//            Take a variable with the name of value to be deleted.
//            You can use PHP array functions or foreach loop.


//            Solution 1: Using array_search()
//            With the help of array_search() function, we can remove specific elements from an array.
//            Notr: How array_search() works.  array_search($delete_item, $months)
$months = array("January", "February", "March", "April", "May", "June", "July");
$delete_item = "March";

$key = array_search($delete_item, $months);
if ($key !== false) {
    unset($months[$key]);
}
print_r($months);
           
{echo "<br> <br>";}           
// 9.  $color = array('Green', 'Amber','Red');
//            Write the program to sort the array and display.
           
$color = array('Green', 'Amber','Red');
sort($color);
print_r($color);
// 9.How to check if an array is a subset of another in PHP?
//   

{echo "<br> <br>";}  

$largeArray = array("apple", "banana", "cherry", "date", "blueberry", "strawberry");
$smallArray = array("banana", "date");

$isSubset = true;
foreach ($smallArray as $item) {
    if (!in_array($item, $largeArray)) {
        $isSubset = false;
        break;
    }
}

if ($isSubset) {
    echo "The small array is a subset of the large array.";
} else {
    echo "The small array is not a subset of the large array.";
}

// ?>