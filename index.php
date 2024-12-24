<?php
include 'lib/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jamuan Alam Jatigede </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">    
</head>
<body>
    <!--Navigation Bar-->
    <nav>
        <svg id="hamburger-menu" class="hamburger-menu" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <line x1="3" y1="12" x2="21" y2="12"></line>
            <line x1="3" y1="18" x2="21" y2="18"></line>
          </svg>
        <div class="logo">
           <span>Jamuan Alam Jatigede</span>
        </div>
        <ul id="menuList" class="menulist">
            <li><a href="index.php" style="font-weight: bold;">Beranda</a></li>
            <li><a href="pemesanan.php">Pemesanan</a></li>
            <li><a href="daftar.php">Daftar</a></li>
            <li class="dropdown"><a href="tanjung-duriat.php">Tanjung Duriat <svg id="chevron-down" class="chevron-down" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="6 9 12 15 18 9"></polyline></svg></a> 
                <ul class="dropdown-menu">
                    <li><a href="paket-tanjung.php">Daftar Paket Wisata</a></li>
                </ul>
            </li>
               
            <li><a href="masjid.php">Masjid Al Kamil Jatigede<svg id="chevron-down" class="chevron-down" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="6 9 12 15 18 9"></polyline></svg></a>
                <ul class="submenu2">
                    <li><a href="paket-masjid.php">Daftar Harga Paket</a></li>
                </ul>
            </li>
                
            <li><a href="desa.php">Wisata Desa Karedok<svg id="chevron-down" class="chevron-down" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="6 9 12 15 18 9"></polyline></svg></a>
                <ul class="submenu3">
                    <li><a href="paket-desa.php">Daftar Harga Paket</a></li>
                </ul></li>
            <li><a href="jatigede.php">Jatigede</a></li>
        </ul>
         <div id="search-field">
                        <svg id="search-icon" class="search-icon" viewBox="0 0 24 24">
                        <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
                        <path d="M0 0h24v24H0z" fill="none"/>
                        </svg>
                    </div>
    </nav>
  
  

     <!--Section Beranda-->
     <section class="beranda">
        <main>        
            <div class="b1">
                <div class="bb">
                    <h1>Wisata Jatigede</h1>
                    <br>
                    <h3><span>Waduk Jatigede, surga tersembunyi di Sumedang yang memadukan keindahan alam danau buatan dengan pemandangan pegunungan yang memukau. Nikmati beragam aktivitas seru seperti wisata perahu, memancing, hingga berfoto di spot Instagramable </span></h3>
                </div>
            </div>
        </main>
     </section>

     <section class="video">
        <div class="left">
            <iframe width="320" height="240" src="https://www.youtube.com/embed/la3bNh2n8_0?si=LDLjLRo7FMmNOBWD" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <div class="center">    
            <iframe width="320" height="240" src="https://www.youtube.com/embed/IMJp4iOQJVc?si=KIjqvKD5K38aNhVC" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>    
            <iframe width="320" height="240" src="https://www.youtube.com/embed/0zu6FfMf9sY?si=LoN0cLsjQuSnprHo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
     </section>

     <section class="wisata">
            <div class="box-left">
                <img src="asset/tanjung.jpg" width="387px" height="258px">
                <p>Tanjung Duriat</p>
                <span style="font-size: 13.999999999999998pt; vertical-align: baseline; text-align: justify; line-height: 1.5; font-weight: 500; font-style: normal; font-variant: normal;">Tanjung Duriat adalah destinasi wisata di sekitar Waduk Jatigede yang menawarkan pemandangan indah dan suasana tenang. Dari tempat ini, pengunjung bisa menikmati panorama waduk yang luas, pegunungan yang mengelilinginya, serta pemandangan matahari terbit dan terbenam yang memukau</span>
            </div>
            <div class="box-center">
                <img src="asset/masjid1.jpg" width="387px" height="258px">
                <p>Masjid Al Kamil Jatigede</p>
                <span style="font-size: 13.999999999999998pt; vertical-align: baseline; text-align: justify; line-height: 1.5; font-weight: 500; font-style: normal; font-variant: normal;">Masjid Al Kamil Jatigede adalah sebuah masjid yang terletak di tepi Waduk Jatigede, Sumedang. Dirancang oleh Ridwan Kamil, masjid ini memiliki bentuk unik menyerupai bunga teratai yang sedang mekar. </span>
            </div>
            <div class="box-right">
                <img src="asset/wisata.jpg" width="387px" height="258px">
                <p>Wisata Desa Karedok</p>
                <span style="font-size: 13.999999999999998pt; vertical-align: baseline; text-align: justify; line-height: 1.5; font-weight: 500; font-style: normal; font-variant: normal;">Desa ini menawarkan pengalaman liburan yang berbeda, jauh dari hiruk pikuk kota. Dengan keindahan alam yang masih asri, keramahan masyarakat lokal, serta kekayaan budaya yang masih terjaga, Desa Karedok menjadi pilihan tepat bagi Anda yang ingin menikmati liburan yang santai dan berkesan. </span>
            </div>
        </div>
     </section>
    
     <footer>
        <div><img src="asset/ig.png" alt="" style="width: 32px; height: 32px; margin: 6px; background-color: rgb(95, 99, 104); background-image: linear-gradient(rgb(95, 99, 104), rgb(95, 99, 104)); border-radius: 50%;"></div>
        <div><img src="asset/fb.png" alt="" style="width: 32px; height: 32px; margin: 6px; background-color: rgb(95, 99, 104); background-image: linear-gradient(rgb(95, 99, 104), rgb(95, 99, 104)); border-radius: 50%;"></div>
     </footer>
     <script src="script.js"></script>

</body>
</html>