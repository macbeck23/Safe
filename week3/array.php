<?php

//THERE ARE DIFFERENT WAYS TO CONSTRUCT AN ARRAY

//EXAMPLE 1:

$array = array(
    "text1" => "text2",
    "text2" => "text1"
);

//or a short version

$array = [
    "text1" => "text2",
    "text2" => "text1"
];


//or:

$array = array(
    1    => "a",
    "1"  => "b",
    1.5  => "c",
    true => "d"
);
var_dump($array);


// indexed arrays
$a = [10,20,30,40,50];

echo $a[2];  //will print 30 because index starts from 0

//second method of Array

$array1 = [100, 200, 34.5, "SAE", true];

echo "<pre>";
print_r($array1);  //this will print the whole of your array
echo "</pre>";

// count 
echo count($array1) . "<br>"; 
for ($i = 0; $i < count($array1); $i++) { 
    echo $array1[$i] . "<br>"; // Display each element of $array1
}

// how to change an element 
$a[1] = "php"; //just choose its index number and redefine it

// to add new element use array_push($a, "js");

echo count($a); //will count length of array

$final_array = array_merge($a, $array1); // this will merge arrays together 
echo "<pre>";
print_r($final_array);
echo "</pre>";

//-----------------------------------------------------------------------------------------

//Associated arrays

$employee = ["John" => "25k", "Simon" => "35k", "Ben" => "45k"];

echo("<pre>");
print_r($employee);
echo("</pre>");

//or:

$employee1 = array("John" => "25k", "Simon" => "35k", "Ben" => "45k");
echo("<pre>");
print_r($employee1);
echo("</pre>");

$employee["Bob"] = "65k"; // you can add this way  

$employee[4] = "75";

$employee[] = "75k";//you don't have to write a value but it will just put in after the last one 
$employee[] = "20k";
echo("<pre>");
print_r($employee);
echo("</pre>");


foreach($employee as $emp_key => $employee_details)
{
    echo "<br>". $emp_key."=>".$employee_details ."<br>";
}
//this will print both the key and the value so will print "John"=> "25k","Simon"=>"35k","Ben"=>"45k"


//my understanding test

$Student = ["Peter" => "7 years", "Simon" => "8 years", "Benjy" => "6 years"];

foreach ($Student as $stu_name => $student_age) {
    echo "<br>" . $stu_name . "=>" . $student_age . "<br>";
}
    //if I only used one variable it would only show the values (ages).

    //_______________________________________________________________________________________

    //Multidimensional arrays

    $Student1 = [
        ["Name" => "Peter", "Studying" => "Maths", "age" => "7 years"],
        ["Name" => "Simon", "Studying" => "English", "age" => "8 years"],
        ["Name" => "Benjy", "Studying" => "Science", "age" => "6 years"],
        ["Name" => "Paul", "Studying" => "Maths", "age" => "8 years"]
    ];
    
    foreach ($Student1 as $student_all) {
        echo("<pre>");
        print_r($student_all); // this will print all thes
        echo("</pre>");
    
        echo($student_all["Name"]); // Accessing the "Name" key of each array element
    }
