<?php
$day = date('l'); // Gets the current day of the week (e.g., "Monday")

switch ($day) {
    case 'Monday':
        echo "It's Monday";
        break;
    case 'Tuesday':
        echo "It's Tuesday";
        break;
    case 'wednesday':
        echo "It's wednesday";
    default:
        echo "It's thurrsday or friday";
        break;

}
?>