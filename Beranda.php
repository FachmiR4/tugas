<?php
include "koneksi.php"
?>
<html>
    <head>
    <title>Ikan Koi</title>
    <link rel="stylesheet" href="style2.css">
    <script src="script.js"></script>
    <link rel="stylesheet" href="apaitukoi.css">
</head>
<body>
<nav>
    <ul>
        <div class="tombol">
            <link rel="stylesheet" href="style2.css">
            <button onclick="ToggleDarkMode()"><img src="gambar/dark.jpg" width="20" height="-10"></button>
         </div>
     	<li><a href="Beranda.php">Home</a></li>
     	<li><a href="jenisikankoi.php">Jenis Ikan Koi</a>
      <li><a href="#">Cara Membedakan</a> 
         	<ul>
             	<li><a href="caramembedakan.php">Koi jantan dan koi betina</a></li>
             	<li><a href="caramembedakanjenis.php">Koi dari setiap jenis</a></li>
         	</ul>
         </li>
         <li><a href="daftarharga.php">Daftar Harga</a></li>
            <div id = "clock" onload="currentTime()">
            </div>
    </ul>
    <div id = "clock" onload="currentTime()"></div>
</nav>
   <center><h1>Selamat Datang Di Web Ikan Koi</h1></center>
   <div class="awal">
   <a href="apaitukoi.php">Apa Itu Koi?</a>
   <a href="kenapaharus.php">Asal Usul Ikan Koi</a>
   </div>
</body>
</html>