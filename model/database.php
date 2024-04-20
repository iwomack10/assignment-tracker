<?php

$dsn = 'mysql:host=localhost;dbname=assignment_tracker';
$username = 'root';
// $passwrod = 'noneRN';

try {

    $db = new PDO($dsn, $username);
} catch (PDOException $e) {
    $error = "Database Error: ";
    $error .= $e->getMessage();
    include('view/error.php');
    exit();
}
