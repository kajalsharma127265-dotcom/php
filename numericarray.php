<?php

$days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

echo "<h2>Numeric Array</h2>";
echo "<pre>";
print_r($days);
echo "</pre>";

$months = array(
    "January" => 30,
    "February" => 28,
    "March" => 31,
    "April" => 30,
    "May" => 31,
    "June" => 30,
    "July" => 31,
    "August" => 31,
    "September" => 30,
    "October" => 31,
    "November" => 30,
    "December" => 31
);

echo "<h2>Associative Array</h2>";
echo "<pre>";
print_r($months);
echo "</pre>";

$laptops = array(
    "Dell" => array(
        "Model" => "Inspiron 15",
        "Price" => 55000
    ),
    "HP" => array(
        "Model" => "Pavilion 14",
        "Price" => 60000
    )
);

echo "<h2>Multidimensional Array</h2>";
echo "<pre>";
print_r($laptops);
echo "</pre>";
?>