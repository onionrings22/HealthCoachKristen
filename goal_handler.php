<?php
session_start();
include_once "Dao.php";

$dao = new Dao();

if (preg_match('/[\w \.\!\,]{5}[\w \.\!\,]*$/',$_POST["text"])) {
    unset($_SESSION["goal"]);
    $dao->addGoal($_SESSION["user"]["username"],$_POST["text"]);
} else {
    $_SESSION["goal"] = $_POST["text"];
}
header("Location: goals.php");
die();