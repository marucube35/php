<?php

echo "<h1> Conditionals </h1> <br/>";

$reactions = [
    'Like', 'Love', 'Haha', 'Wow', 'Sad', 'Angry'
];

// Checks if the array is empty
if (empty($reactions)) {
    echo "No reaction <br/>";
} else {
    echo "There are a reaction <br/>";
}

// Ternary operator
echo !(empty($reactions)) ? $reactions[0] . ' <br/>' :
    'No reactions' . ' <br/>';

// Coallesce operator
$first_reaction = $reactions[0] ?? 'No reactions'; // set fallback value
