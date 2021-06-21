<!DOCTYPE html>
<html lang="en">

<head>
 <head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Favicon -->
  <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <!-- Glidejs -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.css">

  <!-- Custom StyleSheet -->
  <link rel="stylesheet" href="./styles.css" />
  <title> Team Payaman | Clothings</title>
</head>

  <body>

    <!-- Navigation -->
   <nav class="nav">
    <div class="wrapper container">
      <a href="index.php" class="logo"> <img src="images/logo.png" width="150"></a>
      <ul class="nav-list">
        <div class="top">
          <label for="" class="btn close-btn"><i class="fas fa-times"></i></label>
        </div>
        <li><a href="index.php">Home</a></li>
        <li><a href="products.php">Products</a></li>
        <li>
          <a href="" class="desktop-item">Shop <span><i class="fas fa-chevron-down"></i></span></a>
          <input type="checkbox" id="showMega" />
          <label for="showMega" class="mobile-item">Shop <span><i class="fas fa-chevron-down"></i></span></label>
          <div class="mega-box">
            <div class="content">
              <div class="row">
                <img src="./images/tp.jpg" alt="" />
              </div>
              <div class="row">
                <header>Shop Layout</header>
                <ul class="mega-links">
                  <li><a href="#">Shop With Background</a></li>
                  <li><a href="#">Shop Mini Categories</a></li>
                  <li><a href="#">Shop Only Categories</a></li>
                  <li><a href="#">Shop Icon Categories</a></li>
                </ul>
              </div>
              <div class="row">
                <header>Filter Layout</header>
                <ul class="mega-links">
                  <li><a href="#">Sidebar</a></li>
                  <li><a href="#">Filter Default</a></li>
                  <li><a href="#">Filter Drawer</a></li>
                  <li><a href="#">Filter Dropdown</a></li>
                </ul>
              </div>
              <div class="row">
                <header>Product Layout</header>
                <ul class="mega-links">
                  <li><a href="#">Layout Zoom</a></li>
                  <li><a href="#">Layout Sticky</a></li>
                  <li><a href="#">Layout Sticky 2</a></li>
                  <li><a href="#">Layout Scroll</a></li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li><a href="">Blog</a></li>
        <li>
          <a href="" class="desktop-item">Vendors <span><i class="fas fa-chevron-down"></i></span></a>
          <input type="checkbox" id="showdrop1" />
          <label for="showdrop1" class="mobile-item">Vendors <span><i class="fas fa-chevron-down"></i></span></label>
          <ul class="drop-menu1">
            <li><a href="">Vendor Store listings</a></li>
            <li><a href="">Store Details</a></li>
          </ul>
        </li>

        <li>
          <a href="" class="desktop-item">Page <span><i class="fas fa-chevron-down"></i></span></a>
          <input type="checkbox" id="showdrop2" />
          <label for="showdrop2" class="mobile-item">Page <span><i class="fas fa-chevron-down"></i></span></label>
          <ul class="drop-menu2">
            <li><a href="">About</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Faq</a></li>
            <li><a href="">Page 404</a></li>
          </ul>
        </li>
        <!-- icons -->
        <li class="icons">
          <span><a href="cart.php">
            <img src="./images/shoppingBag.svg" alt="" /></a>
            <!--- <small class="count d-flex">0</small> --->           
          </span>
          <span> <a href="cart.php"><img src="./images/search.svg" alt="" /></a></span>
          <span> <a href="account.php"><img style="width: 22px; height: 22px; " src="./images/user1.png" alt="" /></a></span>
        </li>
      </ul>
      <label for="" class="btn open-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>

  <!-- Product Details -->
  <section class="section product-detail">
    <div class="details container">
      <div class="left">
        <div class="main">
          <img src="./images/Ritwal.png" alt="" />
        </div>
        <div class="thumbnails">
          <div class="thumbnail">
            <img src="./images/TP1.png" alt="" />
          </div>
          <div class="thumbnail">
            <img src="./images/Giyang.png" alt="" />
          </div>
          <div class="thumbnail">
            <img src="./images/Boss2.png" alt="" />
          </div>
          <div class="thumbnail">
            <img src="./images/wlkjn shirt.png" alt="" />
          </div>
        </div>
      </div>
      <div class="right">
        <span>Home/T-shirt</span>
        <h1>Ritwal Shirt</h1>
        <div class="price">₱650.00</div>
        <form>
          <div>
            <select>
              <option value="Select Size" selected disabled>
                Select Size
              </option>
              <option value="1">Small</option>
              <option value="2">Medium</option>
              <option value="3">Large</option>
              <option value="4">Extra Large</option>
            </select>
            <span><i class="fas fa-chevron-down"></i></span>
          </div>
        </form>

        <form class="form">
          <input type="text" placeholder="1" />
          <a href="cart.php" class="addCart">Add To Cart</a>
        </form>
        <h3>Product Detail</h3>
        <p>
          A Ritwal Shirt is unisex.
        </p>
      </div>
    </div>
  </section>

  <!-- Related Products -->

  <section class="section related-products">
    <div class="title">
      <h2>Related Products</h2>
      <span>Select from the premium product brands and save plenty money</span>
    </div>
    <div class="product-layout container">
      <div class="product">
        <div class="img-container">
          <img src="./images/TP1.png" alt="" />
          <div class="addCart">
            <i class="fas fa-shopping-cart"></i>
          </div>

          <ul class="side-icons">
            <span><i class="fas fa-search"></i></span>
            <span><i class="far fa-heart"></i></span>
            <span><i class="fas fa-sliders-h"></i></span>
          </ul>
        </div>
        <div class="bottom">
          <a href="productDetails.php">Team Payaman Shirt</a>
          <div class="price">
            <span>₱800.00</span>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="img-container">
          <img src="./images/Giyang.png" alt="" />
          <div class="addCart">
            <i class="fas fa-shopping-cart"></i>
          </div>

          <ul class="side-icons">
            <span><i class="fas fa-search"></i></span>
            <span><i class="far fa-heart"></i></span>
            <span><i class="fas fa-sliders-h"></i></span>
          </ul>
        </div>
        <div class="bottom">
          <a href="productDetailsGiyang.php">Giyang Shirt</a>
          <div class="price">
            <span>₱400.00</span>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="img-container">
          <img src="./images/Boss2.png" alt="" />
          <div class="addCart">
            <i class="fas fa-shopping-cart"></i>
          </div>

          <ul class="side-icons">
            <span><i class="fas fa-search"></i></span>
            <span><i class="far fa-heart"></i></span>
            <span><i class="fas fa-sliders-h"></i></span>
          </ul>
        </div>
        <div class="bottom">
          <a href="productDetailsBoss.php">Boss Apparel Shirt</a>
          <div class="price">
            <span>₱500.00</span>
          </div>
        </div>
      </div>
      <div class="product">
        <div class="img-container">
          <img src="./images/wlkjn shirt.png" alt="" />
          <div class="addCart">
            <i class="fas fa-shopping-cart"></i>
          </div>

          <ul class="side-icons">
            <span><i class="fas fa-search"></i></span>
            <span><i class="far fa-heart"></i></span>
            <span><i class="fas fa-sliders-h"></i></span>
          </ul>
        </div>
        <div class="bottom">
          <a href="productDetailsWLKJN.php">WLKJN Shirt</a>
          <div class="price">
            <span>₱400.00</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer id="footer" class="section footer">
    <div class="container">
      <div class="footer-container">
        <div class="footer-center">
          <h3>EXTRAS</h3>
          <a href="#">Brands</a>
          <a href="#">Gift Certificates</a>
          <a href="#">Affiliate</a>
          <a href="#">Specials</a>
          <a href="#">Site Map</a>
        </div>
        <div class="footer-center">
          <h3>INFORMATION</h3>
          <a href="#">About Us</a>
          <a href="#">Privacy Policy</a>
          <a href="#">Terms & Conditions</a>
          <a href="#">Contact Us</a>
          <a href="#">Site Map</a>
        </div>
        <div class="footer-center">
          <h3>OUR ACCOUNTS</h3>
          <a href="#">Our Accounts</a>
          <a href="#">Order History</a>
          <a href="#">Wish List</a>
          <a href="#">Newsletter</a>
          <a href="#">Returns</a>
        </div>
        <div class="footer-center">
          <h3>CONTACT US</h3>
          <div>
            <span>
              <i class="fas fa-map-marker-alt"></i>
            </span>
            42 Dream House, Dreammy street, 7131 Dreamville, USA
          </div>
          <div>
            <span>
              <i class="far fa-envelope"></i>
            </span>
            company@gmail.com
          </div>
          <div>
            <span>
              <i class="fas fa-phone"></i>
            </span>
            456-456-4512
          </div>
           <div class="payment-methods">
            <img src="./images/payments.png" alt="">
          </div>
        </div>
      </div>
    </div>
    </div>
  </footer>
  <!-- End Footer -->

  <!-- Custom Scripts -->
  <script src="./js/products.js"></script>
  <script src="./js/slider.js"></script>
  <script src="./js/index.js"></script>
