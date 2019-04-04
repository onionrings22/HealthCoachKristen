<?php
$thisPage = "login";
include_once("header.php");
?>
<h1>Log in</h1>

<form id="login-div" action="login_handler.php" method="post">
    <div>Username: <input type="text" name="username" value="<?php if (isset($_SESSION["username"])) echo $_SESSION["username"]; ?>"></div>
    <div>Password: <input type="password" name="password"></div>
    <div><input type="submit" value="Log in"></div>
</form>

<!--<p>-->
<!--    Not signed up? <a href="login.php">Register now!</a>-->
<!--</p>-->
<img src="img/try.jpg" height="500" class="bottom-img">
<?php
include_once ("footer.html");
