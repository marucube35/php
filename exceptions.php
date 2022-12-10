<?php


function divide($a, $b)
{
    if (!$b) {
        throw new Exception("Division by zero");
    }
    return $a / $b;
}

try {
    echo divide(10, 2) . "<br>";
    echo divide(5, 0) . "<br>";
} catch (Exception $e) {
    echo "Caught exception: " . $e->getMessage() . "<br>";
} finally {
    echo "Finally come here...<br>";
}

echo "Program runs here...<br>";