</body>

<style type="text/css">
  :root {
  --primary: #ff4545;
  --white: #fff;
  --black: #222;
  --grey1: #3a3b3c;
  --grey2: #828282;
}

*,
*::before,
*::after {
  margin: 0;
  padding: 0;
  box-sizing: inherit;
}

@import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap");

html {
  box-sizing: border-box;
  font-size: 62.5%;
}

body {
  font-family: "Arial Black", sans-serif;
  font-size: 1.6rem;
  background-color: var(--white);
  color: var(--black);
  font-weight: 400;
}

h1,
h2,
h3,
h4,
h5 {
  font-weight: 600;
}

a {
  text-decoration: none;
  color: inherit;
}

li {
  list-style: none;
}

.container {
  max-width: 114rem;
  margin: 0 auto;
}

@media only screen and (max-width: 1200px) {
  .container {
    padding: 0 3rem;
  }
}

@media only screen and (max-width: 768px) {
  .container {
    max-width: 60rem;
  }
}

.d-flex {
  display: flex;
  align-items: center;
}

nav {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 999;
  background-color: var(--white);
  height: 6.5rem;
  line-height: 6.5rem;
}

.nav.fix-nav {
  width: 100%;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
  z-index: 999;
}

.wrapper .nav-list {
  display: flex;
  float: right;
}

