<?php
$thisPage = "login";
include_once("header.php");
?>
<h1>Log in</h1>
<form>
    <div>Username: <input type="text" name="username"></form></div>
    <div>Password: <input type="password" name="password"></div>
    <div><input type="submit" value="Log in"></div>
</form>
<p>
    Not signed up? <a>Register now!</a>
</p>
<?php
include_once ("footer.html");
