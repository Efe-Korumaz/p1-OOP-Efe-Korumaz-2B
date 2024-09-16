<?php

$book = [
    "title" => '1984',
    "author" => 'George Orwell',
    "year" => '1949'
];

$i = 0;

foreach ($book as $Key => $Value) {
    echo "de " . $Key . " is: " . $Value . "<br>";
}
;