.nav-list li i {
  color: var(--grey2);
}

.nav-list a {
  color: var(--black);
  font-size: 1.5rem;
  padding: 0.9rem 1.5rem;
  border-radius: 0.5rem;
  transition: all 300ms ease;
}

.nav-list li a:hover {
  color: var(--primary);
}

.nav-list .drop-menu1,
.nav-list .drop-menu2 {
  box-shadow: 0 0 2px rgba(0, 0, 0, 0.1);
  width: 20rem;
  top: 8.5rem;
  line-height: 4.5rem;
  position: absolute;
  background-color: var(--white);
  opacity: 0;
  visibility: hidden;
  transition: all 300ms ease;
}

.nav-list .drop-menu1 li a,
.nav-list .drop-menu2 li a {
  display: block;
  font-size: 1.5rem;
  width: 100%;
  padding: 0 0 0 1.5rem;
  border-radius: 0;
  color: var(--grey2);
}

.nav-list .drop-menu1 li a:hover,
.nav-list .drop-menu2 li a:hover {
  color: var(--primary);
}

.nav-list li:hover .drop-menu1,
.nav-list li:hover .drop-menu2,
.nav-list li:hover .mega-box {
  opacity: 1;
  visibility: visible;
  top: 6.5rem;
}

.mega-box {
  box-shadow: 0 0 2px rgba(0, 0, 0, 0.1);
  position: absolute;
  top: 8.5rem;
  left: 0;
  width: 100%;
  padding: 0 3rem;
  background-color: var(--white);
  opacity: 0;
  visibility: hidden;
  transition: all 300ms ease;
}

.mega-box .content {
  padding: 2.5rem 2rem;
  display: flex;
  width: 100%;
  justify-content: space-between;
}

.mega-box .content .row {
  width: calc(25% - 3rem);
  line-height: 4.5rem;
}

