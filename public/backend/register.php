<?php
require "database/connection.php";
require "database/query.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputUsername = $_POST['username'];
    $inputEmail = $_POST['email'];
    $inputPassword = $_POST['password'];
    $hashedPassword = password_hash($inputPassword, PASSWORD_DEFAULT);
    $insertQuery =
        "INSERT INTO users(username, email, password, role)
        VALUES ('$inputUsername', '$inputEmail', '$hashedPassword', 'user')";
    $result = mysqli_query($connection, $insertQuery);

    session_start();
    $_SESSION['msg'] = 'Registrasi berhasil! Silahkan login.';
    header('Location: http://localhost:3000/public/login.php');
}
?>