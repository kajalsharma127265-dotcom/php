<!DOCTYPE html>
<html>
<head>
    <title>PHP String Functions</title>
</head>
<body>

<?php
// String
$str = "Welcome to PHP Programming";

echo "<h2>String Functions in PHP</h2>";

echo "<b>Original String:</b> " . $str . "<br><br>";

// 1. strlen()
echo "<b>1. strlen()</b><br>";
echo "Length of String: " . strlen($str) . "<br><br>";

// 2. strpos()
echo "<b>2. strpos()</b><br>";
echo "Position of 'PHP': " . strpos($str, "PHP") . "<br><br>";

// 3. str_word_count()
echo "<b>3. str_word_count()</b><br>";
echo "Total Words: " . str_word_count($str) . "<br><br>";

// 4. strrev()
echo "<b>4. strrev()</b><br>";
echo "Reverse String: " . strrev($str) . "<br><br>";

// 5. strtolower()
echo "<b>5. strtolower()</b><br>";
echo "Lowercase: " . strtolower($str) . "<br><br>";

// 6. strtoupper()
echo "<b>6. strtoupper()</b><br>";
echo "Uppercase: " . strtoupper($str) . "<br><br>";

?>

</body>
</html>