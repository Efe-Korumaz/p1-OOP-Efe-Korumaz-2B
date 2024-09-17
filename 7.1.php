<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="verwerk.php" method="post">

        Telefoon nummer: <input type="text" name="Tel">;
        "Verjaardag" <input type="date" name="Bday">;
        <input type="submit" value="submit"  >
    </form>
</body>

</html>

<?php

$name = $_POST['Tel'];
$password = $_POST['Bday'];

echo "uw nummer:" . $Tel . "<br>";
echo "Verjaardag:" . $Bday;


