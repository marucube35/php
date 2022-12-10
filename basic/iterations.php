<?php

echo "<h1> Iterations </h1> <br/>";

$fruits = [
    'Apple', 'Orange', 'Banana', 'Mango', 'Pineapple'
];

$animals = [
    'Dog', 'Cat', 'Bird', 'Fish', 'Tiger'
];

$person = [
    'name' => 'John',
    'age' => 20
];

// foreach loop
foreach ($animals as $animal) {
    echo "$animal<br/>";
}

// foreach with index
foreach ($animals as $index => $animal) {
    echo "$index - $animal<br/>";
}

// Use foreach for associative array
foreach($person as $key => $value)
{
    echo "$key - $value<br/>";
}
