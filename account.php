<!DOCTYPE html>
<html lang="en">

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
        <li><a href="login.php" class="
fas fa-sign-out-alt">Sign out</a></li>
      </ul>
      <label for="" class="btn open-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>

  
<div class="profile">
  <div class="profile-pic">
    <img src="./images/user.png" alt="" id="photo"></image>
    <input type="file" name="" id="file" accept="image/*">
    <label for="file" id="uploadBtn"> Choose Photo </label>
  </div>
</div>


</body>

<style type="text/css">
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.profile-pic{
  height: 200px;
  width: 200px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  border-radius: 50%;
  overflow: hidden;
  border: 1px solid grey;
}

#photo{
  height: 100%;
  width: 100%;
}

#file{
  display: none;
}

#uploadBtn{
  height: 40px;
  width: 100%;
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  text-align: center;
  background: rgba(0, 0, 0, 0.7);
  color: wheat;
  line-height: 30px;
  cursor: pointer;
} 



</style>
</html>

