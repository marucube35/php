<?php

echo "<h1> Array functions </h1> <br/>";


$fruits = [
    'Apple', 'Orange', 'Banana', 'Mango', 'Pineapple'
];

// Counting
$count = count($fruits);
// echo "Number of fruits: " . $count . "<br/>";

// Check existed
$is_existed = in_array('Water melon', $fruits);
// var_dump($is_existed);
$is_existed = in_array('Mango', $fruits);
// var_dump($is_existed);
// echo "<br/>";

// Insert
array_push($fruits, 'Water melon');
// print_r($fruits);
// echo "<br/>";

// Insert at the beginning
array_unshift($fruits, 'Grape');
// print_r($fruits);
// echo "<br/>";

// Delete at the end
array_pop($fruits);

// Delete at the beginning
array_shift($fruits);

// Delete by index
unset($fruits[1]);
// print_r($fruits);

// Chunk the array
$chunked = array_chunk($fruits, 2);
// print_r($chunked);

// Merge arrays
$merged = array_merge($chunked[0], $chunked[1]);
// print_r($merged);

// Spread operator
$cloned = [...$merged]; // clone the array 
$cloned[0] = "Kiwi";
// print_r($cloned); // same value but different memory address

// Merge with spread operator
$merged = [...$chunked[0], ...$chunked[1]];
// print_r($merged);

// Combine arrays into an object
$keys = ['name', 'age', 'email'];
$values = ['Kwan', 20, ' [email@protected] '];
$combined = array_combine($keys, $values);
// args must have the same length

// print_r($combined);
// print_r(array_keys($combined)); // get the keys
// print_r(array_values($combined)); // get the values

// Switch key and value
$flipped = array_flip($fruits);
// print_r($flipped);

// Create numbers with range()
$numbers = range(1, 10);
// print_r($numbers);

// Sort an array in descending order
$sorted = rsort($numbers);
print_r($numbers);

// Map an array with different values
// Input: callback function, source array
// Output: mapped array
$square_numbers = array_map(fn ($number) => $number * $number, $numbers);
// print_r($square_numbers);

// Filter out some values
// Input: source array, callback function
// Output: filtered array
$filtered = array_filter($square_numbers, fn ($number) => $number % 2 == 0);
// print_r($filtered);
