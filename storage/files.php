<?php

echo "File handling in PHP <br/>";

$file_path = './fruits.txt';
// $file_path = './animals.txt';

if (file_exists($file_path)) {
    // Read file with file size
    echo readfile($file_path);
    echo "<br/>";

    // Without file size
    $file_handler = fopen($file_path, 'r');
    $file_content = fread($file_handler, filesize($file_path));
    
    echo $file_content;
    fclose($file_handler);
} else {
    $file_handler = fopen($file_path, 'w');
    $file_content = ' Kiwi' . PHP_EOL . 'Mango' . PHP_EOL . 'Water melon';

    fwrite($file_handler, $file_content);
    fclose($file_handler);
}
