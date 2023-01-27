<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foody - Website menjual berbagai jenis makanan</title>
    <link rel="stylesheet" href="css/style.css">
</head>
    <body class="antialiased bg-gray-200 text-gray-900 font-sans">
      <header>
        <nav class="bg-gray-900 border-gray-200 px-4 lg:px-6 py-2.5">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a class="flex items-center">
                    <img src="img/logo.png" class="mr-3 h-6 sm:h-9"/>
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Foody</span>
                </a>
                <div class="flex items-center lg:order-2">
                    <a href="login.php" class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Masuk</a>
                    <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Daftar</a>
                </div>
                <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                        <li>
                          <a href="index.html" class="py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Home</a>
                        </li>
                        <li>
                            <a href="product.php" class="py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Produk</a>
                        </li>
                        <li>
                            <a href="about.html" class="py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700">Tentang</a>
                        </li>
                    </ul>
                  </ul>
              </div>
          </div>
      </nav>
    </header>
    <?php
    session_start();
    if (isset ($_SESSION['msg'])) {
      echo $_SESSION['msg'];
    }
    ?>    
    <center> <a><?php if (isset($_SESSION['email'])) {
      echo $_SESSION["email"];
    }
    ;?></a> </center>
        <div class="flex items-center h-screen w-full">
          <div class="w-full bg-white rounded shadow-lg p-8 m-4 md:max-w-sm md:mx-auto">
            <img src="img/logo.png">
          <span class="block w-full text-xl uppercase font-bold mb-4">Daftar</span>      
            <form class="mb-4" action="./backend/register.php" method="post">
              <div class="mb-4 md:w-full">
                <label name="user" class="block text-xs mb-1">Username</label>
                <input class="w-full border rounded p-2 outline-none focus:shadow-outline focus:bg-slate-100" type="text" name="name" id="name" placeholder="Masukan nama kamu">
              </div>
              <div class="mb-4 md:w-full">
                <label type="email" name="email" class="block text-xs mb-1">Email</label>
                <input class="w-full border rounded p-2 outline-none focus:shadow-outline focus:bg-slate-100" type="email" name="email" id="email" placeholder="Masukan email kamu">
              </div>
              <div class="mb-6 md:w-full">
                <label type="password" name="password" class="block text-xs mb-1">Kata Sandi (8 Karakter)</label>
                <input class="w-full border rounded p-2 outline-none focus:shadow-outline focus:bg-slate-100" type="password" minlength="8" name="password" id="password" placeholder="Masukan password kamu">
              </div>
              <input type="submit" value="Register" class="bg-blue-500 hover:bg-blue-700 text-white uppercase text-sm font-semibold px-4 py-2 rounded"></input>
            </form>
            <a>Mempunyai akun?</a>
            <a class="text-blue-700 text-center text-sm focus:text-blue-500" href="login.html">Masuk</a><br>
            <a>Admin?</a>
            <a class="text-blue-700 text-center text-sm focus:text-blue-500" href="localhost:3000/public/backend/admin-dashboard.php">Dashboard Admin</a>
        </div>
      </div>
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