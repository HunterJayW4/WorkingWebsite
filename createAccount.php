<!DOCTYPE html>
<link rel="stylesheet" href="Style.css">
<link rel="stylesheet" href="loginStyle.css">
<?php include("Header.php"); ?>

<div class="container">
    <div class="screen">
        <div class="screen__content">
            <form class="login" method="POST" action="login_handler.php">
                <div class="login__field">
                    <i class="login__icon fas fa-user"></i>
                    <input type="text" class="login__input" name="username" placeholder="Username">
                </div>
                <div class="login__field">
                    <i class="login__icon fas fa-lock"></i>
                    <input type="password" class="login__input" name="password" placeholder="Password">
                </div>
                <button class="button login__submit">
                    <span class="button__text" input type="submit" value="Submit">Create Account</span>
                </button>
            </form>
        </div>
        <div class="screen__background">
            <span class="screen__background__shape screen__background__shape1"></span>
        </div>
    </div>
</div>
