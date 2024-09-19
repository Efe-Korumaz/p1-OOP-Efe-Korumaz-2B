<a href="op2.php?voornaam=Efe&achternaam=Korumaz">Klik hier om je naam te versturen</a>

<?php

$voornaam = $_GET["voornaam"];
$achternaam = $_GET["achternaam"];
echo "<br>Voornaam: $voornaam";
echo "<br>Achternaam: $achternaam";

$search = $_GET["search"];
echo "Zoekterm" . $search;

