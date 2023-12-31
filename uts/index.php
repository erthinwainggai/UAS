<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tugas UTS</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;1,400;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My Style -->

    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <!-- Navbar start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">Welcome<span>.</span>.</a>

      <div class="navbar-nav active">
        <a href="#">Home</a>
        <a href="#menu">Menu</a>
        <a href="#contact">kontak</a>
        <a href="#about">Tentang kami</a>
      </div>

      <div class="navbar-extra">
        <a href="#" id="search"><i data-feather="search"></i></a>
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>
    <!-- Navbar end -->

    <!-- Hero section start-->
    <section class="hero" id="home">
      <main class="content">
        <h1>Mari nikmati kesegarannya..</h1>
        <a href="produk.php" class="cta">Beli Sekarang</a>

     </main>
    </section>
    <!-- Hero section end -->

    <!-- menu section start-->
    <section class="menu" id="menu">
      <h2><span>Menu</span> Kami</h2>
      <div class="menu">
        <div class="menu-item">
          <img src="img/boba 1.jpg" alt="Makanan 1" />
          <h3>chocolate</h3>
          <p>Harga: Rp 10.000</p>
        </div>
        <div class="menu-item">
          <img src="img/boba 2.jpg" alt="Makanan 2" />
          <h3>Strawberry</h3>
          <p>Harga: Rp 10.000</p>
        </div>
        <div class="menu-item">
          <img src="img/boba 3.jpg" alt="Makanan 3" />
          <h3>Green tea</h3>
          <p>Harga: Rp 10.000</p>
        </div>
        <div class="menu-item">
          <img src="img/boba 4.jpg" alt="Makanan 3" />
          <h3>Vanila blue</h3>
          <p>Harga: Rp 10.000</p>
        </div>
        <div class="menu-item">
          <img src="img/boba 5.jpg" alt="Makanan 3" />
          <h3>Taro</h3>
          <p>Harga: Rp 10.000</p>
        </div>
        <div class="menu-item">
          <img src="img/boba 6.jpg" alt="Makanan 3" />
          <h3>Capucino</h3>
          <p>Harga: Rp 10.000</p>
        </div>
      </div>
    </section>
    <!--menu section end-->

    <!--Contact Section Start-->
    <section id="contact" class="contact">
      <h2 class="text" text-aligh="center"><span>Kontak</span> Kami</h2>
      <div class="row">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d255256.0042262535!2d124.61966829035609!3d1.5411524245840826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32879ef9ffb30fd3%3A0x3030bfbcaf77280!2sKota%20Manado%2C%20Sulawesi%20Utara!5e0!3m2!1sid!2sid!4v1682651062596!5m2!1sid!2sid"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="map"
        ></iframe>

        <form action="">
          <div class="input-group">
            <i data-feather="user"></i>
            <input type="text" placeholder="nama" />
          </div>
          <div class="input-group">
            <i data-feather="mail"></i>
            <input type="text" placeholder="email" />
          </div>
          <div class="input-group">
            <i data-feather="phone"></i>
            <input type="text" placeholder="no hp" />
          </div>

          <button type="submit" class="btn">Kirim pesan</button>
        </form>
      </div>
    </section>
    <!--Contact Section End-->

    <!-- About Section Start-->
    <section id="about" class="about">
      <h2><span>Tentang</span> Kami</h2>
      <h3>Kelompok 9</h3>
      <p>Gregorius Wowor (18021106072)</p>
      <p>Fabianus Datu (18021106045)</p>
      <p>Erthin Wainggai (18021106119)</p>
      <p>Stevanya Montolalu (20021106155)</p>
    </section>
    <!-- About Section End-->

    <!-- foot start-->
    <footer>
      <div class="sosials">
        <a href="#"><i data-feather="instagram"></i></a>
        <a href="#"><i data-feather="twitter"></i></a>
        <a href="#"><i data-feather="facebook"></i></a>
      </div>

      <div class="links">
        <a href="#home">Home</a>
        <a href="#about">Tentang kami</a>
        <a href="#menu">Menu</a>
        <a href="#contact">Kontak</a>
      </div>

      <div class="credit">
        <p>created by <a href="">Kelompok 9 kelas A</a>. | &copy;2023</p>
      </div>
    </footer>

    <!-- foot end-->

    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>

    <!-- My Javascript -->
    <script src="js/script.js"></script>
  </body>
</html>
