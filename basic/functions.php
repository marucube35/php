<?php

echo "<h1> Functions </h1> <br/>";

$default_name = "Quan";

function greeting($name)
{
    echo "Hello $name <br/>";

    // local varible
    $new_name = "Kuan";

    // global variable with 'global' keyword
    global $default_name;
    echo "$default_name <br/>";
}
greeting("Kwan");

// Anonymous function
$sum = function ($a, $b) {
    return $a + $b;
};
echo $sum(1, 2) . "<br/>";

// Arrow function
$subtract = fn ($a, $b) => $a - $b;
echo $subtract(1, 2) . "<br/>";

