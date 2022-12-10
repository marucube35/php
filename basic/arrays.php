<?php

echo "<h1> Arrays </h1> <br/>";

$numbers = [1, 2, 3, 4, 5];
$fruits = ['apple', 'banana', 'orange'];

print_r($numbers);
echo $fruits[0];

// Associative array (like a dictionary in Python)
$colors = [
    3 => '#ff0000',
    4 => '#00ff00',
    5 => '#0000ff',
];
// echo $colors[3];

// Key as a string
$hex_colors = [
    'red' => '#ff0000',
    'green' => '#00ff00',
    'blue' => '#0000ff',
];
// echo $hex_colors['green'];

// Array of arrays
$class = [
    [
        'name' => 'Quan',
        'age' => 20,
    ],
    [
        'name' => 'Kwan',
        'age' => 20,
    ],
    [
        'name' => 'Kuan',
        'age' => 20,
    ]
];

print_r($class);
echo $class[1]['name'];

var_dump(json_encode($class));
