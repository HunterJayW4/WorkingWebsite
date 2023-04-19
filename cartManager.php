<?php
include("DAO.php");


$dao = new DAO();
$user = 'null';
$id = 0;

foreach($_POST as $items)
{
    $array = explode(';', $items, $limit = PHP_INT_MAX);
    echo print_r($array, true);

    $id = $array[0];
    $user = trim($array[1]);
}
//$cart = $dao->getCart($user);
//$dao->addToCart($user, $id.';'.$cart);
$dao->addToCart($user, $id);




echo $id;

header("Location: Men.php");
exit();
