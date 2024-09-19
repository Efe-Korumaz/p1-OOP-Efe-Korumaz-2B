<form method="POST" action="7.5.php">
    Favoriete Kleur: <input type="color" name="color"><br>
    <input type="submit" value="verzenden">
</form>

<?php
$color = $_POST["color"];

session_start();
$_SESSION['color'] = $color;
echo $_SESSION['color'];