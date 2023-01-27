<?php
require "database/connection.php";
require "database/query.php";

$inputEmail = $_POST['email'];
$inputPW = $_POST['password'];

$input = "SELECT * FROM users WHERE email = '$inputEmail'";
$inputUser = mysqli_query($connection, $input);
$dataUser = mysqli_fetch_assoc($inputUser);

$verifPW = password_verify($inputPW, $dataUser['password']);

session_start();

if ($dataUser['email'] && $verifPW == true) {
    $_SESSION['email'] = $dataUser['email'];
    $_SESSION['role'] = $dataUser['role'];

    $_SESSION['msg'] = 'Login Berhasil!';
    header("Location: localhost:3000/public/backend/admin-dashboard.php");
} else {
    $_SESSION['msg'] = 'Login Gagal. Email/Password kamu salah!';
    header("Location: localhost:3000/public/g.php");
}
?>