
<!DOCTYPE html>

<?php
session_start();
if (!isset($_SESSION['auth'])) {
    header("Location: login.php");
    exit();
}
?>

<?php include("Header.php"); ?>
<?php include_once("DAO.php"); ?>

<html>
<link rel="stylesheet" href="Style.css">
<title>Idaho River Shorts - Shop</title>
<head>
    <link rel="icon" type="image/x-icon" href="https://cdni.iconscout.com/illustration/premium/thumb/man-surfing-in-sea-6210638-5121889.png">
</head>
<body>
<div id="SexSelect">
    <div id="waves">
        <img src="Images/bye.png", style="float: left", id="invWave">
        <div onclick="location.href='Men.php';" class="Man"></div>
        <div onclick="location.href='Women.php'" class="Woman"></div>
    </div>
</div>
<div class="shopping">
    <div class="items">

        <?php


        $dao = new DAO();
        $all = $dao->getMens();
        foreach($all as $shorts)
        {
            $url = $shorts['pics'];
            $url = "'".$url."'";
            $urlString = '<img src='.$url.', class="item">';

            echo '<div class="itemBlock">';
            echo '<img src=\'Images/cart.jpg\', class="cartOverlay">';
            echo $urlString;
            echo '<div class="text">';

            echo $shorts['item']." $".$shorts['price'];

            echo '</div>';
            echo '</div>';
        }

        $dao = new DAO();
        $all = $dao->getWomens();
        foreach($all as $shorts)
        {
            $url = $shorts['pics'];
            $url = "'".$url."'";
            $urlString = '<img src='.$url.', class="item">';

            echo '<div class="itemBlock">';
            echo '<img src=\'Images/cart.jpg\', class="cartOverlay">';
            echo $urlString;
            echo '<div class="text">';

            echo $shorts['item']." $".$shorts['price'];

            echo '</div>';
            echo '</div>';
        }


        ?>
    </div>

</div>
</body>
</html>