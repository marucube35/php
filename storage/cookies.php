<?php

// Save cookie
// Input: key, value, expiration time
setcookie("age", 20, time() + 24 * 3600); // expires in 24 hours

// Delete cookie by setting expiration time to past
setcookie("age", '', time() - 24 * 3600); // expires in 24 hours

// Check if cookie exists with $_COOKIE super global
if (isset($_COOKIE["age"])) {
    echo "Cookie exists: $_COOKIE[age]";
} else {
    echo "Cookie does not exist";
}