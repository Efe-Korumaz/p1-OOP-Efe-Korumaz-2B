<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="GET" action="verwerk.php"> 
    Zoekterm: <input type="text" name="search"><br> 
    <input type="submit" value="Zoek"> 
</form>
    
</body>
</html>

<?php

$search = $_GET["search"];
echo "Zoekterm" . $search;

