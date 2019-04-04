<?php
session_start();
require_once "Dao.php";

$dao = new Dao();
$user = $dao->getUser($_POST["username"]);
if($user) {
    if ($user["password"] === $_POST["password"]) {
        unset($_SESSION["username"]);
        $_SESSION["user"] = $user;
        header("Location: goals.php");
        die();
    } else {
        //incorrect password
        $_SESSION["username"] = $_POST["username"];
        header("Location: login.php");
        die();
    }
} else {
    //user not found
    $_SESSION["username"] = $_POST["username"];
    header("Location: login.php");
    die();
}
