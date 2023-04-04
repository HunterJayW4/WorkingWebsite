<?php
session_start();
require_once 'KLogger.php';
require_once 'DAO.php';
$logger = new KLogger ("log.txt" , KLogger::WARN);

$username = $_POST['username'];
$password = $_POST['password'];
$logger->LogDebug("User [{$username}] attempting to log in");

$dao = new DAO();
try {
    $dao->newUser($username, $password);
}
catch (Exception $e) {

}
exit();