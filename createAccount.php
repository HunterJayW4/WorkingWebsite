<!DOCTYPE html>
<link rel="stylesheet" href="Style.css">
<link rel="stylesheet" href="loginStyle.css">
<?php include("Header.php");
session_start();
?>

<div class="container">
    <div class="screen">

        <div class="screen__content">
            <form class="login" method="POST" action="create_handler.php">
                <div class="login__field">
                    <i class="login__icon fas fa-user"></i>
                    <input type="text" class="login__input" name="username" placeholder="Username">
                </div>
                <div class="login__field">
                    <i class="login__icon fas fa-lock"></i>
                    <input type="password" class="login__input" name="password" placeholder="Password">
                </div>
                <div class="login__field">
                    <i class="login__icon fas fa-lock"></i>
                    <input type="password" class="login__input" name="secondpassword" placeholder="Re-enter Password">
                </div>
                <button class="button login__submit">
                    <span class="button__text" input type="submit" value="Submit">Create Account</span>
                </button>
                <div class="warning">
                    <?php echo $_SESSION['message']; ?>
                </div>
            </form>
        </div>
        <div class="screen__background">
            <span class="screen__background__shape screen__background__shape1"></span>
        </div>
    </div>
</div>
