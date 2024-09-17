<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="7.1.php" method="post">

        naam: <input type="text" name=name; "wachtwoord: <input type=" password" name=Password; </form>
</body>

</html>

<?php

$name = $_POST['name'];
$password = $_POST['password'];
echo "Naam:" . $name . "<br>";
echo "Wachtwoord:" . $password . "<br>";
    ?>