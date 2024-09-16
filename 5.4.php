<?php

$Countries = [

    'Amsterdam' => 'Nederland',
    'Berlijn' => 'Duitsland',
    "Parijs" => 'Frankrijk',

];

foreach ($Countries as $Key => $Value) {

    echo $Key . " " . "is de hoofdstad van". ' '  . $Value . "<br>";
}