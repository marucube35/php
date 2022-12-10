<?php

echo "<h1> String functions </h1> <br/>";

$full_name = "Le Minh Quan";

// Get length of string
echo "Length of string: " . strlen($full_name) . "<br/>";

// Reverse string
echo strrev($full_name) . "<br/>";

// Convert to uppercase, lowercase
echo strtoupper($full_name) . "<br/>";
echo strtolower($full_name) . "<br/>";

// Find and replace
// Input: search, replace, subject
echo str_replace("Quan", "Kwan", $full_name) . "<br/>";

// Check if starts with
if (str_starts_with($full_name, 'Le')) {
    echo "Starts with Le <br/>";
}

// Check if ends with
if (str_ends_with($full_name, 'Quan')) {
    echo "Ends with Quan <br/>";
}

// Sanitize string, used to prevent XSS
echo htmlspecialchars("<h1> Heading </h1>");
echo htmlspecialchars("<script> alert('Hello') </script>");
echo "<br/>";

// Split
$splitted = explode('.', "file.temp.ext");
$extension = end($splitted);
echo "File extension: " . $extension;