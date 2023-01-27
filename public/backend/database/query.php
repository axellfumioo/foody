<?php
$dPstring = "SELECT * FROM stocks";

$stokbarang1 = mysqli_query($connection, "SELECT apel FROM stocks");
$stokbarang2 = mysqli_query($connection, "SELECT jeruk FROM stocks");
$stokbarang3 = mysqli_query($connection, "SELECT mangga FROM stocks");
$stokbarang4 = mysqli_query($connection, "SELECT pisang FROM stocks");
$stokbarang5 = mysqli_query($connection, "SELECT melon FROM stocks");
$stokbarang6 = mysqli_query($connection, "SELECT nanas FROM stocks");
$stokbarang7 = mysqli_query($connection, "SELECT semangka FROM stocks");
$stokbarang8 = mysqli_query($connection, "SELECT anggur FROM stocks");
$stokbarang9 = mysqli_query($connection, "SELECT pepaya FROM stocks");
$resultdp = mysqli_query($connection, $dPstring);