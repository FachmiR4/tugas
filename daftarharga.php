<?php
include "koneksi.php"
?>
<html>
    <head>
    <title>Daftar Harga Ikan Koi</title>
    <link rel="stylesheet" href="style2.css">
    <script src="script.js"></script>
    <link rel="stylesheet" href="styler.css">
    <link rel="stylesheet" href="daftarharga2.css">
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
  </nav>
<div class="container">
  <div class="card">
    <div class="card__header">
      <img src="gambar/kohaku.jpg" alt="card__image" class="card__image" width="600">
    </div>
    <div class="card__body">
      <h4>Koi Kohaku</h4>
      <p>5cm : Rp. 5.000</p>
      <p>8-11cm : Rp. 10.000</p>
      <p>16-19cm : Rp. 24.000</p>
      <p>21-25cm : Rp. 25.000</p>
      <p>26-30cm : Rp. 48.000</p>
      <p>34-37cm : Rp. 135.000</p>
    </div>   
  </div>

  <div class="card">
    <div class="card__header">
      <img src="gambar/Kujaku.jpg" alt="card__image" class="card__image" width="600" height="210">
    </div>
    <div class="card__body">
      <h4>Koi Kujaku</h4>
      <p>3-5cm : Rp 3.000</p>
      <p>8-10cm : Rp 30.000</p>
      <p>15-20cm : Rp 250.000</p>
      <p>25cm : Rp 270.000</p>
      <p>30cm : Rp 315.000</p>
      <p>37cm : Rp 500.000</p>
    </div>   
  </div>

  <div class="card">
    <div class="card__header">
      <img src="gambar/ShiroBekko.JPG" alt="card__image" class="card__image" width="600" height="210">
    </div>
    <div class="card__body">
      <h4>Shiro Bekko</h4>
      <p>15-18cm : Rp 53.000</p>
      <p>20cm : Rp 110.000</p>
      <p>26cm : Rp 150.000</p>
      <p>30cm : Rp 300.000</p>
      <p>38cm : Rp 900.000</p>
      <p>43cm : Rp 1.250.000</p>
    </div>
  </div>

  <div class="container">
    <div class="card">
      <div class="card__header">
        <img src="gambar/ShiroUtsuri.jpg" alt="card__image" class="card__image" width="600" height="200">
      </div>
      <div class="card__body">
        <h4>Shiro Utsuri</h4>
        <p>15-17cm : Rp. 42.000</p>
        <p>18-20cm : Rp. 50.000</p>
        <p>23cm : Rp. 225.000</p>
        <p>25cm : Rp. 270.000</p>
        <p>35cm : Rp. 720.000</p>
        <p>46cm : Rp. 1.800.000</p>
      </div> 
    </div>

    <div class="card">
      <div class="card__header">
        <img src="gambar/ShiroMatsuba.jpg" alt="card__image" class="card__image" width="600">
      </div>
      <div class="card__body">
        <h4>Shiro Matsuba</h4>
        <p>10-12cm : Rp 25.000</p>
        <p>14-17cm : Rp 40.000</p>
        <p>20cm : Rp 105.000</p>
        <p>23cm : Rp 200.000</p>
        <p>30cm : Rp 225.000</p>
        <p>38cm : Rp 600.000</p>
      </div> 
    </div>

    <div class="card">
      <div class="card__header">
        <img src="gambar/AkaMatsuba.jpg" alt="card__image" class="card__image" width="600" height="210">
      </div>
      <div class="card__body">
        <h4>Aka Matsuba</h4>
        <p>15-17cm : Rp 50.000</p>
        <p>20-23cm : Rp 150.000</p>
        <p>15-20cm : Rp 250.000</p>
        <p>37cm : Rp 760.000</p>
        <p>48cm : Rp 1.350.000</p>
        <p>55cm : Rp 2.250.000</p>
      </div>
    </div>

    <div class="container">
      <div class="card">
        <div class="card__header">
          <img src="gambar/KiBekko.jpg" alt="card__image" class="card__image" width="600" height="200">
        </div>
        <div class="card__body">
          <h4>Ki Bekko</h4>
          <p>15-17cm : Rp 50.000</p>
          <p>20-23cm : Rp 150.000</p>
          <p>15-20cm : Rp 250.000</p>
          <p>37cm : Rp 760.000</p>
          <p>48cm : Rp 1.350.000</p>
          <p>55cm : Rp 2.250.000</p>
        </div>
      </div>

    <div class="card">
      <div class="card__header">
        <img src="gambar/Tancho.jpg" alt="card__image" class="card__image" width="600" height="210">
      </div>
      <div class="card__body">
        <h4>Tancho</h4>
        <p>10-15cm : Rp 20.000</p>
        <p>18-20cm : Rp 70.000</p>
        <p>30cm : Rp 500.000</p>
        <p>35cm : Rp 690.000</p>
        <p>42-44cm : Rp 2.000.000</p>
        <p>57cm : Rp 2.500.000</p>
      </div>  
    </div>

    <div class="card">
      <div class="card__header">
        <img src="gambar/AkaBekko.JPG" alt="card__image" class="card__image" width="600" height="210">
      </div>
      <div class="card__body">
        <h4>Aka Bekko</h4>
        <p>15cm : Rp 60.000</p>
        <p>16-17cm : Rp 85.000</p>
        <p>18-22cm : Rp 109.000</p>
        <p>32cm : Rp 250.000</p>
        <p>35cm : Rp 400.000</p>
        <p>48cm : Rp 1.350.000</p>
      </div>     
    </div>

    <div class="button">
      <form action="method">
         <a href="#">Sebelumnya</a>
         <a href="daftarharga2.php">Selanjutnya</a>
      </form>
      </div>
</body>
</html>