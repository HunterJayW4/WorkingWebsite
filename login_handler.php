<?php
session_start();
require_once 'KLogger.php';
require_once 'DAO.php';
$logger = new KLogger ("log.txt" , KLogger::WARN);

$username = $_POST['username'];
$_SESSION['username'] = $username;
$password = $_POST['password'];
$logger->LogDebug("User [{$username}] attempting to log in");

echo $username;
$dao = new DAO();
$pass = $dao->getPass($username);
foreach ($pass as $tmp)
{
    $testPass = $tmp['pass'];
}


// check the database
if ($testPass == $password) {
    $_SESSION['auth'] = true;
    header("Location: shop.php");
    $_SESSION['user'] = $username;
    $_SESSION['message'] = 'Welcome '.$username;
    exit();
} else {
    $logger->LogWarn("User [{$username}] invalid username or password");
    $_SESSION['message'] = 'Invalid Username or password';
    header("Location: login.php");
    exit();
}