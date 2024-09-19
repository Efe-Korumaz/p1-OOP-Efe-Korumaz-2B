<?php

session_start();
$_SESSION['Langueage'] = "Nederlands";
echo "Taal: " . $_SESSION['Langueage'];

unset($_SESSION['Langueage']);