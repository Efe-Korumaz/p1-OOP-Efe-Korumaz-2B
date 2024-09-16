<?php

$Grades = ['8.5', '7.0', '6.5', '9.0', '4.5'];

$i = 0;

foreach ($Grades as $grade) {
    echo 'Het cijfer is: ' . $grade . "<br>";
    if ($grade >= 5.5) 
    {
        echo "voldoende" . "<br>";
    }
    else echo "onvoldoende" . "<br>";
};