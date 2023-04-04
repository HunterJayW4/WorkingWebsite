<!DOCTYPE html>

<?php
session_start();
if (!isset($_SESSION['auth'])) {
    header("Location: login.php");
    exit();
}
?>

<?php include("Header.php"); ?>

<html>
<link rel="stylesheet" href="Style.css">


</html>
