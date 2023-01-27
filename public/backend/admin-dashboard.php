<?php
require "authorization.php";
require "database/connection.php";
require "database/query.php";
$perms = checkRole();

if (isset ($_SESSION['msg-status'])) {
  echo "<script>alert(".$_SESSION['msg-status']."</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foody - Website menjual berbagai jenis makanan</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<center> <a><?php echo $_SESSION["email"]?></a> </center>
<center> <a href="logout.php">Logout</a></center>
<table border="1">
    <tr>
        <th>Produk</th>
        <th>Stok</th>
        <th>Action</th>
    </tr>
    <?php $row = mysqli_fetch_assoc($resultdp) ?>
    <form action="edit.php" method="post">
        <tr></tr>
            <td>Apel</td>
            <td><?php $row = mysqli_fetch_array($stokbarang1); $data = $row["apel"]; echo $data." Item"; ?></td>
            <td><input type="number" value="Edit Stok" name="new" id="new" placeholder="Masukan jumlah akhir!"></td>
            <td><input type="hidden" name="id" id="id" value="apel"></td>
        </tr>
        <tr>
            <td>Jeruk</td>
            <td><?php $row = mysqli_fetch_array($stokbarang2); $data = $row["jeruk"]; echo $data." Item"; ?></td>
            <td><input type="number" value="Edit Stok" name="new" id="new" placeholder="Masukan jumlah akhir!"></td>
            <td><input type="hidden" name="id" id="id" value="jeruk"></td>
        </tr>
        <tr>
            <td>Mangga</td>
            <td><?php $row = mysqli_fetch_array($stokbarang3); $data = $row["mangga"]; echo $data." Item"; ?></td>
            <td><input type="number" value="Edit Stok" name="new" id="new" placeholder="Masukan jumlah akhir!"></td>
            <td><input type="hidden" name="id" id="id" value="mangga"></td>
        </tr>
        <tr>
            <td>Pisang</td>
            <td><?php $row = mysqli_fetch_array($stokbarang4); $data = $row["pisang"]; echo $data." Item"; ?></td>
            <td><input type="number" value="Edit Stok" name="new" id="new" placeholder="Masukan jumlah akhir!"></td>
            <td><input type="hidden" name="id" id="id" value="pisang"></td>
        </tr>
        <tr>
            <td>Melon</td>
            <td><?php $row = mysqli_fetch_array($stokbarang5); $data = $row["melon"]; echo $data." Item"; ?></td>
            <td><input type="number" value="Edit Stok" name="new" id="new" placeholder="Masukan jumlah akhir!"></td>
            <td><input type="hidden" name="id" id="id" value="melon"></td>
        </tr>
        <tr>
            <td>Nanas</td>
            <td><?php $row = mysqli_fetch_array($stokbarang6); $data = $row["nanas"]; echo $data." Item"; ?></td>
            <td><input type="number" value="Edit Stok" name="new" id="new" placeholder="Masukan jumlah akhir!"></td>
            <td><input type="hidden" name="id" id="id" value="nanas"></td>
        </tr>
        <tr>
            <td>Semangka</td>
            <td><?php $row = mysqli_fetch_array($stokbarang7); $data = $row["semangka"]; echo $data." Item"; ?></td>
            <td><input type="number" value="Edit Stok" name="new" id="new" placeholder="Masukan jumlah akhir!"></td>
            <td><input type="hidden" name="id" id="id" value="semangka"></td>
        </tr>
        <tr>
            <td>Anggur</td>
            <td><?php $row = mysqli_fetch_array($stokbarang8); $data = $row["anggur"]; echo $data." Item"; ?></td>
            <td><input type="number" value="Edit Stok" name="new" id="new" placeholder="Masukan jumlah akhir!"></td>
            <td><input type="hidden" name="id" id="id" value="anggur"></td>
        </tr>
        <tr>
            <td>Pepaya</td>
            <td><?php $row = mysqli_fetch_array($stokbarang9); $data = $row["pepaya"]; echo $data." Item"; ?></td>
            <td><input type="number" value="Edit Stok" name="new" id="new" placeholder="Masukan jumlah akhir!"></td>
            <td><input type="hidden" name="id" id="id" value="pepaya"></td>
        </tr>
            <td><input type="submit"></td>
</form>
</table>
</body>
</html>