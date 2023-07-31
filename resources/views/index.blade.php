<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kenangan Senja</title>

    <!-- Fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />
    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!--my Style-->
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <!--Navbar Start-->
    <nav class="navbar">
      <a href="#" class="navbar-logo">kenangan<span>senja</span>.</a>

      <dev class="navbar-nav">
        <a href="#">Home</a>
        <a href="#about">Tentang kami</a>
        <a href="#menu">Menu</a>
        <a href="#contact">Kontak</a>
      </dev>

      <div class="navbar-extra">
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i>></a>
        <a href="cart" id="shoppingCart"><i data-feather="shopping-cart"></i>></a>
      </div>
    </nav>

    <!--Navbar end-->

    <!--Hero Section start-->
    <section class="hero" id="home">
      <main class="content">
        <h1>Mari Nikmati Secangkir <span>Kopi</span></h1>
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas
          culpa ipsum saepe eos aliquam itaque aspernatur deleniti eveniet aut
          tempora inventore.
        </p>
        <a href="#" class="cta">Beli Sekarang</a>
      </main>
    </section>

    <!--hero Section End-->

    <!--abaut Section start-->
    <section id="about" class="about">
      <h2><span>Tentang</span> Kami</h2>

      <div class="row">
        <div class="about-img">
          <img src="img/tentang-Des.jpg" alt="Tentang Kami" />
        </div>
        <div class="content">
          <h3>kenapa memilih kopi kami?</h3>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos odit
            ullam totam quisquam aut molestiae, magnam error perspiciatis
            voluptate. Nam.
          </p>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil,
            dolorum.
          </p>
        </div>
      </div>
    </section>

    <!--abaut Section end-->

    <!--Menu Section Start-->
    <section id="menu" class="menu">
      <h2><span>Menu</span> Kami</h2>
      <p>
        Lorem consectetur adipisicing elit. Non dolorem numquam officiis,
        necessitatibus quibusdam beatae.
      </p>

      <div class="row">
        <div class="menu-card">
          <img src="img/menu/1.jpg" alt="Kopisusu" />
          <h3 class="menu-card-title">Kopi Susu Aren</h3>
          <p class="menu-card-price">IDR 20.000</p>
          <a href="#product">
            <button class="buyButton">Add to Cart</button>
          </a>
        </div>
        <div class="menu-card">
          <img src="img/menu/2.jpg" alt="Kopisusu" />
          <h3 class="menu-card-title">Kopi Latte</h3>
          <p class="menu-card-price">IDR 28.000</p>
          <a href="#product">
            <button class="buyButton">Add to Cart</button>
          </a>
        </div>
        <div class="menu-card">
          <img src="img/menu/3.jpg" alt="Kopisusu" />
          <h3 class="menu-card-title">Cappucino</h3>
          <p class="menu-card-price">IDR 25.000</p>
          <a href="#product">
            <button class="buyButton">Add to Cart</button>
          </a>
        </div>
        <div class="menu-card">
          <img src="img/menu/4.jpg" alt="Kopisusu" />
          <h3 class="menu-card-title">Espresso</h3>
          <p class="menu-card-price">IDR 22.000</p>
          <a href="#product">
            <button class="buyButton">Add to Cart</button>
          </a>
        </div>
        <div class="menu-card">
          <img src="img/menu/5.jpg" alt="Kopisusu" />
          <h3 class="menu-card-title">Americano</h3>
          <p class="menu-card-price">IDR 30.000</p>
          <a href="#product">
            <button class="buyButton">Add to Cart</button>
          </a>
        </div>
        <div class="menu-card">
          <img src="img/menu/6.jpg" alt="Kopisusu" />
          <h3 class="menu-card-title">Mocha Latte</h3>
          <p class="menu-card-price">IDR 15.000</p>
          <a href="#product">
            <button class="buyButton">Add to Cart</button>
          </a>
        </div>
        <div class="menu-card">
          <img src="img/menu/7.jpg" alt="Kopisusu" />
          <h3 class="menu-card-title">Picollo Latte</h3>
          <p class="menu-card-price">IDR 38.000</p>
          <a href="#product">
            <button class="buyButton">Add to Cart</button>
          </a>
        </div>
        <div class="menu-card">
          <img src="img/menu/8.jpg" alt="Kopisusu" />
          <h3 class="menu-card-title">Cortado Coffe</h3>
          <p class="menu-card-price">IDR 32.000</p>
          <a href="#product">
            <button class="buyButton">Add to Cart</button>
          </a>
        </div>
      </div>
    </section>

    <!--Menu Section end-->

    <!--Contact Section start-->

    <section id="contact" class="contact">
      <h2><span>kontak</span> Kami</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, ipsum.
      </p>

      <div class="row">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6800040123085!2d106.80984056933934!3d-6.173579652858073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f7f57917b8b3%3A0xff1ba3cd21d9d0a8!2sKopi%20Kenangan%20-%20Ruko%20Cideng!5e0!3m2!1sen!2sid!4v1689169599624!5m2!1sen!2sid"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="map"
        ></iframe>

        <form action="Koneksi_contact.php" method="post">
          <div class="input-group">
            <i data-feather="user"></i>
            <input type="text" placeholder="nama" name="Nama" />
          </div>
          <div class="input-group">
            <i data-feather="mail"></i>
            <input type="text" placeholder="email" name="Email" />
          </div>
          <div class="input-group">
            <i data-feather="phone"></i>
            <input type="text" placeholder="nohp" name="NoTelepon" />
          </div>
          <button class="btn">kirim pesan</button>
        </form>
      </div>
    </section>

    <!--Contact Section end-->

    <!-- Footer start-->

    <footer>
      <div class="socials">
        <a href="#"><i data-feather="instagram"></i></a>
        <a href="#"><i data-feather="twitter"></i></a>
        <a href="#"><i data-feather="facebook"></i></a>
        <div class="credit"></div>
        <p>Created by <a href="">Kopi Kenangan Senja. | &copy; 2023.</a></p>
      </div>
    </footer>

    <!--footer start-->

    <!--Feather icons-->
    <script>
      feather.replace();
    </script>

    <!--My Javascript-->
    <script src="js/script.js"></script>
  </body>
</html>
