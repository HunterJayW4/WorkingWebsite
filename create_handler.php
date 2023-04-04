<?php
session_start();
require_once 'KLogger.php';
require_once 'DAO.php';
$logger = new KLogger ("log.txt" , KLogger::WARN);

$username = $_POST['username'];
$password = $_POST['password'];
$second = $_POST['secondpassword'];

if ($password != $second)
{
    header("Location: createAccount.php");
    $_SESSION['mesasage']='PASSWORDS MUST MATCH';
    exit();
}

$logger->LogDebug("User [{$username}] attempting to log in");

$dao = new DAO();
$dao->newUser($username, $password);
header("Location: login.php");


exit();