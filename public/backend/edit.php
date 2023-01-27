<?php
require "authorization.php";
require "database/connection.php";
require "database/query.php";
$perms = checkRole();

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Update the stock quantity
$new_quantity = $_POST['new'];
$id = $_POST['id'];
$queryedit = "UPDATE stocks SET $id = '$new_quantity'";

if ($connection->query($queryedit) === TRUE) {
    echo "Berhasil mengganti stok";
    header("Location: localhost:3000/public/backend/admin-dashboard.php");
    $_SESSION['msg-status'] = 'Berhasil mengganti stok!';
} else {
    echo "Gagal mengganti stok: " . $connection->error;
    $_SESSION['msg-status'] = 'Gagal mengganti stok!' . $connection->error;
}