.content .row img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.content .row header {
  font-size: 1.6rem;
  font-weight: 700;
  color: var(--grey1);
}

.content .row .mega-links {
  border-left: 1px solid rgba(255, 255, 255, 0.09);
  margin-left: -4rem;
}

.content .row li {
  padding: 0 2rem;
}

.content .row li a {
  padding: 0 2rem;
  display: block;
  font-size: 1.5rem;
  color: var(--grey2);
}

.content .row li a:hover {
  color: var(--primary);
}

.nav-list .mobile-item {
  display: none;
}

.nav-list input {
  display: none;
}

.wrapper .btn {
  color: var(--white);
  font-size: 2rem;
  cursor: pointer;
  display: none;
}

.nav-list .icons span {
  display: inline-block;
  margin: 0.5rem 1rem 0 0;
  position: relative;
}

.nav-list .icons .count {
  justify-content: center;
  position: absolute;
  top: 0rem;
  right: -0.8rem;
  background-color: var(--primary);
  height: 2rem;
  padding: 0.5rem;
  color: var(--white);
  font-weight: 700;
  border-radius: 50%;
}

@media only screen and (max-width: 968px) {
  .wrapper .nav-list {
    position: fixed;
    top: 0;
    left: -100%;
    height: 100%;
    width: 100%;
    max-width: 35rem;
    background-color: var(--white);
    display: block;
    overflow-y: auto;
    line-height: 5rem;
    box-shadow: 0 1.5rem 1.5rem rgba(0, 0, 0, 0.1);
    transition: all 300ms linear;
  }

  .wrapper .nav-list.show {
    left: 0;
  }

  .nav-list li {
    margin: 1.5rem 1rem;
  }

  .nav-list a {
    display: block;
    font-size: 1.8rem;
    padding: 0 2rem;
    color: var(--black);
  }

  .nav-list .drop-menu1,
  .nav-list .drop-menu2 {
    position: static;
    opacity: 1;
    visibility: visible;
    top: 6.5rem;
    padding-left: 2rem;
    width: 100%;
    max-height: 0;
    overflow: hidden;
  }

  #showdrop1:checked ~ .drop-menu1,
  #showdrop2:checked ~ .drop-menu2,
  #showMega:checked ~ .mega-box {
    max-height: 100%;
  }

  .nav-list .drop-menu1 li,
  .nav-list .drop-menu2 li {
    margin: 0;
  }

  .nav-list .drop-menu1 li a,
  .nav-list .drop-menu2 li a {
    color: var(--grey2);
    font-size: 1.5rem;
  }

  .nav-list .desktop-item {
    display: none;
  }

  .nav-list .mobile-item {
    display: block;
    font-size: 1.8rem;
    padding-left: 2rem;
    color: var(--black);
    cursor: pointer;
    border-radius: 0.5rem;
  }

  .nav-list .mobile-item:hover {
    color: var(--primary);
  }

  .mega-box {
    position: static;
    top: 6.5rem;
    padding: 0 2rem;
    opacity: 1;
    visibility: visible;
    max-height: 0;
    overflow: hidden;
    transition: all 300ms ease;
  }

  .mega-box .content {
    flex-direction: column;
    padding: 2rem 2rem 0 2rem;
  }

  .mega-box .content .row {
    width: 100%;
    border-top: 1px solid rgba(255, 255, 255, 0.09);
    margin-bottom: 1.5rem;
  }

  .content .row:nth-child(1),
  .content .row:nth-child(2) {
    border-top: 0;
  }

  .content .row .mega-links {
    border-left: 0;
    padding-left: 2rem;
  }

  .row .mega-links li {
    margin: 0;
  }

  .wrapper .btn {
    display: block;
    color: var(--black);
  }

  .nav-list .top {
    position: relative;
    display: block;
    background-color: var(--primary);
    width: 100%;
    height: 8rem;
  }

  .nav-list .close-btn {
    position: absolute;
    top: 1.5rem;
    right: 2.5rem;
    color: var(--white);
  }

  .nav-list .icons {
    padding-left: 2rem;
  }
}

