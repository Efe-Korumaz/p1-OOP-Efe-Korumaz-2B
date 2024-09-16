<?php

$prices = ["100", "200", "300", "400", "500"];

$i = 0;
while ($i < count($prices)) {
    echo "Orginele prijs is: " . $prices[$i] . "<br>";
    echo "het is nu: " . $prices[$i] + 50 . "<br>";
    $i++;
}