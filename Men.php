<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION['auth'])) {
    header("Location: login.php");
    exit();
}
?>

<?php include("Header.php");
require_once('DAO.php');
?>


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
        <div id="Gender">
            <div onclick="location.href='Men.php';" class="Man">
                <style>
                    .Man {background-image: url("Images/MSurfSelect.png");}
                </style>
            </div>
            <div onclick="location.href='Women.php'" class="Woman"></div>
        </div>
    </div>
</div>
<div class="shopping">
    <h1 class="shopHeader">MEN'S SHORTS</h1>
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
                echo $urlString;
                echo '<div class="text">';
                    echo $shorts['item']." $".$shorts['price'];
                 echo '</div>';

//            echo '<form class="cart" method="post" action="cartManager.php">';
//                    echo '<div id="addTo">';
//                        echo '<button class="button login__submit" type="submit" name="short")>';
//                        echo '<span class="button__text" onclick="alert(\'Item added to shopping cart.\')">Add To Cart</span>';
//                        echo '</button>';
//                    echo '</div>';
//            echo '</form>';

            echo '<form class="cart" method="post" action = "cartManager.php">';
            $id = $shorts['id'].';'.$_SESSION['user'];
                echo '<button class="button login__submit" type ="submit" name="short" value='.$id.'>ADD TO CART</button>';
                echo $dao->getCart($_SESSION['user']);
            echo '</form>';

            echo '</div>';
        }
        ?>
    </div>

</div>
</p>
</body>
</html>