/* Hero */
.hero {
  height: calc(100vh - 6.5rem);
  background: linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(191,142,12,1) 67%, rgba(233,135,15,1) 100%, rgba(0,212,255,1) 100%);
  position: relative;
  overflow: hidden;
}

.hero .right {
  position: absolute;
  right: -19%;
  bottom: -1%;
}

.hero .right img {
  max-width: 80rem;
  width: 50%;
  height: 60rem;
}

.hero .left {
  color: var(--white);
  position: absolute;
  left: 7%;
  top: 40%;
}

.hero .left span {
  display: inline-block;
  font-size: 2rem;
  margin-bottom: 1rem;
}

.hero .left h1 {
  font-size: 4.5rem;
  margin-bottom: 1rem;
  line-height: 1.2;
}
.hero .left small {
  display: block;
  font-size: 1.6rem;
  margin-bottom: 1.5rem;
}

.hero .left a {
  display: inline-block;
  color: var(--white);
  font-weight: 700;
  border: 2px solid var(--white);
  padding: 0.7rem 1.5rem;
  margin-top: 1rem;
  transition: all 300ms ease-out;
}

.hero .left a:hover {
  color: var(--primary);
  background-color: var(--white);
}

@media only screen and (max-width: 1200px) {
  .hero .right img {
    height: 50rem;
  }

  .hero .left span {
    font-size: 1.7rem;
  }

  .hero .left h1 {
    font-size: 3.5rem;
  }
}

@media only screen and (max-width: 996px) {
  .hero .left {
    top: 30%;
  }

  .hero .right img {
    height: 35rem;
  }

  .hero .right {
    right: -10%;
  }
}

@media only screen and (max-width: 567px) {
  .hero .left {
    top: 25%;
  }

  .hero .right img {
    height: 30rem;
  }

  .hero .right {
    right: -18%;
  }

  .hero .left span {
    font-size: 1.6rem;
  }

  .hero .left h1 {
    font-size: 3rem;
  }
}

/* PROMOTION */
.section {
  padding: 10rem 0 5rem 0;
}

.section .title {
  text-align: center;
  margin-bottom: 5rem;
}

.section .title h2 {
  font-size: 3rem;
  font-weight: 400;
  margin-bottom: 1.5rem;
}

.section .title span {
  color: var(--grey2);
}

.promotion-layout {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 3rem;
}

.promotion-item {
  overflow: hidden;
  position: relative;
  z-index: 0;
}

.promotion-item img {
  object-fit: cover;
  height: 100%;
  width: 100%;
  transition: all 500ms ease-in-out;
}

.promotion-content {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: var(--white);
  text-align: center;
  z-index: 3;
}

.promotion-content h3 {
  background-color: rgba(0, 0, 0, 0.8);
  border-radius: 5rem;
  padding: 0.7rem 1.4rem;
  font-size: 1.7rem;
  font-weight: inherit;
  margin-bottom: 1rem;
  transition: all 300ms ease-in-out;
}

.promotion-content a {
  transition: all 300ms ease-in-out;
  font-size: 1.4rem;
}

.promotion-content a:hover {
  color: var(--primary);
}

.promotion-item:hover .promotion-content h3 {
  background-color: var(--white);
  color: var(--black);
}

.promotion-item:hover img {
  transform: scale(1.2);
}

.promotion-item::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.4);
  opacity: 0;
  visibility: hidden;
  transition: all 500ms ease-in-out;
}

.promotion-item:hover::after {
  visibility: visible;
  opacity: 1;
}

@media only screen and (max-width: 1200px) {
  .promotion-content h3 {
    background-color: rgba(0, 0, 0, 0.8);
    border-radius: 5rem;
    padding: 0.7rem 1.4rem;
    font-size: 1.6rem;
  }
}

