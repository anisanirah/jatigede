<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jamuan Alam Jatigede - Tanjung Duriat</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="td-style.css" />
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

    <section class="bg-img">
      <main class="content">
        <div class="bg">></div>
      </main>
    </section>

    <section class="txt">
      <div class="text">
        <h3>
          <span
            style="
              color: #5b0f00;
              font-family: 'Times New Roman', Arial;
              font-size: 10pt;
              font-style: italic;
              font-weight: 400;
              vertical-align: baseline;
            "
          >
            Tanjung Duriat adalah salah satu spot wisata terbaik di Jatigede,
            Sumedang, yang menawarkan pemandangan spektakuler Waduk Jatigede
            dari ketinggian. Terletak di kawasan perbukitan, Tanjung Duriat
            memberikan sudut pandang luas yang memungkinkan pengunjung melihat
            keindahan danau buatan ini dengan latar pegunungan yang mempesona,
            terutama saat matahari terbit dan terbenam.
          </span>
        </h3>
      </div>
    </section>

    <section class="garis">
      <div class="horizon1"></div>
      <div class="horizon2"></div>
    </section>

    <section class="container">
        <div class="slider-container">
          <div class="slider">
              <div class="slide active">
                  <img src="asset/01.jpg" alt="Slide 1">
              </div>
              <div class="slide">
                  <img src="/asset/02.jpg" alt="Slide 2">
              </div>
              <div class="slide">
                  <img src="asset/03.jpg" alt="Slide 3">
              </div>
              <div class="slide active">
                <img src="asset/04.jpg" alt="Slide 1">
            </div>
            <div class="slide">
                <img src="/asset/05.jpg" alt="Slide 2">
            </div>
            <div class="slide">
                <img src="asset/06.jpg" alt="Slide 3">
            </div>
            <div class="slide active">
              <img src="asset/07.jpg" alt="Slide 1">
          </div>
          <div class="slide">
              <img src="/asset/08.jpg" alt="Slide 2">
          </div>
          <div class="slide">
              <img src="asset/09.jpg" alt="Slide 3">
          </div>
          </div>
          <!-- Navigation Buttons -->
          <button class="prev-btn">&#10094;</button>
          <button class="next-btn">&#10095;</button>
          <!-- Dots -->
          <div class="dots">
              <span class="dot active"></span>
              <span class="dot"></span>
              <span class="dot"></span>
          </div>
      </div>
    </section>
    <footer>
      <div>
        <img
          src="asset/ig.png"
          alt=""
          style="
            width: 32px;
            height: 32px;
            margin: 6px;
            background-color: rgb(95, 99, 104);
            background-image: linear-gradient(
              rgb(95, 99, 104),
              rgb(95, 99, 104)
            );
            border-radius: 50%;
          "
        />
      </div>
      <div>
        <img
          src="asset/fb.png"
          alt=""
          style="
            width: 32px;
            height: 32px;
            margin: 6px;
            background-color: rgb(95, 99, 104);
            background-image: linear-gradient(
              rgb(95, 99, 104),
              rgb(95, 99, 104)
            );
            border-radius: 50%;
          "
        />
      </div>
    </footer>
    <script src="script.js"></script>
  </body>
</html>
