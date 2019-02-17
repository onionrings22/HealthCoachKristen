<?php
$thisPage = "login";
include_once("header.php");
?>
<h1>Log in</h1>
<form>
    <div>Username: <input type="text" name="username"></div>
    <div>Password: <input type="password" name="password"></div>
    <div><input type="submit" value="Log in"></div>
</form>
<p>
    Not signed up? <a href="login.php">Register now!</a>
</p>
<?php
include_once ("footer.html");