@media only screen and (max-width: 996px) {
  .promotion-layout {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media only screen and (max-width: 768px) {
  .promotion-layout {
    grid-template-columns: 1fr;
  }
}

/* PRODUCTS */
.section .product-layout {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
  gap: 3rem;
  max-width: 130rem;
  margin: 0 auto;
  padding: 0 1.6rem;
}

.product {
  overflow: hidden;
}

.product .img-container {
  position: relative;
  cursor: pointer;
}

.product .img-container img {
  object-fit: cover;
  height: 100%;
  width: 100%;
}

.product .bottom {
  padding: 1rem;
  text-align: center;
}

.product .bottom a {
  margin-bottom: 1rem;
  font-weight: inherit;
  font-size: 1.5rem;
}

.product .bottom a:hover {
  color: var(--primary);
}

.product .bottom span {
  color: var(--primary);
  font-size: 1.8rem;
}

.product .bottom .cancel {
  font-size: 1.4rem;
  color: var(--grey2);
  text-decoration: line-through;
}

.product .addCart {
  position: absolute;
  right: 0;
  bottom: 0.6rem;
  background-color: var(--white);
  border-radius: 50%;
  padding: 1.3rem 1.6rem;
  box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.1);
  transition: all 300ms ease-in-out;
}

.product:hover .addCart {
  border-radius: 1rem 0 0 0;
}

.product .addCart:hover {
  background-color: var(--primary);
  color: var(--white);
}

.product i {
  transition: all 300ms ease-in-out;
}

.product .side-icons {
  position: absolute;
  right: 0;
  top: 30%;
  transform: translate(80%, -50%);
  display: flex;
  flex-direction: column;
  padding: 1rem;
  transition: all 500ms ease-in-out;
}

.product .side-icons span {
  font-size: 1.4rem;
  background-color: var(--white);
  margin: 0.3rem;
  padding: 1rem 1.3rem;
  border-radius: 50%;
  transition: all 300ms ease-in-out;
}

.product .side-icons span:hover {
  background-color: var(--primary);
  color: var(--white);
}

.product:hover .side-icons {
  transform: translate(0%, -50%);
}

@media only screen and (max-width: 996px) {
  .prodouct-layout {
    grid-template-columns: repeat(3, 1fr);
  }
}

@media only screen and (max-width: 768px) {
  .prodouct-layout {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media only screen and (max-width: 567px) {
  .prodouct-layout {
    grid-template-columns: 1fr;
  }
}

/* ADVERTS */
.advert .advert-layout {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 3rem;
}

.advert-layout .item {
  position: relative;
  z-index: 0;
  width: 100%;
  overflow: hidden;
}

.advert-layout img {
  object-fit: cover;
  height: 100%;
  width: 100%;
  transition: all 300ms ease-in-out;
}

.advert-layout .content {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  z-index: 1;
}

.advert-layout .left {
  right: 10%;
}

.advert-layout .right {
  left: 10%;
}

.advert-layout .content span {
  display: block;
  margin-bottom: 1rem;
  transition: all 300ms ease-in-out;
}

.advert-layout .content h3 {
  font-size: 3rem;
  font-weight: inherit;
  margin-bottom: 1rem;
  transition: all 300ms ease-in-out;
}

.advert-layout .content a {
  transition: all 300ms ease-in-out;
}

.advert-layout .content a:hover {
  color: var(--primary);
}

.advert-layout .item::after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  transition: all 300ms ease-in-out;
}

.advert-layout .item:hover::after {
  background-color: rgba(223, 74, 74, 0.4);
}

.advert-layout .item:hover .content {
  color: var(--white);
}

.advert-layout .item:hover .content a {
  color: var(--white);
}

.advert-layout .item:hover img {
  transform: scale(1.1);
}

@media only screen and (max-width: 996px) {
  .advert-layout .left {
    right: 5%;
  }

  .advert-layout .right {
    left: 5%;
  }
}

@media only screen and (max-width: 768px) {
  .advert .advert-layout {
    grid-template-columns: 1fr;
  }
}

@media only screen and (max-width: 567px) {
  .advert-layout .content span {
    font-size: 1.5rem;
    margin-bottom: 0.6rem;
  }

  .advert-layout .content h3 {
    font-size: 2rem;
    margin-bottom: 0.6rem;
  }

  .advert-layout .content a {
    transition: all 300ms ease-in-out;
  }
}

/* BRANDS */
.brands li img {
  width: 100%;
  height: 100%;
  object-fit: contain;
}

/* FOOTER */

.footer {
  background-color: var(--black);
  padding: 6rem 1rem;
  line-height: 3rem;
}

.footer-center span {
  margin-right: 1rem;
}

.footer-container {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  color: var(--white);
}

.footer-center a:link,
.footer-center a:visited {
  display: block;
  color: #f1f1f1;
  font-size: 1.4rem;
  transition: 0.6s;
}

.footer-center a:hover {
  color: var(--primary);
}

.footer-center div {
  color: #f1f1f1;
  font-size: 1.4rem;
}

.footer-center h3 {
  font-size: 1.8rem;
  font-weight: 400;
  margin-bottom: 1rem;
}

.footer .payment-methods {
  margin-top: 2rem;
}

@media only screen and (max-width: 998px) {
  .footer-container {
    grid-template-columns: repeat(2, 1fr);
    row-gap: 2rem;
  }
}

@media only screen and (max-width: 768px) {
  .footer-container {
    grid-template-columns: 1fr;
    row-gap: 2rem;
  }
}

/* Cart Page */
.cart {
  margin: 20rem auto;
}

table {
  width: 100%;
  border-collapse: collapse;
}

.cart-info {
  display: flex;
  flex-wrap: wrap;
}

.cart-info span {
  color: var(--grey2);
}

th {
  text-align: left;
  padding: 0.5rem;
  color: var(--white);
  background-color: var(--primary);
  font-weight: normal;
}

td {
  padding: 1rem 0.5rem;
}

td input {
  width: 5rem;
  height: 3rem;
  padding: 0.5rem;
}

td a {
  color: var(--primary);
  font-size: 1.4rem;
}

td img {
  width: 8rem;
  height: 8rem;
  margin-right: 1rem;
}

.total-price {
  display: flex;
  justify-content: flex-end;
  align-items: end;
  flex-direction: column;
  margin-top: 2rem;
}

.total-price a {
  display: inline-block;
  background-color: var(--primary);
  color: var(--white);
  padding: 0.7rem 1.6rem;
  font-weight: 700;
  border-radius: 3rem;
}

.total-price table {
  border-top: 3px solid var(--primary);
  width: 100%;
  max-width: 35rem;
}

td:last-child {
  text-align: right;
}

th:last-child {
  text-align: right;
}

@media only screen and (max-width: 567px) {
  .cart-info p {
    display: none;
  }
}

/* PRODUCT DETAILS */

.product-detail {
  margin-top: 5rem;
}

.product-detail .details {
  display: grid;
  grid-template-columns: 1fr 1.2fr;
  gap: 7rem;
}

.product-detail .left {
  display: flex;
  flex-direction: column;
}

.product-detail .left .main {
  text-align: center;
  background-color: #f6f2f1;
  margin-bottom: 2rem;
  height: 45rem;
  padding: 3rem;
}

.product-detail .left .main img {
  object-fit: contain;
  height: 100%;
  width: 100%;
}

.product-detail .thumbnails {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 1rem;
  width: 100%;
}

.product-detail .thumbnail {
  height: 10rem;
  background-color: #f6f2f1;
  text-align: center;
}

.product-detail .thumbnail img {
  height: 100%;
  object-fit: contain;
}

.product-detail .right span {
  display: inline-block;
  font-size: 1.5rem;
  margin-bottom: 1rem;
}

.product-detail .right h1 {
  font-size: 4rem;
  line-height: 1.2;
  margin-bottom: 2rem;
}

.product-detail .right .price {
  font-size: 600;
  font-size: 2rem;
  color: var(--primary);
  margin-bottom: 2rem;
}

.product-detail .right div {
  display: inline-block;
  position: relative;
  z-index: 1;
}

.product-detail .right select {
  font-family: "Poppins", sans-serif;
  width: 20rem;
  padding: 0.7rem;
  border: 1px solid var(--grey1);
  appearance: none;
  outline: none;
}

.product-detail form {
  margin-bottom: 2rem;
}

.product-detail form span {
  position: absolute;
  top: 50%;
  right: 1rem;
  transform: translateY(-50%);
  font-size: 2rem;
  z-index: 0;
}

.product-detail .form {
  margin-bottom: 3rem;
}

.product-detail .form input {
  padding: 0.8rem;
  text-align: center;
  width: 3.5rem;
  margin-right: 2rem;
}

.product-detail .form .addCart {
  background: var(--primary);
  padding: 0.8rem 4rem;
  color: var(--white);
  border-radius: 3rem;
}

.product-detail h3 {
  text-transform: uppercase;
  margin-bottom: 2rem;
}

@media only screen and (max-width: 996px) {
  .product-detail .left {
    height: 45rem;
  }

  .product-detail .details {
    gap: 3rem;
  }

  .product-detail .thumbnails {
    gap: 0.5rem;
  }

  .product-detail .thumbnail {
    background-color: #f6f2f1;
    text-align: center;
  }
}

@media only screen and (max-width: 650px) {
  .product-detail .details {
    grid-template-columns: 1fr;
  }

  .product-detail .right {
    margin-top: 10rem;
  }

  .product-detail .left {
    width: 100%;
    height: 45rem;
  }

  .product-detail .details {
    gap: 3rem;
  }

  .product-detail .thumbnail {
    width: 6rem;
    height: 6rem;
  }
}

/* PRODUCTS */

.products {
  margin-top: 10rem;
}

.products-layout {
  display: grid;
  grid-template-columns: 1.05fr 3fr;
  gap: 0 1rem;
}

.col-3-of-4 .product-layout {
  grid-template-columns: repeat(3, 1fr);
}

.col-3-of-4 {
  text-align: center;
}

@media only screen and (max-width: 996px) {
  .col-3-of-4 .product-layout {
    grid-template-columns: repeat(2, 1fr);
  }
}

.col-3-of-4 form {
  display: flex;
  align-items: center;
  justify-content: end;
  margin-bottom: 3rem;
}

.col-3-of-4 form .item {
  margin-right: 1rem;
}

.col-3-of-4 form label {
  color: var(--grey1);
}

.col-3-of-4 form select {
  font-family: "Open Sans", sans-serif;
  padding: 1rem;
  width: 10rem;
  border: 1px solid #f2f2f2;
  outline: none;
}

.col-3-of-4 form a {
  display: inline-block;
  padding: 1rem 3rem;
  border-radius: 4rem;
  margin-right: 1rem;
  background-color: var(--primary);
  color: var(--white);
  transition: all 300ms ease-in-out;
}

.col-3-of-4 form a:hover {
  background-color: var(--black);
}

@media only screen and (max-width: 768px) {
  .products-layout {
    padding: 0 5rem;
  }

  .col-3-of-4 form {
    flex-direction: column;
    align-items: end;
  }

  .col-3-of-4 form a {
    margin-right: 0;
  }

  .col-3-of-4 form .item {
    margin-right: 0;
    margin-bottom: 1rem;
  }
}

@media only screen and (max-width: 567px) {
  .col-3-of-4 .product-layout {
    grid-template-columns: 1fr;
  }
}

.col-1-of-4 .block-title {
  color: var(--grey1);
  margin-bottom: 1.6rem;
}

.col-1-of-4 h3 {
  font-size: 2.7rem;
  font-weight: inherit;
}

.col-1-of-4 div {
  margin-bottom: 8rem;
}

.block-content li {
  margin-bottom: 1rem;
}

.block-content li label {
  color: var(--grey2);
  margin-left: 1rem;
}

.block-content li label small {
  font-size: 1rem;
}

.block-content li input {
  outline: none;
}

.pagination {
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 4rem 0;
}

.pagination span {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 3.5rem;
  height: 3.5rem;
  border-radius: 50%;
  color: var(--black);
  font-size: 1.3rem;
  border: 1px solid var(--grey2);
  margin-right: 0.5rem;
  cursor: pointer;
}

.pagination span.last {
  width: 7rem;
  border-radius: 3rem;
}

.pagination span:hover {
  border: 1px solid var(--primary);
  background-color: var(--primary);
  color: var(--white);
}

@media only screen and (max-width: 768px) {
  .products-layout {
    grid-template-columns: 1fr;
    gap: 4rem 0;
  }
}
</style>

</html>