





<?php
session_start();

$_POST['student'];
$_POST['age'];

$_GET['page'];

unset($_SESSION['student']);
$_SESSION = [];