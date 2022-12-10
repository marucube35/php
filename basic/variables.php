<?php

echo "<h1> Variables </h1>";

$name = "Quan";
$age = 20;
echo $name;

$has_macbook = false;
echo $has_macbook . '<br/>'; // prints 1 if true, nothing if false

$product_price = 49.000; // implicit type casting
var_dump($product_price); // float(49)

// string concatenation
echo $name . ' is ' . $age . ' years old' . '<br/>';
echo "$name is $age years old <br/>"; // double quotes allow for string interpolation

// expression
echo '1' + '2' . '<br/>'; // 3 (implicit type casting)
echo 5 / 0 . '<br/>'; // INF

//constant
define('SERVER_NAME', 'localhost');
define('DATABASE_NAME', 'mongodb');
echo SERVER_NAME . '<br/>';
echo DATABASE_NAME . '<br/>';
