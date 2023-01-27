<?php
$server = "free-mysql.calvscloud.xyz";
$user = "u143_yQ6DugwH5y";
$password = "RB3jlKXj69Zl5K!aRe.IP3L^";
$db = "s143_webadmin";
$connection = mysqli_connect($server, $user, $password, $db);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
  }
?>