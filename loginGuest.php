<?php
session_start();
require_once 'KLogger.php';
$logger = new KLogger ("log.txt" , KLogger::WARN);

$username = 'guest';
$password = 'pass';

$logger->LogDebug("User [{$username}] attempting to log in");

// check the database
if ($username == 'guest' && $password == 'pass') {
    $_SESSION['auth'] = true;
    header("Location: shop.php");
    exit();
} else {
    $logger->LogWarn("User [{$username}] invalid username or password");
    $_SESSION['message'] = 'Invalid Username or password';
    header("Location: login.php");
    exit();
}