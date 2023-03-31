<?php
require_once 'pdoconfig.php';
try {
    $conn = new PDO("mysql:host=localhost;dbname=shop", 'hunty', 'Hunt2009');
    echo "Connected to shop at localhost successfully.";
} catch (PDOException $pe) {
    die ("Could not connect to the database shop :" . $pe->getMessage());
}