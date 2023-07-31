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
        <a href="index">Home</a>
        <a href="index">Tentang kami</a>
        <a href="index">Menu</a>
        <a href="index">Kontak</a>
      </dev>

      <div class="navbar-extra">
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i>></a>
        <a href="#" id="shoppingCart"><i data-feather="shopping-cart"></i>></a>
      </div>
    </nav>

    <section id="contact" class="contact">
        <h2><span>Shopping</span> Cart</h2>
    </section> 
    
    <section id="cart-container" class="countainer my-5">
        <table width="100%">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Image</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Total</td>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td><a href="#"><i class="fal fa-trash-alt" style="color: #025af2;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0,0,256,256" width="50px" height="50px" fill-rule="nonzero"><g fill="#2200ff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M42,5h-10v-2c0,-1.65234 -1.34766,-3 -3,-3h-8c-1.65234,0 -3,1.34766 -3,3v2h-10c-0.55078,0 -1,0.44922 -1,1c0,0.55078 0.44922,1 1,1h1.08594l3.60938,40.51563c0.125,1.39063 1.30859,2.48438 2.69531,2.48438h19.21484c1.38672,0 2.57031,-1.09375 2.69531,-2.48437l3.61328,-40.51562h1.08594c0.55469,0 1,-0.44922 1,-1c0,-0.55078 -0.44531,-1 -1,-1zM20,44c0,0.55469 -0.44922,1 -1,1c-0.55078,0 -1,-0.44531 -1,-1v-33c0,-0.55078 0.44922,-1 1,-1c0.55078,0 1,0.44922 1,1zM20,3c0,-0.55078 0.44922,-1 1,-1h8c0.55078,0 1,0.44922 1,1v2h-10zM26,44c0,0.55469 -0.44922,1 -1,1c-0.55078,0 -1,-0.44531 -1,-1v-33c0,-0.55078 0.44922,-1 1,-1c0.55078,0 1,0.44922 1,1zM32,44c0,0.55469 -0.44531,1 -1,1c-0.55469,0 -1,-0.44531 -1,-1v-33c0,-0.55078 0.44531,-1 1,-1c0.55469,0 1,0.44922 1,1z"></path></g></g></svg></i></a></td>
                    <td><img src="img/menu/1.jpg" alt=""></td>
                    <td>
                        <h5>Kopi Susu Aren
                        </h5>
                     </td>
                    <td>
                        <h5>IDR 20.000K</h5>
                    </td>
                    <td><input class="w-25 pl-1" value="1" type="number"></td>
                    <td>
                        <h5>IDR 20.000</h5>
                    </td>
                </tr>
                <tr>
                    <td><a href="#"><i class="fal fa-trash-alt" style="color: #025af2;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0,0,256,256" width="50px" height="50px" fill-rule="nonzero"><g fill="#2200ff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M42,5h-10v-2c0,-1.65234 -1.34766,-3 -3,-3h-8c-1.65234,0 -3,1.34766 -3,3v2h-10c-0.55078,0 -1,0.44922 -1,1c0,0.55078 0.44922,1 1,1h1.08594l3.60938,40.51563c0.125,1.39063 1.30859,2.48438 2.69531,2.48438h19.21484c1.38672,0 2.57031,-1.09375 2.69531,-2.48437l3.61328,-40.51562h1.08594c0.55469,0 1,-0.44922 1,-1c0,-0.55078 -0.44531,-1 -1,-1zM20,44c0,0.55469 -0.44922,1 -1,1c-0.55078,0 -1,-0.44531 -1,-1v-33c0,-0.55078 0.44922,-1 1,-1c0.55078,0 1,0.44922 1,1zM20,3c0,-0.55078 0.44922,-1 1,-1h8c0.55078,0 1,0.44922 1,1v2h-10zM26,44c0,0.55469 -0.44922,1 -1,1c-0.55078,0 -1,-0.44531 -1,-1v-33c0,-0.55078 0.44922,-1 1,-1c0.55078,0 1,0.44922 1,1zM32,44c0,0.55469 -0.44531,1 -1,1c-0.55469,0 -1,-0.44531 -1,-1v-33c0,-0.55078 0.44531,-1 1,-1c0.55469,0 1,0.44922 1,1z"></path></g></g></svg></i></a></td>
                    <td><img src="img/menu/3.jpg" alt=""></td>
                    <td>
                        <h5>Cappucino
                        </h5>
                     </td>
                    <td>
                        <h5>IDR 25.000</h5>
                    </td>
                    <td><input class="w-25 pl-1" value="1" type="number"></td>
                    <td>
                        <h5>IDR 25.000</h5>
                    </td>
                </tr>
                <tr>
                    <td><a href="#"><i class="fas fa-trash-alt"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0,0,256,256" width="50px" height="50px" fill-rule="nonzero"><g fill="#2200ff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M42,5h-10v-2c0,-1.65234 -1.34766,-3 -3,-3h-8c-1.65234,0 -3,1.34766 -3,3v2h-10c-0.55078,0 -1,0.44922 -1,1c0,0.55078 0.44922,1 1,1h1.08594l3.60938,40.51563c0.125,1.39063 1.30859,2.48438 2.69531,2.48438h19.21484c1.38672,0 2.57031,-1.09375 2.69531,-2.48437l3.61328,-40.51562h1.08594c0.55469,0 1,-0.44922 1,-1c0,-0.55078 -0.44531,-1 -1,-1zM20,44c0,0.55469 -0.44922,1 -1,1c-0.55078,0 -1,-0.44531 -1,-1v-33c0,-0.55078 0.44922,-1 1,-1c0.55078,0 1,0.44922 1,1zM20,3c0,-0.55078 0.44922,-1 1,-1h8c0.55078,0 1,0.44922 1,1v2h-10zM26,44c0,0.55469 -0.44922,1 -1,1c-0.55078,0 -1,-0.44531 -1,-1v-33c0,-0.55078 0.44922,-1 1,-1c0.55078,0 1,0.44922 1,1zM32,44c0,0.55469 -0.44531,1 -1,1c-0.55469,0 -1,-0.44531 -1,-1v-33c0,-0.55078 0.44531,-1 1,-1c0.55469,0 1,0.44922 1,1z"></path></g></g></svg></i></a></td>
                    <td><img src="img/menu/8.jpg" alt=""></td>
                    <td>
                        <h5>Cortado Coffe
                        </h5>
                     </td>
                    <td>
                        <h5>IDR 32.000</h5>
                    </td>
                    <td><input class="w-25 pl-1" value="1" type="number"></td>
                    <td>
                        <h5>IDR 32.000</h5>
                    </td>
                </tr>
            </tbody>
        </table>
    </section>

    <section id="cart-bottom" class="container">
        <div class="row">
            <div class="total">
                <div>
                    <h5>CART TOTAL</h5>
                    <div class="Hasil">
                        <h6>Subtotal</h6>
                        <p>IDR 77.000</p>
                    </div>
                    <hr class="second-hr">
                    <div class="Hasil">
                        <h6>TOTAL</h6>
                        <p>IDR 77.000</p>
                    </div>

                    <button class="kan">PROCEED TO CHECKOUT</button>
                </div>
            </div>
        </div>
    </section>

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
