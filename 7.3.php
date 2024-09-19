<?php

session_start();
$_SESSION['Language'] = "Nederlands";
echo "Taal: " . $_SESSION['Langueage'];

unset($_SESSION['Langueage']);