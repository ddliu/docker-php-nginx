<?php
$envContent = file_get_contents("/env");
foreach(explode("\n", $envContent) as $line) {
    $line = trim($line);
    if ($line == "") {
        continue;
    }
    list($var, $value) = explode("=", $line, 2);
    if (function_exists('putenv')) {
        putenv($line);
    } 

    $_ENV[$var] = $value;
    $_SERVER[$var] = $value;
}