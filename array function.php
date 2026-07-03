<!DOCTYPE html>
<html>
<head>
    <title>PHP Array Functions</title>
</head>
<body>

<h2>PHP Array Functions</h2>

<?php

// Original Associative Array
$student = array(
    "Name" => "Kajal",
    "Course" => "BCA",
    "City" => "Rajkot"
);

echo "<h3>Original Associative Array</h3>";
echo "<pre>";
print_r($student);
echo "</pre>";


// 1) array_change_key_case()

echo "<h3>1) array_change_key_case() - CASE_LOWER</h3>";
print_r(array_change_key_case($student, CASE_LOWER));

echo "<h3>array_change_key_case() - CASE_UPPER</h3>";
print_r(array_change_key_case($student, CASE_UPPER));


// Numeric Array
$arr = array("Apple", "Banana", "Apple", "Orange", "Banana", "Apple");

echo "<h3>Original Numeric Array</h3>";
echo "<pre>";
print_r($arr);
echo "</pre>";


// 2) array_count_values()

echo "<h3>2) array_count_values()</h3>";
print_r(array_count_values($arr));


// Stack Array
$fruits = array("Apple", "Banana", "Orange");

echo "<h3>Original Stack Array</h3>";
echo "<pre>";
print_r($fruits);
echo "</pre>";


// 3) array_pop()

array_pop($fruits);

echo "<h3>3) After array_pop()</h3>";
print_r($fruits);


// 4) array_push()

array_push($fruits, "Mango", "Grapes");

echo "<h3>4) After array_push()</h3>";
print_r($fruits);


// 5) sort()

$numbers = array(45, 12, 89, 23, 5);

echo "<h3>Original Number Array</h3>";
print_r($numbers);

sort($numbers);

echo "<h3>5) After sort()</h3>";
print_r($numbers);

?>

</body>
</html>