<?php
$localhost = "localhost";
$db = "MySiteDBselkov";
$user = "root";
$password = "";

$link = mysqli_connect($localhost, $user, $password, $db) or
trigger_error(mysqli_error($link),E_USER_ERROR);
mysqli_query($link, "SET NAMES cp1251;") or die(mysqli_error($link));
mysqli_query($link, "SET CHARACTER SET cp1251;") or die(mysqli_error($link));
?>
