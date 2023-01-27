<?php
require "backend/database/connection.php";
require "backend/database/query.php";
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
    <header>
    <nav class="bg-gray-900 border-gray-200 px-4 lg:px-6 py-2.5">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a class="flex items-center">
                <img src="img/logo.png" class="mr-3 h-6 sm:h-9"/>
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Foody</span>
            </a>
            <div class="flex items-center lg:order-2">
                <a href="login.php" class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Masuk</a>
                <a href="register.php" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Daftar</a>
            </div>
            <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="index.html" class="py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Home</a>
                    </li>
                    <li>
                        <a href="#" class="py-2 pr-4 pl-3 text-white rounded bg-blue-700 lg:bg-transparent lg:text-blue-700 lg:p-0 dark:text-white" aria-current="page">Produk</a>
                    </li>
                    <li>
                        <a href="about.html" class="py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Tentang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<br>
<br>
<section class="text-gray-700 body-font">
    <div class="text-center text-top">
        <h1 class="text-3xl font-bold">Produk - Buah</h1>
    </div>
    <br>
    <table border="0" width="100%" height="25%" class="flex justify-center items-center">
        <tr>
            <td align="left">
                <img src="img/apel.png" height="256px" width="256px"></img>
                <ul>
                    <b>Apel</b>
                    <li>Stok:</li> 
                    <li><?php $row = mysqli_fetch_array($stokbarang1); $data = $row["apel"]; echo $data." Item"; ?></li>
                    <a href="#" onclick="alert('Barang berhasil ditambahkan!')" class="bg-gray-500 p-3 text-white inline-block rounded shadow hover:bg-gray-600">Beli Sekarang</a>
                </ul>
            </td>
            <td align="left">
                <img src="img/jeruk.png" height="256px" width="256px"></img>
                <ul>
                    <b>Jeruk</b>
                    <li>Stok:</li> 
                    <li><?php $row = mysqli_fetch_array($stokbarang2); $data = $row["jeruk"]; echo $data." Item"; ?></li>
                    <a href="#" onclick="alert('Barang berhasil ditambahkan!')" class="bg-gray-500 p-3 text-white inline-block rounded shadow hover:bg-gray-600">Beli Sekarang</a>
                </ul>
            </td>
            <td align="left">
                <img src="img/mangga.png" height="256px" width="256px"></img>
                <ul>
                    <b>Mangga</b>
                    <li>Stok:</li> 
                    <li><?php $row = mysqli_fetch_array($stokbarang3); $data = $row["mangga"]; echo $data." Item"; ?></li>
                    <a href="#" onclick="alert('Barang berhasil ditambahkan!')" class="bg-gray-500 p-3 text-white inline-block rounded shadow hover:bg-gray-600">Beli Sekarang</a>
                </ul>
            </td>
            <td align="left">
                <img src="img/pisang.png" height="256px" width="256px"></img>
                <ul>
                    <b>Pisang</b>
                    <li>Stok:</li> 
                    <li><?php $row = mysqli_fetch_array($stokbarang4); $data = $row["pisang"]; echo $data." Item"; ?></li>
                    <a href="#" onclick="alert('Barang berhasil ditambahkan!')" class="bg-gray-500 p-3 text-white inline-block rounded shadow hover:bg-gray-600">Beli Sekarang</a>
                </ul>
            </td>
            <td align="left">
                <img src="img/melon.png" height="256px" width="256px"></img>
                <ul>
                    <b>Melon</b>
                    <li>Stok:</li> 
                    <li><?php $row = mysqli_fetch_array($stokbarang5); $data = $row["melon"]; echo $data." Item"; ?></li>
                    <a href="#" onclick="alert('Barang berhasil ditambahkan!')" class="bg-gray-500 p-3 text-white inline-block rounded shadow hover:bg-gray-600">Beli Sekarang</a>
                </ul>
            </td>
        </tr>
    </table>
    <br>
    <br>
    <table border="0" width="100%" height="25%" class="flex justify-center items-center">
        <tr>
            <td align="left">
                <img src="img/nanas.png" height="256px" width="256px"></img>
                <ul>
                    <b>Nanas</b>
                    <li>Stok:</li> 
                    <li><?php $row = mysqli_fetch_array($stokbarang6); $data = $row["nanas"]; echo $data." Item"; ?></li>
                    <a href="#" onclick="alert('Barang berhasil ditambahkan!')" class="bg-gray-500 p-3 text-white inline-block rounded shadow hover:bg-gray-600">Beli Sekarang</a>
                </ul>
            </td>
            <td align="left">
                <img src="img/semangka.png" height="256px" width="256px"></img>
                <ul>
                    <b>Semangka</b>
                    <li>Stok:</li> 
                    <li><?php $row = mysqli_fetch_array($stokbarang7); $data = $row["semangka"]; echo $data." Item"; ?></li>
                    <a href="#" onclick="alert('Barang berhasil ditambahkan!')" class="bg-gray-500 p-3 text-white inline-block rounded shadow hover:bg-gray-600">Beli Sekarang</a>
                </ul>
            </td>
            <td align="left">
                <img src="img/anggur.png" height="256px" width="256px"></img>
                <ul>
                    <b>Anggur</b>
                    <li>Stok:</li> 
                    <li><?php $row = mysqli_fetch_array($stokbarang8); $data = $row["anggur"]; echo $data." Item"; ?></li>
                    <a href="#" onclick="alert('Barang berhasil ditambahkan!')" class="bg-gray-500 p-3 text-white inline-block rounded shadow hover:bg-gray-600">Beli Sekarang</a>
                </ul>
            </td>
            <td align="left">
                <img src="img/pepaya.png" height="256px" width="256px"></img>
                <ul>
                    <b>Pepaya</b>
                    <li>Stok:</li> 
                    <li><?php $row = mysqli_fetch_array($stokbarang9); $data = $row["pepaya"]; echo $data." Item"; ?></li>
                    <a href="#" onclick="alert('Barang berhasil ditambahkan!')" class="bg-gray-500 p-3 text-white inline-block rounded shadow hover:bg-gray-600">Beli Sekarang</a>
                </ul>
            </td>
        </tr>
    </table>
  <br>
  <br>
  <br>
  <br>
  <footer class="bg-gray-900 text-white py-4">
    <div class="container mx-auto flex flex-wrap items-center">
      <div class="w-full md:w-1/2 text-center md:text-left">
        <p class="text-sm md:text-base">Foody - Website menjual berbagai jenis makanan</p>
      </div>
      <div class="w-full md:w-1/2 flex justify-center md:justify-end">
        <ul class="list-reset flex justify-center md:justify-end">
          <li class="mr-3">
            <a href="https://github.com/axellfumioo" class="fa-brands fa-github"></a>
          </li>
      </div>
    </div>
  </footer>
  <script src="https://kit.fontawesome.com/c1cbeb7f83.js" crossorigin="anonymous"></script>
</body>
</html>