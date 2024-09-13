<?php
$products = [
    ['Laptop', 899.99, "800"],
    ['Phone', 599.99, "344"],
    ['TV', 999.99, '245'],
    ['smartWatch', 299.99, '923'],
];

$products[] = ['Tablet', 299.99, 120];

echo $products[4][2];

