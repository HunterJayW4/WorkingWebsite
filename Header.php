
<html>
    <head>
        <div id="Header">
            <div id="HeaderRec">
                <img src= "Images/logoTemp2.png" alt="logo" id = "Logo">
                <img src= "Images/cart.png" alt="ShoppingCart", class="Cart" onclick="location.href='Cart.php';">

                <div onclick="location.href='login.php';" class="signDiv">
                    <?php
                     if (!isset($_SESSION['auth']))
                     {
                         echo '<button>SIGN IN</button>';
                     }
                     else
                     {
                         echo 'Welcome '.$_SESSION['user'];
                         echo '<br>';
                         echo '<a href="logout.php", id="logout">Logout</a>';
                     }
                    ?>
                </div>
            </div>
        </div>
        <hr>
        <div id="Nav">
            <ul class="nav">
                <li><a href="index.php">HOME</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="shop.php">SHOP</a></li>
                <li><a href="contact.php">CONTACT</a></li>
            </ul>
        </div>
    </head>
</html>

