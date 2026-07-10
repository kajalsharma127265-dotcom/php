<!DOCTYPE html>
<html>
<head>
    <title>Type Casting using settype() and gettype()</title>
</head>
<body>

<h2>PHP Type Casting Example</h2>

<?php

// Integer variable
$num = 100;

echo "<h3>Before Type Casting</h3>";
echo "Value: " . $num . "<br>";
echo "Data Type: " . gettype($num) . "<br><br>";

// Convert integer to string
settype($num, "string");

echo "<h3>After Casting to String</h3>";
echo "Value: " . $num . "<br>";
echo "Data Type: " . gettype($num) . "<br><br>";

// Convert string to float
settype($num, "float");

echo "<h3>After Casting to Float</h3>";
echo "Value: " . $num . "<br>";
echo "Data Type: " . gettype($num) . "<br><br>";

// Convert float to boolean
settype($num, "boolean");

echo "<h3>After Casting to Boolean</h3>";
echo "Value: ";
var_dump($num);
echo "<br>";
echo "Data Type: " . gettype($num);

?>

</body>
</html>